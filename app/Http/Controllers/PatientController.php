<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    
    public function index()
    {
        return view('form.index');
    }

    
    public function create()
    {
        
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'fname' => 'required|max:50',
            'lname' => 'required|max:50',
            'nationalcode' => 'required|numeric|min:10',
            'age' => 'required|max:3',
            'mobile' => 'required|min:11|max:11',            
        ]);

        Patient::create([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'nationalcode' => $request->nationalcode,
            'sex' => $request->sex,
            'age' => $request->age,
            'married' => $request->married,
            'mobile' => $request->mobile,
            'users_id' => $request->users_id,
            'mainid' => $request->mainid
        ]);

        
    }

    
    public function show(Patient $patient)
    {
        //
    }

    
    public function edit(Patient $patient)
    {
        //
    }

    
    public function update(Request $request, Patient $patient)
    {
        //
    }

    
    public function destroy(Patient $patient)
    {
        //
    }
}
