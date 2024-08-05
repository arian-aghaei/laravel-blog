@extends('layout.master')

@section('content')
    <div class="container mx-auto">
        <img class="w-75" src="{{asset('photos/'.$post->image)}}" alt="image">
        <div></div>
        <br>
        <h2  class="text-white display-6 fw-bold">{{$post->title}}</h2>
        <br>
        <div class="text-white fw-bold">
            Post id = {{$post->id}}
        </div>
        br
        <div class="text-white display-6">
            {{$post->description}}
        </div>
    </div>
@endsection
