<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FormController extends Controller
{
    public function Register()
    {
        return view('form');
    }

    public function Subscription()
    {
        return view('subscription');
    }
    public function Details(Request $request)
    {
        Session::put([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'email' => $request->email,
            'comment' => $request->comment,
            'address' => $request->address,
            'country' => $request->country,
            'phone' => $request->phone,
            'image' => $request->image,
            'range' => $request->range
        ]);

        dd(Session::all());
        return view('details');
    }
}
