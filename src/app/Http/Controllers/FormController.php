<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;


class FormController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function thanks(ContactRequest $request)
    {
        return redirect('/contact')->with('message', 'お問い合わせありがとうございました！');
    }
}
