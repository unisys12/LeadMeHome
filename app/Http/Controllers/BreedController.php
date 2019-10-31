<?php

namespace App\Http\Controllers;

use App\Breeds;
use Illuminate\Http\Request;

class BreedController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('breed.index', ['breeds' => Breeds::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('breed.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required'
            ]
        );

        $breed = new Breeds(
            [
                'name' => $request->name
            ]
        );

        $breed->save();

        return redirect('/breeds')->with('success', $request->name . ' was added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  id $id resource id
     * 
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('breed.show')->with('breed', Breeds::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param id $id resource id
     * 
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('breed.edit')->with('breed', Breeds::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request  $request request params
     * @param \App\Breeds              $breeds  resource
     * 
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $breed = Breeds::find($id);

        $request->validate(
            [
                'name' => 'required'
            ]
        );

        $breed = new Breeds(
            [
                'name' => $request->name
            ]
        );

        $breed->save();

        return redirect('/breeds')->with('success', $request->name . ' was updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Breeds  $breeds
     * @return \Illuminate\Http\Response
     */
    public function destroy(Breeds $breeds)
    {
        //
    }
}
