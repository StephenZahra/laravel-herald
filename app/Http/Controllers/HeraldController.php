<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class HeraldController extends Controller
{
    public function index() {
        $requests = [['name' => 'test', 'type' => 'GET'], ['name' => 'test again', 'type' => 'DELETE']];
        $cssColourMap = ['GET' => 'request-type-get', 'POST' => 'request-type-post', 'PUT' => 'request-type-put',
                         'PATCH' => 'request-type-patch', 'DELETE' => 'request-type-delete', 'HEAD' => 'request-type-head',
                         'OPTIONS' => 'request-type-options'];
        
        return view('index', ['requests' => $requests, 'colours' => $cssColourMap]);
    }
}
