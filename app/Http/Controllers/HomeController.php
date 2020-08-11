<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;
use Illuminate\Contracts\Session\Session;
class HomeController extends Controller
{

    public function index()
    {
        $services = Service::paginate(10);
        return view('index',
            ['services'=> $services]);

    }
    public function changeLanguage($language)
    {
        \Session::put('lang', $language);

        return redirect()->back();
    }
}
