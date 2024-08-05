@extends('layouts/app')

@section('content')
    <div class="container mx-auto">
        <h3>{{$post->title}}</h3>
        <div>
            Post id = {{$post->id}}
        </div>
        <img class="w-25" src="{{asset('photos/'.$post->image)}}" alt="image">
        <div>
            {{$post->description}}
        </div>
    </div>
@endsection
