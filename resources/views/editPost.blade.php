@extends('layouts/app')

@section('content')
    <div class="w-25 mx-auto">
        <h3 class="my-4">Edit</h3>
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
            <div>
                <button class="btn btn-primary mt-3">Submit</button>
            </div>
        </form>
    </div>
@endsection
