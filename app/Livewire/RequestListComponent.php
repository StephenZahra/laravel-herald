<?php

namespace App\Livewire;

use Livewire\Component;

class RequestListComponent extends Component
{
    public array $request;
    public array $colours;

    public function mount($request, $colours){
        $this->request = $request;
        $this->colours = $colours;
    }

    public function render()
    {
        return view('livewire.request-list-component');
    }
}
