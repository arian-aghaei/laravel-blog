<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function new()
    {
        return view('new');
    }

    public function welcome()
    {
        $posts =  Post::query()->get();
        return view('welcome', compact('posts'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required'
        ]);
        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('photos'), $imageName);
        Post::create(['title'=>$request->input('title'),
            'description'=>$request->input('description'),
            'image'=>$imageName,
            'author'=>Auth::user()->name
        ]);
        return redirect('posts');
    }
    public function posts()
    {
        $posts =  Post::query()->get();
        return view('posts', compact('posts'));
    }

    public function delete(Request $request)
    {
        DB::table('posts')->where('id', $request->input('id'))->delete();
        return redirect('/posts');
    }

    public function view1(Post $post)
    {
        return view('post', compact('post'));
    }

    public function viewPost(Post $post)
    {
        return view('homePost', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('editPost', compact('post'));
    }

    public function saveEdit(Request $request, $id)
    {
        $item = Post::find($id);
        $item->title = $request->input('title') ?? $item->title;
        $item->description = $request->input('description') ?? $item->description;
        $item->image = $request->input('image') ?? $item->image;
        $item->save();
        return redirect('/posts')->with('success', 'Item updated successfully');
    }
}
