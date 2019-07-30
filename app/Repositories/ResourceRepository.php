<?php
/**
 * Created by PhpStorm.
 * User: Mablox
 * Date: 21/06/2019
 * Time: 15:08
 */

namespace App\Repositories;


abstract class ResourceRepository
{

    protected $model;

    public function getById($id)
    {
        return $this->model->findOrFail($id);
    }

    public function store($inputs = [])
    {
        return $this->model->create($inputs);
    }

    public function update($id, $inputs = []){
        $this->getById($id)->update($inputs);
    }

    public function destroy($id)
    {
        $this->getById($id)->delete();
    }

}