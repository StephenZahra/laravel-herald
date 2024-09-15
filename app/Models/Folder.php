<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    protected string $name;
    protected string $type;
    protected array $requests;

    public function __construct($name, $type, $requests)
    {
        $this->name = $name;
        $this->type = $type;
        $this->requests = $requests;
    }

    /**
     * This function creates a default Folder object
     * @param string $name The name of the folder
     * @param string $type The type
     * @param array $requests An empty array to store requests associated with the folder
     * @return Folder
     */
    public static function create(string $name, string $type = 'folder', array $requests = []): Folder
    {
        return new self($name, $type, $requests);
    }

    /**
     * This function returns the Folder properties so that the Folder object be saved to the requests JSON file
     * @return array
     */
    public function jsonSerialize(): array
    {
        return [
            'name' => $this->name,
            'type' => $this->type,
            'requests' => $this->requests
        ];
    }
}
