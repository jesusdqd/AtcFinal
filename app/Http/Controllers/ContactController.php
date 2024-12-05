<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function store(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'comment' => 'required|string|max:500',
    ]);

    $contact = new Contact([
        'email' => $request->email,
        'comment' => $request->comment,
    ]);
    if (Auth::check()) {
        $contact->user_id = Auth::id();
    }

    $contact->save();

    return redirect()->back()->with('success', 'Mensaje enviado correctamente.');
}

}
