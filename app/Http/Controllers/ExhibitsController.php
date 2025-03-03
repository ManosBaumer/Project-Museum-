<?php

namespace App\Http\Controllers;

use App\Models\Exhibit;
use App\Http\Requests\ExhibitRequest;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExhibitsController extends Controller
{
    public function index()
    {
        $exhibits = Exhibit::all();
        return view('exhibit/index', compact('exhibits'));
    }

    public function create()
    {
        return view('exhibit/create');
    }


    public function store()
    {
    
        $exhibit= new Exhibit();
     
        return redirect('/exhibits');
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
