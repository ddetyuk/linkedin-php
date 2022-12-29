<?php

namespace REverse\LinkedIn\Transport;

interface TransportInterface
{
    public const METHOD_GET  = 'GET';
    public const METHOD_POST = 'POST';

    /**
     * Perform HTTP request.
     */
    public function executeRequest(
        string $uri,
        string $body,
        string $method = self::METHOD_GET,
        array $header = []
    ): string;
}
