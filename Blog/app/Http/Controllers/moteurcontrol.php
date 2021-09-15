<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use TCG\Voyager\Models\Post;
use Illuminate\Support\Facades\Redirect;
use App\contact;

class moteurcontrol extends Controller
{
    //
    public function index()
    {
        return view('home');
    }

    public function pastpost()
    {
        //$posts = Post::all();
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('indexpage', compact('posts'));
    }

    public function pastpos($slug)
    {
        $pos = Post::all()->where('slug', $slug);
        return view('post', compact('pos'));
    }

    public function formsend(Request $requet)
    {
        $contact = new contact();
        $requet -> input();
        $contact ->Name = $requet->name;
        $contact ->Email = $requet->email;
        $contact ->Phone = $requet->phone;
        $contact ->Message = $requet ->message;
        $contact ->save();
        return Redirect::back();
    }
}
