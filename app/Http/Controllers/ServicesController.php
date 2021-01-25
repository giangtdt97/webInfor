<?php

namespace App\Http\Controllers;

use App\Service;
use App\Tech;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $services = Service::paginate(10);
        $teches=Tech::all();
        return view('services',
            ['services'=> $services, 'teches'=>$teches]);
    }
}
