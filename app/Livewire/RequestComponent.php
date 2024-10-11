<?php

namespace App\Livewire;

use Livewire\Component;

class RequestComponent extends Component
{
    public object $request;

    public function render()
    {
        return view('livewire.request-component');
    }
}
