<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyProfile extends Controller
{
    public function index(){
        return view('home');
 
    }

    public function about(){
        return view('about');
    }

    public function education(){
        return view('education');
    }

    public function skill(){
        return view('skill');
    }

    public function experience(){
        return view('experience');
    }
}
