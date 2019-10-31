@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-8">
        <form action="{{ route('dogs.update', $dog->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" aria-describedby="dogs name" value="{{ $dog->name }}">
            </div>
            <div class="form-group">
                <label for="age">Age: </label>
                <input type="text" class="form-control" name="age" aria-describedby="dogs age" value="{{ $dog->age }}">
            </div>
            <div class="form-group">
                <label for="found_date">Date Aquired:</label>
                <input type="date" class="form-control" name="found_date" aria-describedby="date dog was aquired" value="{{ $dog->date }}">
                <small>Enter the date the dog was found</small>
            </div>
            <div class="form-group">
                <label for="breed">Breed: </label>
                <input type="text" class="form-control" name="breed" aria-describedby="dogs breed" value="{{ $dog->breed }}">
            </div>
            <div class="form-group">
                <label for="sex">Sex: </label>
                <select class="form-control" name="sex" aria-describedby="dogs age">
                    @if ($dog->sex == 1)
                        <option value="1" selected aria-selected="true">Male</option>
                        <option value="2">Female</option>
                    @else
                        <option value="1">Male</option>
                        <option value="2" selected aria-selected="true">Female</option>
                    @endif
                </select>
            </div>
            <div class="form-group">
                <label for="nature">Nature: </label>
                <input type="text" class="form-control" name="nature" aria-describedby="dogs nature" value="{{ $dog->nature }}">
            </div>
            <div class="form-group">
                <label for="health">Health: </label>
                <input type="text" class="form-control" name="health" aria-describedby="dogs health" value="{{ $dog->health }}">
            </div>
            <div class="form-group">
                <label for="bio">Bio: </label>
                <p>
                    <small class="form-text text-muted">Be as detailed as possible, but try keep this around two paragraphs if possible.</small>
                </p>
                <textarea class="form-control" name="bio" aria-describedby="dog bio" rows="5">{{ $dog->bio }}</textarea>
            </div>
            <div class="form-group">
                <label for="img_path">Upload an Image: </label>
                <input type="file" class="form-control-file" name="img_path" aria-describedby="image upload" >
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection