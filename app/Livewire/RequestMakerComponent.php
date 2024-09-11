<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class RequestMakerComponent extends Component
{
    public $type;
    public $url;
    public $response;

    public function render()
    {
        return view('livewire.request-maker-component')->with([
            'types' => ['GET' => 'GET', 'POST' => 'POST', 'PATCH' => 'PATCH', 'PUT' => 'PUT', 'DELETE' => 'DELETE', 'HEAD' => 'HEAD', 'OPTIONS' => 'OPTIONS']
        ]);
    }

    public function sendRequest(){
        try {
            $validated = $this->validate([
                'type' => 'required|string',
                'url' => 'required|url',
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            dd($e->errors()); // Debug validation errors
        }

        $resp = Http::send($this->type, $this->url);

        //success...save and dispatch the event to update the response on frontend
        if($resp->successful()){
            $this->response = $resp->body();
            $this->dispatch('response-received', response: $this->response);
        }
        else{
            //TODO
        }
        //session()->flash('data', $data);

        //return redirect()->route('herald')->with('resp', $resp);
    }
}
