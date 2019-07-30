<?php

namespace App\Http\Controllers\Admin;

use App\Contact;
use App\Repositories\ContactRepository;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class ContactsController extends Controller
{

    protected $contactRepository;

    public function __construct(ContactRepository $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $contacts = Contact::all();

        return view('admin.contact.index', compact('contacts'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $contact = $this->contactRepository->getById($id);

        return view('admin.contact.show', compact('contact'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $this->contactRepository->destroy($id);

        Session::flash('success', 'The conctact was deleted !');

        return redirect()->route('contacts.index');
    }
}
