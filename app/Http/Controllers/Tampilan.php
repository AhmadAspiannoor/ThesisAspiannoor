<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Tampilan extends Controller
{
    public function home(){
        return view('Template.template');
    }
}
