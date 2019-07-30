<?php
/**
 * Created by PhpStorm.
 * User: Mablox
 * Date: 24/06/2019
 * Time: 02:41
 */

namespace App\Http\ViewComposers;


use App\Comment;
use Illuminate\Contracts\View\View;

class RecentCommentsComposer
{

    private $comment;

    public function __construct(Comment $comment)
    {
        $this->comment = $comment;
    }

    public function compose(View $view)
    {
        $view->with('comments', $this->comment->all());
    }

}