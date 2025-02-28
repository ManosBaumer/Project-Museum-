<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToursController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function index()
    {
        return view('tour.index');
    }

    public function create()
    {
        return view('tour.create');
    }

    public function store()
    {

    }

    public function edit()
    {
        return view('tour.edit');
    }

    public function update()
    {

    }

    public function delete()
    {

    }
}
