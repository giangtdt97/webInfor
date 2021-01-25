<?php

namespace App\Http\Controllers;

use App\HumanResource;
use Illuminate\Http\Request;

class HumanResourceController extends Controller
{
    public function index()
    {
        $humanResources=HumanResource::all();
        return view('team',
            ['humanResources'=>$humanResources]);

    }
}
