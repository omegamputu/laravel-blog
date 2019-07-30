<?php
/**
 * Created by PhpStorm.
 * User: Mablox
 * Date: 21/06/2019
 * Time: 15:15
 */

namespace App\Repositories;


use App\User;

class UserRepository extends ResourceRepository
{
    protected $user;

    public function __construct(User $user)
    {
        $this->model = $user;
    }

}