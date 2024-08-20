<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class exemplo extends Controller
{
    public function testando(){
        echo 'Depois de criar o controller';
    }

    public function showBlade(){
        return view('site.principal');
    }
}
