<?php
namespace Gmigroup\Clients\PeP\Client;

use Gmigroup\Clients\PeP\Mapping\Mapping;
use Gmigroup\Clients\PeP\Response\PePResponse;
use GuzzleHttp\ClientInterface;

abstract class AbstractPeP
{
    public const GET_METHOD = 'GET';
    public const PUT_METHOD = 'PUT';
    public const POST_METHOD = 'POST';
    public const DELETE_METHOD = 'DELETE';
    public const API_URL = 'https://direct.paylane.com/rest/';

    /**
     * @var boolean
     */
    protected $ssl_verify = true;

    /**
     * @var ClientInterface
     */
    protected $guzzle;

    public function __construct(ClientInterface $guzzle)
    {
        $this->guzzle = $guzzle;
    }

    private function client(): ClientInterface
    {
        return $this->guzzle;
    }

    public function request(string $apiMethod, array $data = []): PePResponse
    {
        if (!isset(Mapping::SUPPORTED_METHODS[$apiMethod])) {
            throw new \InvalidArgumentException(sprintf('Unsupported API method: %s', $apiMethod));
        }

        if (!isset(Mapping::SUPPORTED_REQUEST_METHODS_FOR_METHODS[$apiMethod])) {
            throw new \InvalidArgumentException(sprintf('Unsupported request method: %s', $apiMethod));
        }

        $requestMethod = $this->mapApiMethodsToRequestMethod($apiMethod);
        $pepMethod = $this->mapApiMethodsToPePMethod($apiMethod);

        $response = $this->client()->request(
            $requestMethod,
            $pepMethod,
            ['json'    => $data]
        );

        return new PePResponse($response->getStatusCode(), json_decode($response->getBody(), true));
    }

    /**
     * @param string $apiMethod
     * @return string
     */
    protected function mapApiMethodsToRequestMethod(string $apiMethod): string
    {
        return Mapping::SUPPORTED_REQUEST_METHODS_FOR_METHODS[$apiMethod];
    }

    protected function mapApiMethodsToPePMethod(string $apiMethod): string
    {
        return Mapping::SUPPORTED_METHODS[$apiMethod];
    }
}
