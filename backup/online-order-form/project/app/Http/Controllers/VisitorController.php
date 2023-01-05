<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisitorController extends Controller
{
    public function form(Type $var = null)
    {
        return view('front-end.form.form');
    }
}
