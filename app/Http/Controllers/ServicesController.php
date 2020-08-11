<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $services = Service::paginate(10);
        return view('services',
        ['services'=> $services]);
    }
}
