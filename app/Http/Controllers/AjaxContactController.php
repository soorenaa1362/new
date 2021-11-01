<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class AjaxContactController extends Controller
{
    public function index()
    {
        return view('ajax-contact-us-form');
    }
 
    public function store(Request $request)
    {
         
        $validatedData = $request->validate([
          'name' => 'required',
          'email' => 'required|unique:employees|max:255',
          'message' => 'required'
        ]);
 
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message
        ]);

        // $save = new Contact;
 
        // $save->name = $request->name;
        // $save->email = $request->email;
        // $save->message = $request->message;
 
        // $emp->save();
 
        return redirect('form')->with('status', 'Ajax Form Data Has Been validated and store into database');
 
    }
}
