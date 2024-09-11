<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class RequestResponseComponent extends Component
{
    public string $response;

    public function render()
    {
        return view('livewire.request-response-component');
    }

    #[On('response-received')]
    public function updateResponse($responseBody){
        $this->response = $responseBody;
    }
}
