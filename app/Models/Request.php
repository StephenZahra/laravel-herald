<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    protected string $id;
    protected string $name;
    protected string $type;
    protected string $url;

    public function __construct(string $id, string $name, string $type, string $url)
    {
        $this->id = $id;
        $this->name = $name;
        $this->type = $type;
        $this->url = $url;
    }

    /**
     * This function creates a default Request object
     * @param string $id The id of the request
     * @param string $name The name of the request
     * @param string $type The type of the request (GET, POST, etc.)
     * @param string $url The endpoint the request is sent to
     * @return Request
     */
    public static function create(string $id, string $name, string $type = 'GET', string $url = ''): Request
    {
        return new self($id, $name, $type, $url);
    }

    /**
     * This function returns the Request properties so that the Request object be saved to the requests JSON file
     * @return array
     */
    public function jsonSerialize(): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'type' => $this->type,
            'url' => $this->url
        ];
    }
}
