@extends('layouts.app')

@section('content')
<div class="container">
    <div class="md-col-6">
        <form action="{{ route('breeds.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Breed Name:</label>
            <input type="text" name="name" class="form-control" aria-labelledby="name">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Add New Breed</button>
        </div>
        </form>
    </div>
</div>
@endsection