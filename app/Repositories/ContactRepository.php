<?php
/**
 * Created by PhpStorm.
 * User: Mablox
 * Date: 21/06/2019
 * Time: 15:16
 */

namespace App\Repositories;


use App\Contact;

class ContactRepository extends ResourceRepository
{
    protected $contact;

    public function __construct(Contact $contact)
    {
        $this->model = $contact;
    }


}