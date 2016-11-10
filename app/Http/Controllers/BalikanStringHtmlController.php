<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BalikanStringHtmlController extends Controller
{
    public function index()
    {
    	$testing = "<html><body><h3>Ucup</h3></body></html>";
        return view('master-content/testing');
    }
}
