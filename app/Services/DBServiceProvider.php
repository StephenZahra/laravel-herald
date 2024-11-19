<?php

namespace App\Services;

use App\Models\Folder;
use App\Models\Request;

class DBServiceProvider
{
    /**
     * This function returns all the folders and requests in the DB
     *
     * @return array
     */
    public function getAll(): array
    {
        $folders = Folder::all()->toArray();
        $requests = Request::all()->toArray();
        return array_merge($folders, $requests);
    }

    /**
     * This function handles saving a Folder or Request item to the DB
     *
     * @param Folder|Request $item The Folder or Request to save
     * @return void
     */
    public function save(Folder|Request $item): void
    {

    }

    /**
     * This function gets a request or folder from the DB using the unique_name column
     *
     * @param Folder|Request $item
     * @return array
     */
    public function getByUniqueName(Folder|Request $item): array{
        return $item::where('unique_name', $item->unique_name)->get()->first()->toArray();
    }
}
