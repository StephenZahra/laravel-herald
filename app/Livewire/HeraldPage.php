<?php

namespace App\Livewire;

use Livewire\Component;

class HeraldPage extends Component
{
    public array $colours;
    public array $requests;
    public string $response;

    public function mount()
    {
        $this->colours = ['GET' => 'request-type-get', 'POST' => 'request-type-post', 'PUT' => 'request-type-put',
                         'PATCH' => 'request-type-patch', 'DELETE' => 'request-type-delete', 'HEAD' => 'request-type-head',
                         'OPTIONS' => 'request-type-options'];
        $this->requests = [];
        $this->response = '';
    }

    public function render()
    {
        return view('livewire.herald-page')->layout('layouts.app');
    }
}
