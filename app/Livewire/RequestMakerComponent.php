<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class RequestMakerComponent extends Component
{
    public $type;
    public $url;

    public function render()
    {
        $this->type = 'GET'; // if the dropdown does not change from the first set item, then livewire will not be able to retreive

        return view('livewire.request-maker-component')->with([
            'types' => ['GET' => 'GET', 'POST' => 'POST', 'PATCH' => 'PATCH', 'PUT' => 'PUT', 'DELETE' => 'DELETE', 'HEAD' => 'HEAD', 'OPTIONS' => 'OPTIONS']
        ]);
    }

    public function sendRequest(): void
    {
        $this->validate([
            'type' => 'required|string',
            'url' => 'required|url',
        ]);

        $resp = Http::send($this->type, $this->url);

        //success...save and dispatch the event to update the response on frontend
        if($resp->successful()){
            $this->dispatch('response-received', response: $resp->body());
        }
        else{
            //TODO
        }
    }
}
