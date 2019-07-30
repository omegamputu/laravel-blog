<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class SearchController extends Controller
{
    //
    public function research()
    {
        $q = Input::get('q');

        $post = Post::where('title', 'LIKE', '%' . $q . '%')
            ->orWhere('subtitle', 'LIKE', '%' . $q . '%')->get();

        $category = Category::where('name', 'LIKE', '%' . $q .'%')
            ->orWhere('slug', 'LIKE', '%' . $q . '%')->get();

        if (count($post) > 0)
        {
            return view('admin.posts.index')->withDetails($post)->withQuery($q);
        }else
        {
            return view ( 'admin.posts.index' )->withMessage( 'No Post found. Try to search again !' );
        }

        if (count($category) > 0)
        {
            return view('admin.categories.index')->withDetails($category)->withQuery($q);
        }
        else
        {
            return view('admin.categories.index')->withMessage('No category found. Try search again !');
        }
    }

}
