<?php

namespace App\Http\Controllers;

use App\Models\Exhibit;
use App\Models\Multimedia;
use App\Models\Tour;
use Illuminate\Http\Request;

class ToursController extends Controller
{
    public function home()
    {
        return view('home');
    }


    public function index()
    {
        $tours = Tour::with('multimedia')->get();
        return view('tour/index', compact('tours'));
    }

    public function create()
    {
        $exhibits = Multimedia::all();

        return view('tour/create', compact('exhibits'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'amount' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $tour = new Tour();
        $tour->name = $request->name;
        $tour->amount = $request->amount;
        $tour->save();

        $multimedia = new Multimedia();
        
        if ($request->hasFile('image')) {
            
            $imagePath = $request->file('image')->store('images');
            $multimedia->image = basename($imagePath);
            
        }

        $multimedia->save();
        $tour->multimedia()->attach($multimedia->id);
        return redirect()->route('Tours.index')->with('success', 'Tour created successfully.');
    }

    public function edit($tour)
    {
        $tour = Tour::with('multimedia')->find($tour);
        return view('tour/edit', compact('tour'));
    }

    public function update(Request $request, $tour)
    {

        $request->validate([
            'name' => 'required',
            'amount' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $tour = Tour::find($tour);
        $tour->name = $request->name;
        $tour->amount = $request->amount;
        $tour->save();


        $multimedia = $tour->multimedia;

        if ($request->hasFile('image')) {
            
            $imagePath = $request->file('image')->store('images');
            $multimedia->image = basename($imagePath);
        }
        
        $multimedia = $tour->multimedia()->first(); 
        $multimedia->save();
        return redirect()->route('Tours.index')->with('success', 'Tour updated successfully.');
    }

    public function delete($tour)
    {
        $tour = Tour::find($tour);
        $tour->multimedia()->detach();
        $tour->delete();
        return redirect()->route('Tours.index');
    }

    public function select()
    {
        return view('3D/select');
    }

    public function _3D()
    {
        return view('3D/museum');
    }
}
