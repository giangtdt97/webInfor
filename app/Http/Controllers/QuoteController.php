<?php

namespace App\Http\Controllers;

use App\Quote;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('index');
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'quote_content' => 'required',
        ]);

//        dd($request);
        $quotes = new Quote();
        $quotes->name = $request->input('name');
        $quotes->email = $request->input('email');
        $quotes->quote_content = $request->input('quote_content');
        $quotes->save();
        return redirect('')->with('success','Request is sent');
    }

}
