<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExhibitsController extends Controller
{
    public function index()
    {
        return view('exhibit/index');
    }

    public function create()
    {
        return view('exhibit/create');
    }

    
    public function store()
    {

    }

    public function edit()
    {
        return view('exhibit/edit');
    }

    public function update()
    {

    }

    public function delete()
    {

    }
}
