<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IntroductionController extends Controller
{
    public function index()
    {
        return view('introduction/role');
    }
    public function visitor()
    {
        return view('introduction/biodata_visitor');
    }

    public function admin()
    {
        return view('introduction/login_admin');
    }
}
