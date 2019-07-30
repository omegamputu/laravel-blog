<?php

namespace App\Http\Controllers;

use App\Category;
use App\Comment;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function index()
    {
        if (request()->category){
            $posts = Post::with('category')->whereHas('category', function ($query){
                $query->where('slug', request()->category);
            })->published()->get();
            $tags = Tag::all();
            $categories = Category::all();
            $categoryName = $categories->where('slug', request()->category)->first()->name;
        }else{
            $posts = Post::published()->get();
            $tags = Tag::all();
            $categories = Category::all();
            $categoryName = "Recent Posts";
        }

        return view('blog.index')->with([
            'posts' => $posts,
            'categories' => $categories,
            'tags' => $tags,
            'categoryName' => $categoryName
        ]);
    }

    /**
     * @param $slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function single($slug)
    {
        // fetch from the DB based on slug
        $post = Post::published()->where('slug', '=', $slug)->first();

        $comments = Comment::where('post_id', $post->id)->where('parent_id', 0)->get();

        $answers = Comment::where('post_id', $post->id)
            ->where('parent_id', '!=', '0')->take(3)->get();

        $count_answers = count(Comment::where('post_id', $post->id)
                ->where('parent_id', '!=', '0')->get())-3;

        $answers_lasts = Comment::where('post_id', $post->id)->where('parent_id', '!=', '0')
            ->take($count_answers)->get();

        if ($post == false)
        {
            return response()->view('errors.404', [], 404);
        }else
        {
            // return the view and pass in the post object
            return view('blog.single')->with([
                'post' => $post,
                'comments' => $comments,
                'answers' => $answers,
                'count_answers' => $count_answers,
                'answers_lasts' => $answers_lasts
            ]);

        }

    }
}
