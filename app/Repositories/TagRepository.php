<?php
/**
 * Created by PhpStorm.
 * User: Mablox
 * Date: 21/06/2019
 * Time: 15:13
 */

namespace App\Repositories;


use App\Tag;

class TagRepository extends ResourceRepository
{
    protected $tag;

    public function __construct(Tag $tag)
    {
        $this->model = $tag;
    }

    public function destroy($id)
    {
        $tag = $this->getById($id);

        $tag->posts()->detach();

        return $tag->delete();
    }
}