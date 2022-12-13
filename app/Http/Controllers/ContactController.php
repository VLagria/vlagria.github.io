<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function sendMessage(Request $request)
    {

        $validator = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        Contact::create($request->all());
        return response()->json(['success' => 'Thank you for contact us. we will contact you shortly.']);;
    }
}
