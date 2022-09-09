<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function create()
    {
        return view('footer');
    }
    public function store(Request $request)
    {
        $contact = new Contact();
        $contact->nom = $request->nom;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();
        return "C'est bien enregistré !";
    }
}
