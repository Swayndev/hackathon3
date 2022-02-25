<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

// use Illuminate\Http\Request;

use App\Models\Owner;
use App\Models\Animal;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function listOwner()
    {
        $owners = Owner::orderBy('first_name', 'asc')
            ->limit('25')
            ->get();

        return view('index.searchOwner', compact('owners'));
    }

    public function listAnimal()
    {
        $animals = Animal::orderBy('name', 'asc')
            ->limit('25')
            ->get();

        return view('index.searchAnimal', compact('animals'));
    }

    //  ======================================================

    public function detailOwner()
    {

        return view('index.detailOwner');
    }


    public function detailAnimal($id)
    {
        $animal = Animal::where('id', $id)->get()->first();

        return view('index.detailAnimal', compact('animal'));
    }
}
