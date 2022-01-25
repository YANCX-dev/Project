<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $title = "Tittle";
        return view('pages.main',compact('title'));
    }
}
