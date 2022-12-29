<?php

namespace REverse\LinkedIn\Endpoint;

use REverse\LinkedIn\DataModel\ShareResponse;
use REverse\LinkedIn\DataModel\Shares;
use REverse\LinkedIn\Transport\TransportInterface;

class Share extends EndpointBase
{
    public const ENDPOINT_PATH = '/shares';

    public function postShares(Shares $shares): ShareResponse
    {
        $result = $this->getClient()->doRequest(
            self::ENDPOINT_PATH,
            $shares->jsonSerialize(),
            TransportInterface::METHOD_POST
        );

        $shareResponse = new ShareResponse();
        $shareResponse->initObjectByJson($result);

        return $shareResponse;
    }
}
