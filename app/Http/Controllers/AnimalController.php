<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Animal;

class AnimalController extends Controller
{

    public function index()
    {
        $animals = Animal::orderBy('name', 'asc')
            ->limit('25')
            ->get();

        return view('index.index', compact('animals'));
    }
}
