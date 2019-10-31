<?php

namespace App\Http\Controllers;

use App\Dogs;
use App\Breeds;
use App\Genders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DogController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dog.index', ['dogs' => Dogs::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dog.create')->with('breeds', Breeds::all());
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
                'name' => 'required',
                'age' => 'required',
                'found_date' => 'required',
                'breed_id' => 'required',
                'gender_id' => 'required',
                'nature' => 'required',
                'health' => 'required',
                'bio' => 'required'
            ]
        );

        $dog = new Dogs(
            [
                'name' => $request->get('name'),
                'age' => $request->get('age'),
                'found_date' => $request->get('found_date'),
                'breed_id' => $request->get('breed_id'),
                'gender_id' => $request->get('gender_id'),
                'nature' => $request->get('nature'),
                'health' => $request->get('health'),
                'bio' => $request->get('bio'),
                'img_path' => $request->get('img_path')
            ]
        );

        $dog->save();

        return redirect('/dogs')->with('success', $dog->name . ' was added to the kenel!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view(
            'dog.show',
            [
                'image' => Storage::url('puppy_test.jpeg'),
                'dog' => Dogs::find($id),
                'breeds' => Breeds::all(),
                'genders' => Genders::all()
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view(
            'dog.edit',
            [
                'dog' => Dogs::find($id),
                'breeds' => Breeds::all(),
                'genders' => Genders::all()
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dog = Dogs::find($id);

        $request->validate(
            [
                'name' => 'required',
                'age' => 'required',
                'found_date' => 'required',
                'breed' => 'required',
                'gender_id' => 'required',
                'nature' => 'required',
                'health' => 'required',
                'bio' => 'required'
            ]
        );


        $dog->name = $request->get('name');
        $dog->age = $request->get('age');
        $dog->found_date = $request->get('found_date');
        $dog->breed = $request->get('breed');
        $dog->gender_id = $request->get('gender_id');
        $dog->nature = $request->get('nature');
        $dog->health = $request->get('health');
        $dog->bio = $request->get('bio');
        $dog->img_path = $request->get('img_path');

        $dog->save();

        return redirect('/dogs')->with('success', $dog->name . ' was updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
