<?php

namespace App\Http\Controllers;

use App\Models\Exhibit;
use App\Models\Multimedia;
use Illuminate\Http\Request;
use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\Label\LabelAlignment;
use Endroid\QrCode\Label\Font\NotoSans;
use Endroid\QrCode\RoundBlockSizeMode;
use Endroid\QrCode\Writer\PngWriter;

class ExhibitsController extends Controller
{
    public function index()
    {
        $exhibits = Exhibit::with('multimedia')->get();
        return view('exhibit/index', compact('exhibits'));
    }

    public function create()
    {
        return view('exhibit/create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'artist' => 'required',
            'date' => 'required',
            'location' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'video' => 'nullable|mimes:mp4,mov,ogg,qt,flv|max:20000',
            'audio' => 'nullable|mimes:mp3,wav|max:10000',
        ]);

        $exhibit = new Exhibit();
        $exhibit->title = $request->title;
        $exhibit->description = $request->description;
        $exhibit->artist = $request->artist;
        $exhibit->date = $request->date;
        $exhibit->location = $request->location;
        $exhibit->save();

        $multimedia = new Multimedia();

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store( 'app/public/images');
            $multimedia->image = basename($imagePath);
        }

        // For video upload
        if ($request->hasFile('video')) {
            $videoPath = $request->file('video')->store('app/public/videos');
            $multimedia->video = basename($videoPath);
        }

        // For audio upload
        if ($request->hasFile('audio')) {
            $audioPath = $request->file('audio')->store('app/public/audios');
            $multimedia->audio = basename($audioPath);
        }

        // Generate QR code with location value
        $qrCode = Builder::create()
            ->writer(new PngWriter())
            ->data($exhibit->location)
            ->build();

            $qrCodePath = 'qrcodes/' . uniqid() . '.png';
            $qrCode->saveToFile(storage_path('app/public/' . $qrCodePath));
            $multimedia->qrcode = basename($qrCodePath);

        $multimedia->save();
        $exhibit->multimedia()->attach($multimedia->id);

        return redirect()->route('Exhibits.index')->with('success', 'Exhibit created successfully.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'artist' => 'required',
            'date' => 'required',
            'location' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'video' => 'nullable|mimes:mp4,mov,ogg,qt|max:20000',
            'audio' => 'nullable|mimes:mp3,wav|max:10000',
        ]);

        $exhibit = Exhibit::find($id);
        $exhibit->title = $request->title;
        $exhibit->description = $request->description;
        $exhibit->artist = $request->artist;
        $exhibit->date = $request->date;
        $exhibit->location = $request->location;
        $exhibit->save();

        $multimedia = $exhibit->multimedia()->first();

        // Regenerate QR code with updated location value
        $qrCode = Builder::create()
            ->writer(new PngWriter())
            ->data($exhibit->location)
            ->build();

        $qrCodePath = 'qrcodes/' . uniqid() . '.png';
        $qrCode->saveToFile(storage_path('app/public/' . $qrCodePath));
        $multimedia->qrcode = basename($qrCodePath);

        $multimedia->save();

        return redirect()->route('Exhibits.index')->with('success', 'Exhibit updated successfully.');
    }

    public function edit($id)
    {
        $exhibit = Exhibit::with('multimedia')->find($id);
        return view('exhibit/edit', compact('exhibit'));
    }

    public function show($id)
    {
        // Retrieve the exhibit along with its multimedia items
        $exhibit = Exhibit::with('multimedia')->findOrFail($id);

        // Pass the exhibit to the view
        return view('exhibit.show', compact('exhibit'));
    }

    public function delete($id)
    {
        $exhibit = Exhibit::find($id);
        $exhibit->multimedia()->detach();
        $exhibit->delete();

        return redirect()->route('Exhibits.index');
    }
}
