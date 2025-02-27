<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExhibitsController extends Controller
{
    public function index()
    {
        return view('home');
    }
}
