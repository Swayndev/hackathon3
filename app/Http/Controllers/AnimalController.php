<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Animal;

class AnimalController extends Controller
{

    public function searchAnimal(Request $request)
    {
        $animals = Animal::where('name', 'LIKE', '%' . $request->name . '%')
            ->get();

        return view('index.searchAnimal', compact('animals'));
    }

    
    // {
    //     $animals = Animal::orderBy('name', 'asc')
    //         ->limit('25')
    //         ->get();

    //     return view('index.index', compact('animals'));
    // }
}
