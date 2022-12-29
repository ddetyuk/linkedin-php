<?php

namespace REverse\LinkedIn\Endpoint;

use REverse\LinkedIn\Client;

class EndpointBase
{
    private Client $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function getClient(): Client
    {
        return $this->client;
    }
}
