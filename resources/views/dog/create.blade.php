@extends('layouts.kenel')

@section('content')
<div class="container">
    <div class="col-md-8">
        <form action="{{ route('dogs.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" aria-describedby="dogs name" placeholder="Enter the dogs name">
            </div>
            <div class="form-group">
                <label for="age">Age: </label>
                <input type="text" class="form-control" name="age" aria-describedby="dogs age" placeholder="Enter the dogs approximate age">
            </div>
            <div class="form-group">
                <label for="found_date">Date Aquired:</label>
                <input type="date" class="form-control" name="found_date" aria-describedby="date dog was aquired">
                <small>Enter the date the dog was found</small>
            </div>
            <div class="form-group">
                <label for="breed_id">Breed: </label>
                <select name="breed_id" class="form-control">
                    <option value=""></option>
                    @foreach ($breeds as $breed)
                    <option value="{{ $breed->id }}">{{ $breed->name }}</option>
                    @endforeach
                </select>
                {{-- <input type="text" class="form-control" name="breed" aria-describedby="dogs breed" placeholder="Enter the dogs approximate breed"> --}}
            </div>
            <div class="form-group">
                <label for="gender">Gender: </label>
                <select class="form-control" name="gender" aria-describedby="gender">
                    <option value=""></option>
                    <option value="1">Male</option>
                    <option value="2">Female</option>
                </select>
            </div>
            <div class="form-group">
                <label for="nature">Nature: </label>
                <input type="text" class="form-control" name="nature" aria-describedby="dogs nature" placeholder="Enter a breif description of the dogs nature">
            </div>
            <div class="form-group">
                <label for="health">Health: </label>
                <input type="text" class="form-control" name="health" aria-describedby="dogs health" placeholder="Enter any known health issues or concerns about the dog.">
            </div>
            <div class="form-group">
                <label for="bio">Bio: </label>
                <p>
                    <small class="form-text text-muted">Be as detailed as possible, but try keep this around two paragraphs if possible.</small>
                </p>
                <textarea class="form-control" name="bio" aria-describedby="dog bio" placeholder="Enter a bio for the dog" rows="5"></textarea>
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