@extends('layouts.app')

@section('content')
<div class="container">
    <div class="md-col-6">
        <form action="{{ route('breeds.update') }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="name">Breed Name:</label>
            <input type="text" name="name" value="{{ $breed->name }}" class="form-control" aria-labelledby="name">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Add New Breed</button>
        </div>
        </form>
    </div>
</div>
@endsection