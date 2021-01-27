<?php

namespace App\Http\Controllers;

use App\FeatureImage;
use App\HumanResource;
use App\Service;
use App\Tech;
use Illuminate\Http\Request;
use Illuminate\Contracts\Session\Session;
class HomeController extends Controller
{

    public function index()
    {
        $services = Service::paginate(10);
        $humanResources=HumanResource::all();
        $teches=Tech::all();
        $feature_images=FeatureImage::all();
        return view('index',
            ['services'=> $services,
            'humanResources'=>$humanResources,
            'teches'=>$teches,
            'feature_images'=>$feature_images]);

    }
    public function changeLanguage($language)
    {
        \Session::put('lang', $language);

        return redirect()->back();
    }
}
