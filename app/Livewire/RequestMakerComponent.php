<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class RequestMakerComponent extends Component
{
    public string $type;
    public string $url;

    public function render()
    {
        $this->type = session('type', 'GET'); /* set a default value to provide livewire a default value,
                                                              also storing in session to keep the current chosen request type when requsts are done */

        return view('livewire.request-maker-component')->with([
            'types' => ['GET' => 'GET', 'POST' => 'POST', 'PATCH' => 'PATCH', 'PUT' => 'PUT', 'DELETE' => 'DELETE', 'HEAD' => 'HEAD', 'OPTIONS' => 'OPTIONS']
        ]);
    }

    /**
     * This function handles sending a request to the designated endpoint. It also dispatches an event so that the response can be sent to the frontend to update
     * the page in realtime
     * @return void
     */
    public function sendRequest(): void
    {
        $this->validate([
            'type' => 'required|string',
            'url' => 'required|url',
        ]);

        $resp = Http::send($this->type, $this->url);

        session()->put('type', $this->type);

        //save and dispatch the event to update the response on frontend
        $this->dispatch('response-received', response: $resp->body(), status: $resp->status());
    }
}
