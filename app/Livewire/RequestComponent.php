<?php

namespace App\Livewire;

use Livewire\Component;

class RequestComponent extends Component
{
    public array $request;
    public array $colours;
    public string $classes;

    public function render()
    {
        return view('livewire.request-component');
    }
}
