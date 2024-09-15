<?php

namespace App\Livewire;

use Livewire\Component;

class RequestListComponent extends Component
{
    public array $requests;
    public array $colours;

    public function mount($requests, $colours){
        $this->requests = $requests;
        $this->colours = $colours;
    }

    public function render()
    {
        return view('livewire.request-list-component');
    }
}
