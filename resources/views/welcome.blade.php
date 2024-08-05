@extends('layout.master')

@section('content')
    @foreach($posts as $post)
        <div class="card post-item bg-transparent border-0 mb-5">
            <a href="{{route('post.home', $post->title)}}">
                <img class="card-img-top rounded-0 imgHover w-75" src="{{asset('photos/'.$post->image)}}" alt="">
            </a>
            <div class="card-body px-0">
                <h2 class="card-title">
                    <a class="text-white opacity-75-onHover" href="{{route('post.home', $post->title)}}">{{$post->title}}</a>
                </h2>
            </div>
        </div>
        <!-- end of post-item -->
    @endforeach
@endsection
