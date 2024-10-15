<?php

namespace App\Livewire;

use Livewire\Component;

class FolderComponent extends Component
{
    public object $folder;
    public array $colours;

    public function render()
    {
        return view('livewire.folder-component');
    }

    public function test2()
    {

    }
}
