<?php

namespace App\Livewire;

use Livewire\Component;

class HeraldPage extends Component
{
    public array $requests;
    public array $colours;
    public array $resp;

    public function mount()
    {
        $this->requests = [['name' => 'test', 'type' => 'GET'], ['name' => 'test again', 'type' => 'DELETE']];
        $this->colours = ['GET' => 'request-type-get', 'POST' => 'request-type-post', 'PUT' => 'request-type-put',
                         'PATCH' => 'request-type-patch', 'DELETE' => 'request-type-delete', 'HEAD' => 'request-type-head',
                         'OPTIONS' => 'request-type-options'];
        //$this->resp = null; // Initialize response or fetch it if needed
    }

    public function render()
    {
        return view('livewire.herald-page')->layout('layouts.app');
    }
}
