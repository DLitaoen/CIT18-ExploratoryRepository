<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetController extends Controller
{
    // Route to greet.blade.php
    public function greet() {
        return view('greet');
    }

}
