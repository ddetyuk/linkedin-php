<?php

namespace REverse\LinkedIn;

use League\OAuth2\Client\Provider\Exception\IdentityProviderException;
use League\OAuth2\Client\Provider\LinkedIn as LinkedInProvider;
use League\OAuth2\Client\Token\AccessTokenInterface;
use REverse\LinkedIn\Exception\TokenNotInitializedException;
use REverse\LinkedIn\Transport\Factory;
use REverse\LinkedIn\Transport\TransportInterface;

class Client
{
    public const PERMISSION_EMAIL_ADDRESS   = 'r_emailaddress';
    public const PERMISSION_LITE_PROFILE    = 'r_liteprofile';
    public const PERMISSION_W_MEMBER_SOCIAL = 'w_member_social';

    public const BASE_URI = 'https://api.linkedin.com/v2';

    private LinkedInProvider $linkedInProvider;

    private TransportInterface $transport;

    private $token;

    private array $header = [];

    /**
     * Client constructor.
     *
     * @throws Exception\RuntimeException
     */
    public function __construct(string $clientId, string $clientSecret, string $redirectUri)
    {
        $this->linkedInProvider = new LinkedInProvider([
            'clientId'     => $clientId,
            'clientSecret' => $clientSecret,
            'redirectUri'  => $redirectUri,
        ]);

        $this->transport = Factory::createTransport();
    }

    public function getAuthenticationUrl(array $options = []): string
    {
        return $this->linkedInProvider->getAuthorizationUrl($options);
    }

    public function isAuthenticated()
    {
        return null !== $this->token && !$this->token->hasExpired();
    }

    /**
     * @throws IdentityProviderException
     */
    public function initToken(string $code): AccessTokenInterface
    {
        $this->token = $this->linkedInProvider->getAccessToken('authorization_code', [
            'code' => $code,
        ]);

        $this->initHeader();

        return $this->token;
    }

    /**
     * @throws TokenNotInitializedException
     */
    public function getToken(): AccessTokenInterface
    {
        if (null === $this->token) {
            throw new TokenNotInitializedException();
        }

        return $this->token;
    }

    public function setToken(AccessTokenInterface $token)
    {
        $this->token = $token;

        $this->initHeader();

        return $this;
    }

    public function getHeader()
    {
        return $this->header;
    }

    public function doRequest($path, $body, $method): string
    {
        return $this->transport->executeRequest(self::BASE_URI . $path, $body, $method, $this->header);
    }

    private function initHeader()
    {
        $this->header = [
            'Authorization: Bearer ' . $this->token->getToken(),
            'Content-Type: application/json',
            'cache-control: no-cache',
            'X-Restli-Protocol-Version: 2.0.0',
        ];
    }
}
