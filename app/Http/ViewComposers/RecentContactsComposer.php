<?php
/**
 * Created by PhpStorm.
 * User: Mablox
 * Date: 24/06/2019
 * Time: 02:45
 */

namespace App\Http\ViewComposers;


use App\Contact;
use Illuminate\Contracts\View\View;

class RecentContactsComposer
{
    private $contact;

    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    public function compose(View $view)
    {
        $view->with('contacts', $this->contact->all());
    }

}