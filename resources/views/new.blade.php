@extends('layouts/app')

@section('content')
    <div class="mt-10 w-25 mx-auto">
        <form method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="title">Title:</label>
                <input class="form-control" type="text" name="title" placeholder="title:">
            </div>
            <div>
                <label for="description">Description:</label>
                <input class="form-control" type="text" name="description" placeholder="description:">
            </div>
            <div>
                <label for="image">Image:</label>
                <input class="form-control" type="file" name="image">
            </div>
            @error('title')
            <div class="alert alert-danger mb-0 mt-2">{{ $message }}</div>
            @enderror
            @error('description')
            <div class="alert alert-danger mb-0 mt-2">{{ $message }}</div>
            @enderror
            @error('image')
            <div class="alert alert-danger mb-0 mt-2">{{ $message }}</div>
            @enderror
            <div>
                <button class="btn btn-primary mt-3">Submit</button>
            </div>
        </form>
    </div>
@endsection
