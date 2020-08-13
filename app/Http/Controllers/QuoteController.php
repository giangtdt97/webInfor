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
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $quote = new Quote();
        $quote->name = $request->name;
        $quote->email = $request->email;
        $quote->quote_content = $request->quote_content;
        $quote->save();
        return redirect()->route('home');
    }

}
