<?php

namespace App\Http\Controllers;

use App\Mail\EntrepreneurContactMail;
use Illuminate\Support\Facades\Mail;
use App\Models\EntrepreneurContact;
use Illuminate\Http\Request;

class EntrepreneurContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'business_name' => 'required|string|max:255',
            'contact_name'  => 'required|string|max:255',
            'email'         => 'required|email|max:255',
            'phone'         => 'nullable|string|max:50',
            'message'       => 'required|string|max:2000',
        ]);

        EntrepreneurContact::create($validated);

        Mail::to('facujunior1@gmail.com')->send(new EntrepreneurContactMail($validated));


        return redirect()
            ->to(route('register.select') . '#contacto-emprendedores')
            ->with('contact_success', 'Recibimos tu mensaje. Te contactaremos a la brevedad.');
    }
}
