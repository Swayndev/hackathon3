<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Owner;

class OwnerController extends Controller
{
    //

    public function index()
    {

        $owners = Owner::orderBy('first_name', 'asc')
            ->limit('25')
            ->get();

        return view('pages.index', compact('owners'));
        //     
    }


    public function show($id = null)
    {
        // $owners = Owner::findOrFail($id);

        // dd($movie);

        // return view('owners.show', compact('owners'));

        // if (isset($id)) {
        //     return $id;
        // } else {
        //     return 'no id';
        // }
    }

    public function create()
    {
        // return view('');
    }


    public function store(Request $request)   // <==== give us option how access input from the form
    {
        // $owner = new Owner();
        // $owner->name = $request->input('name'); // ============

        // $owner->save();                           // store the data inputed by the user into the DB

        // return redirect()->action('OwnerController@show', ['id' => $owner->id]);  // ===========
    }

    public function delete($id)
    {
        // $owner = Owner::findOrFail($id);

        // $owner->delete();

        // session()->flash('success_message', 'The comment was successfully saved!');

        // return redirect()->action('OwnerController@index');
    }
}
