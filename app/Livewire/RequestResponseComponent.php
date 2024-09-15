<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class RequestResponseComponent extends Component
{
    public string $response;
    public int $status;

    public function render()
    {
        return view('livewire.request-response-component');
    }

    /**
     * This function updates the response and status properties associated with the response component so that they may be updated when a new response is received
     * @param string $response The response string received from the request
     * @param int $status The status code produced from the request
     * @return void
     */
    #[On('response-received')]
    public function updateResponse(string $response, int $status): void
    {
        $this->response = $response;
        $this->status = $status;
    }
}
