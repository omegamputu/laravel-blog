<?php
/**
 * Created by PhpStorm.
 * User: Mablox
 * Date: 21/06/2019
 * Time: 15:06
 */

namespace App\Repositories;


use App\Category;

class CategoryRepository extends ResourceRepository
{

    protected $category;

    public function __construct(Category $category)
    {
        $this->model = $category;
    }

}