@extends('layouts.app')

@section('content')
<div class="container">
    <div class="md-col-6">
        {{-- <img src="{{ $dog->img_path }}" alt="image of {{ $dog->name }}"> --}}
        <img src="{{ $image }}" alt="puppy test">
    </div>
    <div class="md-col-6">
        <h2>{{ $dog->name }}</h2>
        @foreach ($breeds as $breed)
            <p><b>Breed:</b> {{ $breed->name }}</p>
        @endforeach        
        <p><b>Age:</b> {{ $dog->age }}</p>
        <p><b>Date Aquired:</b> {{ $dog->found_date }}</p>
        @foreach ($genders as $gender)
            <p><b>Gender:</b> {{ $gender->name }}</p>
        @endforeach
        {{-- <p><b>Gender:</b> {{ $dog->sex }}</p> --}}
        <p><b>Nature:</b> {{ $dog->nature }}</p>
        <p><b>Health:</b> {{ $dog->health }}</p>
        <p><b>Bio:</b> {{ $dog->bio }}</p>
    </div>
</div>
@endsection