<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home(){
        return view('site.home');
    }

    public function sobre(){
        return view('site.sobre');
    }

    public function contato(){
        return view('site.contato');
    }

    public function login(){
        return view('site.login');
    }

    public function admin(){
        return view('site.admin');
    }
}
