<?php

namespace app\Client;

use app\Model\Result;

class GiphyClient
{
    private $apiKey = 'C4Be9Y9R9iH3c7c3kPYYP2ce331jOu4Y';
    public function test(): string
    {
        return 'giphy';
    }

    public function search(string $query): array
    {
        $params = "api_key={$this->apiKey}&q=$query&limit=5";
        $url = "https://api.giphy.com/v1/gifs/search?$params";
        return json_decode(file_get_contents($url), true);

    }
}
