<?php

namespace REverse\LinkedIn\Transport;

class CurlExtensionTransport implements TransportInterface
{
    /**
     * {@inheritDoc}
     */
    public function executeRequest(string $uri, string $body, string $method = 'GET', array $header = []): string
    {
        $curl = curl_init();

        curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 30);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_TIMEOUT, 60);
        if (TransportInterface::METHOD_POST === $method) {
            curl_setopt($curl, CURLOPT_POST, 1);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $body);
        }
        curl_setopt($curl, CURLOPT_URL, $uri);

        $response = curl_exec($curl);

        curl_close($curl);

        return $response;
    }
}
