<?php

namespace App\Livewire;

use App\Models\Folder;
use App\Models\Request;
use App\Services\DBServiceProvider;
use Livewire\Component;

class RequestListComponent extends Component
{
    protected DBServiceProvider $dbService;
    public array $requests = [];
    public array $colours = [];

    public function boot(DBServiceProvider $dbService)
    {
        $this->dbService = $dbService;
    }

    public function mount(array $colours, DBServiceProvider $dbService)
    {
        $this->colours = $colours;
        $this->dbService = $dbService;
        $this->requests = $dbService->getAll();
    }

    public function render()
    {
        $requests = $this->dbService->getAll();

        return view('livewire.request-list-component', ['requests' => $requests]);
    }

    /**
     * This function creates a default folder or request object and saves it to the json file
     * @param string $type The type of object we will create
     *
     */
    public function create(string $type)
    {
        $item = null;
        if($type == "folder"){
            $item = Folder::create(['name' => "new folder", 'unique_name' => uniqid('folder_')]);
        }
        else{
            $item = Request::create(['name' => 'new request', 'unique_name' => uniqid('request_'), 'type' => 'GET', 'url' => '']);
        }

        $this->requests[] = $this->dbService->getByUniqueName($item);
        $this->dispatch('updateItems', $this->requests);
    }

    #[On('update-order')]
    public function updateOrder($newOrder)
    {
        
    }
}
