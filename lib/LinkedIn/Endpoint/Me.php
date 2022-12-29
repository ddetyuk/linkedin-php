<?php

namespace REverse\LinkedIn\Endpoint;

use REverse\LinkedIn\DataModel\BasicProfile;
use REverse\LinkedIn\Transport\TransportInterface;

class Me extends EndpointBase
{
    public const ENDPOINT_PATH = '/me';

    public function get(): BasicProfile
    {
        $result =  $this->getClient()->doRequest(
            self::ENDPOINT_PATH,
            '',
            TransportInterface::METHOD_GET
        );

        $basicProfile = new BasicProfile();
        $basicProfile->initObjectByJson($result);

        return $basicProfile;
    }
}
