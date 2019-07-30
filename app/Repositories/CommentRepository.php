<?php
/**
 * Created by PhpStorm.
 * User: Mablox
 * Date: 21/06/2019
 * Time: 15:17
 */

namespace App\Repositories;


use App\Comment;

class CommentRepository extends ResourceRepository
{
    protected $comment;

    public function __construct(Comment $comment)
    {
        $this->model = $comment;
    }

}