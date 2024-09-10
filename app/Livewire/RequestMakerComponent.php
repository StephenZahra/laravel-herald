<?php

namespace App\Livewire;

use Livewire\Component;

class RequestMakerComponent extends Component
{
    public array $types = ['GET' => 'GET', 'POST' => 'POST', 'PATCH' => 'PATCH', 'PUT' => 'PUT', 'DELETE' => 'DELETE', 'HEAD' => 'HEAD', 'OPTIONS' => 'OPTIONS'];

    public function render()
    {
        return view('livewire.request-maker-component')->with([
            'types' => $this->types
        ]);
    }
}
