@extends('layouts/app')

@section('content')
    @if (\Session::has('success'))
        <div class="alert alert-success container">
            {{ \Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover container">
        <thead>
            <tr>
                <th>id</th>
                <th>title</th>
                <th>created at</th>
                <th>manage</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
                <form action="" method="post">
                    @csrf
                    <tr class="">
                        <td class="pt-3">{{$post->id}}</td>
                        <input type="hidden" name="id" value="{{$post->id}}">
                        <td class="pt-3">{{$post->title}}</td>
                        <td class="pt-3">{{$post->created_at}}</td>
                        <td>
                            <button class="btn btn-danger">delete</button>
                            <a href="{{route('post.show', $post->id)}}" class="btn btn-success">view</a>
                            <a href="{{route('post.edit', $post->id)}}" class="btn btn-secondary">edit</a>
                        </td>
                    </tr>
                </form>
            @endforeach
        </tbody>
    </table>
@endsection
