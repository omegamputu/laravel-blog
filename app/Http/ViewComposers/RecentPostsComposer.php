<?php
/**
 * Created by PhpStorm.
 * User: Mablox
 * Date: 24/06/2019
 * Time: 02:29
 */

namespace App\Http\ViewComposers;


use App\Post;
use Illuminate\Contracts\View\View;

class RecentPostsComposer
{
    private $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function compose(View $view)
    {
        $view->with('posts', $this->post->all());
    }

}