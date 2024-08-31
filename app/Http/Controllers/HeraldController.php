<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class HeraldController extends Controller
{
    public function index() {
        return view('index');
    }
}
