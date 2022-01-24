<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about(){
        return view('about-us');
    }

    public function contacts() {
        return view('contacts');
    }
}
