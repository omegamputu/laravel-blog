<?php

namespace App\Http\Controllers\Admin;

use App\Comment;
use App\Contact;
use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }
    //

    public function index()
    {
        $contacts = Contact::all();
        $posts = Post::with('category')->get();
        $comments = Comment::with('post')->get();
        return view('admin.index')->with([
            'contacts' => $contacts,
            'posts' => $posts,
            'comments' => $comments
        ]);
    }


}
