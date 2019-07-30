<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Http\Requests\StoreCommentRequest;
use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CommentController extends Controller
{
    //
    public function save(StoreCommentRequest $request, $post_id)
    {

        $post = Post::find($post_id);

        $user = Auth::user();

        $parent_id = isset($_POST['parent_id']) ? $_POST['parent_id'] : 0;

        if ($parent_id != 0)
        {
            $comment = DB::table('comments')->select('id')
                ->from('comments')
                ->where('id', '=', '?')->get();
            if ($comment == false)
            {
                throw new \Exception('Ce parent n\'existe pas');
            }
        }

        $comment = new Comment;

        $comment->comment = $request->comment;
        $comment->approved = true;
        $comment->parent_id = $parent_id;

        $comment->post()->associate($post);
        $comment->user()->associate($user);

        $comment->save();

        return redirect()->back();

    }


}
