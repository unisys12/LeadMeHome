@extends('layouts.app')

@section('content')
<div class="container">
    <div class="md-6-col">
        @if(session('success'))
        <div class="messages">
            <h3>{{ session('success') }}</h3>
        </div>
        @endif
        <h1>Breeds</h1>
        @if (count($breeds) > 0)
            @foreach ($breeds as $breed)
                <a href="{{ route('breeds.show', $breed->id) }}"><h2>{{ $breed->name }}</h2></a>
            @endforeach
        @else
            <p>No Breeds have been set!</p>
        @endif
    </div>
        <a href="{{ route('breeds.create') }}">
            <button btn btn-primary>Add New Breed</button>
        </a>
</div>
@endsection