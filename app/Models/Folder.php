<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    protected string $id;
    protected string $name;
    protected string $type;
    protected array $requests;

    public function __construct(string $id, string $name, string $type, array $requests)
    {
        $this->id = $id;
        $this->name = $name;
        $this->type = $type;
        $this->requests = $requests;
    }

    /**
     * This function creates a default Folder object
     * @param string $id The id of the folder
     * @param string $name The name of the folder
     * @param string $type The type
     * @param array $requests An empty array to store requests associated with the folder
     * @return Folder
     */
    public static function create(string $id, string $name, string $type = 'folder', array $requests = []): Folder
    {
        return new self($id, $name, $type, $requests);
    }

    /**
     * This function returns the Folder properties so that the Folder object be saved to the requests JSON file
     * @return array
     */
    public function jsonSerialize(): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'type' => $this->type,
            'requests' => $this->requests
        ];
    }
}
