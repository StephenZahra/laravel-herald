<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Http;

class HeraldController extends Controller
{

    private array $requests = [['name' => 'test', 'type' => 'GET'], ['name' => 'test again', 'type' => 'DELETE']];
    private array $cssColourMap = ['GET' => 'request-type-get', 'POST' => 'request-type-post', 'PUT' => 'request-type-put',
                         'PATCH' => 'request-type-patch', 'DELETE' => 'request-type-delete', 'HEAD' => 'request-type-head',
                         'OPTIONS' => 'request-type-options'];
    private array $types = ['GET' => 'GET', 'POST' => 'POST', 'PATCH' => 'PATCH', 'PUT' => 'PUT', 'DELETE' => 'DELETE', 'HEAD' => 'HEAD', 'OPTIONS' => 'OPTIONS'];

    /**
     * This function sets up the herald page on load, providing the requests saved by the user and the css classes associated with
     * the request types to colour them accordingly
     */
    public function index() {
        $resp = null;

        return view('index', ['requests' => $this->requests, 'colours' => $this->cssColourMap, 'types' => $this->types, 'resp' => $resp]);
    }

    /**
     * This function sends a request to the url sent in the request and sends it back to response view that is being rendered
     * in the main page
     *
     * @param Request $request
     */
    public function send(Request $request) {
        $data = $request->validate([
            'type' => 'required|string',
            'url' => 'required|url'
        ]);
        
        $resp = Http::send($data['type'], $data['url']);

        session()->flash('data', $data);

        return view('index', ['requests' => $this->requests, 'colours' => $this->cssColourMap, 'types' => $this->types, 'resp' => $resp->collect()->toArray()]);
    }
}
