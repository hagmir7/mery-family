<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function list()
    {
        if (auth()->user()->role) {
            return view('contact.list', [
                'contacts' => Contact::all()
            ]);
        } else {
            abort(404);
        }
    }

    public function create()
    {
        return view('contact.create');
    }

    public function show(Contact $contact)
    {
        if (auth()->user()->role) {
            return view('contact.show', [
                'contact' => $contact
            ]);
        } else {
            abort(404);
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            "full_name" => "required|string",
            "email" => "required|string",
            "message" => "required|string",
        ]);

        Contact::create([
            "full_name" => $request->input('full_name'),
            "email" => $request->input('email'),
            "message" => $request->input('message'),

        ]);

        return redirect()->route('contact.create')->with('message', "The message was sent successfully.");
    }
}
