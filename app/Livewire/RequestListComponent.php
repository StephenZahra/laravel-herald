<?php

namespace App\Livewire;

use App\Models\Folder;
use App\Models\Request;
use Livewire\Component;
use App\Services\JsonOperationService;

class RequestListComponent extends Component
{
    protected JsonOperationService $jsonService;
    public array $requests;
    public array $colours;

    public function __construct()
    {
        $this->jsonService = new JsonOperationService();
        $this->requests = $this->jsonService->getAll();
    }

    public function mount(array $colours, JsonOperationService $jsonService)
    {
        $this->colours = $colours;
        $this->jsonService = $jsonService;
    }

    public function render()
    {
        return view('livewire.request-list-component');
    }

    /**
     * This function creates a default folder or request object and saves it to the
     * @param string $type The type of object we will create
     * @return void
     */
    public function create(string $type): void
    {
        $item = null;
        if($type == "folder"){
            $item = Folder::create("new folder", 'folder', []);
        }
        else{
            $item = Request::create('new request', 'GET', '');
        }

        $this->jsonService->save($item);

        $this->requests = $this->jsonService->getAll();
    }
}
