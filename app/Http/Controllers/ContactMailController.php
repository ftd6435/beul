<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactMailFormRequest;
use App\Mail\ContactEmailRequest;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactMailController extends Controller
{
    public function index(ContactMailFormRequest $request)
    {
        $data = $request->validated();
        Contact::create($request->validated());
        
        Mail::send(new ContactEmailRequest($data));

        return back()->with('success', 'Votre demande de contact a été bien envoyé');
    }
}
