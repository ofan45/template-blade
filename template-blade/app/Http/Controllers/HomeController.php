<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(){
        return view('data1');
    }

    public function data_tables(){
        return view('data-tables');
    }

    
}
