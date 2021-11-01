<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AjaxController extends Controller
{
    
    public function ajaxRequest()
    {
        return view('patients.index');
    }

    
    // public function ajaxRequestPost(Request $request)
    // {
    //     Patient::create([
    //         'fname' => $request->fname,
    //         'lname' => $request->lname,
    //         'nationalcode' => $request->nationalcode,
    //         'sex' => $request->sex,
    //         'age' => $request->age,
    //         'married' => $request->married,
    //         'mobile' => $request->mobile,
    //         'users_id' => $request->users_id,
    //         'mainid' => $request->mainid
    //     ]);

    //     return response()->json(['success'=>'اطلاعات با موفقیت ذخیره شد.']);
    // }


    public function store(Request $request)
    {
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
}
