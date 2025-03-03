<?php

namespace App\Http\Controllers;

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
        $tours = Tour::all();

        return view('tour/index', compact('tours'));
    }

    public function create()
    {
        $tours = Tour::all();

        return view('tour/create');
    }

    public function store()
    {
        $tours = new Tour();

        return redirect('/tours');

    }

    public function edit($tour)
    {
        $tour = Tour::find($tour);

        return view('tour/edit', compact('tour'));
    }

    public function update(Request $request, $tour)
    {
        $this->save($tour, $request);

        return redirect('/tours');
    }

    public function delete($tour)
    {
        $tour->delete();
        return redirect('/tours');

    }

    public function save($tour, $request)
    {
        $tour->name = $request->name;
        $tour->image = $request->image;
        $tour->amount = $request->amount;
        $tour->save();
    }
}
