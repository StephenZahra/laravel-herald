<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    protected string $name;
    protected string $type;
    protected string $url;

    public function __construct($name, $type, $url)
    {
        $this->name = $name;
        $this->type = $type;
        $this->url = $url;
    }

    /**
     * This function creates a default Request object
     * @param string $name The name of the folder
     * @param string $type The type of the request (GET, POST, etc.)
     * @param string $url The endpoint the request is sent to
     * @return Request
     */
    public static function create(string $name, string $type = 'GET', string $url = ''): Request
    {
        return new self($name, $type, $url);
    }

    /**
     * This function returns the Request properties so that the Request object be saved to the requests JSON file
     * @return array
     */
    public function jsonSerialize(): array
    {
        return [
            'name' => $this->name,
            'type' => $this->type,
            'url' => $this->url
        ];
    }
}
