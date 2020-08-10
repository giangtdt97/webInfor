<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Session\Session;
class HomeController extends Controller
{

    public function index()
    {
        return view(
            'index');
    }
    public function changeLanguage($language)
    {
        Session::put('website_language', $language);

        return redirect()->back();
    }
}
