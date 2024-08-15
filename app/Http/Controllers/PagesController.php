<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function dashboard()
    {
        return view('pages.dashboard');
    }
    
    public function apiDocumentation() {
        return view('pages.api.documentation');
    }
}
