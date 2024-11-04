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

    public function mount(array $colours, JsonOperationService $jsonService)
    {
        $this->colours = $colours;
        $this->jsonService = $jsonService;
        $this->requests = $jsonService->getAll();
    }

    public function render()
    {
        return view('livewire.request-list-component', ['requests' => $this->requests]);
    }

    public function rendering(JsonOperationService $jsonService)
    {
        $this->requests = $jsonService->getAll(); // Fetch updated requests
    }

    /**
     * This function creates a default folder or request object and saves it to the json file
     * @param string $type The type of object we will create
     * @return void
     */
    public function create(string $type): void
    {
        $item = null;
        if($type == "folder"){
            $item = Folder::create(uniqid('folder_'), "new folder", 'folder', []);
        }
        else{
            $item = Request::create(uniqid('request_'), 'new request', 'GET', '');
        }

        $this->jsonService->save($item);

        $this->requests = $this->jsonService->getAll();
    }

    public function updateOrder($newOrder)
    {
        dd("man im dead");
//        // Update $items array based on $newOrder (which contains an array of item IDs in new order)
//        $this->requests = collect($newOrder)->map(fn ($id) => collect($this->requests)->firstWhere('id', $id))->toArray();
    }
}
