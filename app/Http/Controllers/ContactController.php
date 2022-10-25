<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    //show all contact
    public function index()
    {
        return view('contacts.index', [
            'contacts' => Contact::all()
        ]);
    }

    public function create()
    {
        return view('contacts.create');
    }

    public function store(Request $request)
    {
        $formsFields = $request->validate([
            'firstname' => 'required|max:10',
            'lastname' => 'required|max:10',
            'phone' => 'required|numeric|min:10'
        ]);
        Contact::create($formsFields);
        return redirect('/');
    }


    public function destroy($contact_phone)
    {
        Contact::delete($contact_phone);
        return redirect('/');
    }
}