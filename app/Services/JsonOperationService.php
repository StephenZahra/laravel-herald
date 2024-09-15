<?php

namespace App\Services;

use App\Models\Folder;
use App\Models\Request;
use Illuminate\Support\Facades\Storage;

class JsonOperationService
{
    private string $filePath;

    public function __construct()
    {
        $this->filePath = 'requests/requests.json';
    }

    /**
     * This function verifies that the requests.json file exists
     * @return bool
     */
    public function checkJsonFileExists(): bool
    {
        return Storage::fileExists($this->filePath);
    }

    public function getAll(): array
    {
        //get the currently stored folders/requests
        $data = json_decode(Storage::get($this->filePath));
        return !$data ? [] : $data;
    }

    /**
     * This function handles saving a Request or Response object to the requests.json file
     * @param Folder|Request $item The Folder or Request object we must save
     * @return void
     */
    public function save(Folder|Request $item): void
    {
        if (!$this->checkJsonFileExists()){
            Storage::put($this->filePath, '');
        }

        //get the currently stored folders/requests
        $existingJson = json_decode(Storage::get($this->filePath));

        //append the new object to the decoded current json
        $existingJson[] = $item;

        //override the entire file with updated json
        Storage::put($this->filePath, json_encode($existingJson, JSON_PRETTY_PRINT));
    }
}
