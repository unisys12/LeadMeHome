@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-12">
        @if(session('success'))
        <div class="messages">
            <h3>{{ session('success') }}</h3>
        </div>
        @endif
        <h1>All Dogs</h1>
        @isset ($dogs)
            <h2>Kenel Listings</h2>
            @foreach ($dogs as $dog)
                <p><a href="{{ route('dogs.show', $dog->id) }}">{{ $dog->name }}</a></p>
            @endforeach
        @endisset
    </div>
    <a href="{{ route('dogs.create') }}">Add New Dog</a>
</div>
@endsection