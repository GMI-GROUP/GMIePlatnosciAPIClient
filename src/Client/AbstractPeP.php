<?php
namespace Gmigroup\Clients\PeP\Client;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\RequestOptions;

abstract class AbstractPeP
{
    public const GET_METHOD = 'GET';
    public const PUT_METHOD = 'PUT';
    public const POST_METHOD = 'POST';
    public const DELETE_METHOD = 'DELETE';

    /**
     * @var string
     */
    protected $apiUrl = 'https://direct.paylane.com/rest/';

    /**
     * @var string
     */
    protected $apiLogin = null;

    /**
     * @var string
     */
    protected $apiPassword = null;

    /**
     * @var boolean
     */
    protected $ssl_verify = true;

    /**
     * @var ClientInterface
     */
    protected $guzzle;

    public function __construct(ClientInterface $guzzle, string $apiLogin, string $apiPassword)
    {
        $this->guzzle = $guzzle;
        $this->apiLogin = $apiLogin;
        $this->apiPassword = $apiPassword;
    }

    private function client(): ClientInterface
    {
        return $this->guzzle;
    }
}
