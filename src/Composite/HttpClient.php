<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite;

use AreaService\vendor\GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;

class HttpClient implements HttpClientInterface
{
    use Client\AwareTrait;

    /** @var ClientInterface */
    protected $clientInterface;

    /** @var string */
    protected $httpMethod;

    /** @var string */
    protected $uri;

    /** @var array */
    protected $headers;

    /** @var array */
    protected $queryParams;

    /** @var string */
    protected $body;


    public function makeRequest()
    {
        $response = $this->getvendorGuzzleHttpGuzzle()->request(
            $this->getHttpMethod(),
            $this->getUri(),
            [
                'query' => $this->hasQueryParams() ? $this->getQueryParams() : null,
                'headers' => $this->hasHeaders() ? $this->getHeaders() : null,
                'body' => $this->hasBody() ? $this->getBody() : null,
            ]
        );

        return $response;
    }

    public function hasHeaders(): bool
    {
        return $this->headers === null ? false : true;
    }

    public function hasQueryParams(): bool
    {
        return $this->queryParams === null ? false : true;
    }

    public function hasBody(): bool
    {
        return $this->body === null ? false : true;
    }

    public function setHttpMethod(string $httpMethod): HttpClientInterface
    {
        if ($this->httpMethod !== null) {
            throw new \LogicException('HttpClient httpMethod already set.');
        }
        $this->httpMethod = $httpMethod;
        return $this;
    }

    public function setUri(string $uri): HttpClientInterface
    {
        if ($this->uri !== null) {
            throw new \LogicException('HttpClient uri already set.');
        }
        $this->uri = $uri;
        return $this;
    }

    public function getHttpMethod(): string
    {
        if ($this->httpMethod === null) {
            throw new \LogicException('HttpClient httpMethod has not been set.');
        }
        return $this->httpMethod;
    }

    public function getUri(): string
    {
        if ($this->uri === null) {
            throw new \LogicException('HttpClient uri has not been set.');
        }
        return $this->uri;
    }

    public function getHeaders(): array
    {
        if ($this->headers === null) {
            throw new \LogicException('HttpClient headers has not been set.');
        }
        return $this->headers;
    }

    public function setHeaders(array $headers): HttpClientInterface
    {
        if ($this->headers !== null) {
            throw new \LogicException('HttpClient headers already set.');
        }
        $this->headers = $headers;
        return $this;
    }

    public function getQueryParams(): array
    {
        if ($this->queryParams === null) {
            throw new \LogicException('HttpClient queryParams has not been set.');
        }
        return $this->queryParams;
    }

    public function setQueryParams(array $queryParams): HttpClientInterface
    {
        if ($this->queryParams !== null) {
            throw new \LogicException('HttpClient queryParams already set.');
        }
        $this->queryParams = $queryParams;
        return $this;
    }

    public function getBody(): string
    {
        if ($this->body === null) {
            throw new \LogicException('HttpClient body has not been set.');
        }
        return $this->body;
    }

    public function setBody(string $body): HttpClientInterface
    {
        if ($this->body !== null) {
            throw new \LogicException('HttpClient body already set.');
        }
        $this->body = $body;
        return $this;
    }

    public function getClientInterface(): ClientInterface
    {
        if ($this->clientInterface === null) {
            throw new \LogicException('HttpClient clientInterface has not been set.');
        }
        return $this->clientInterface;
    }

    public function setClientInterface(ClientInterface $clientInterface): HttpClientInterface
    {
        if ($this->clientInterface !== null) {
            throw new \LogicException('HttpClient clientInterface already set.');
        }
        $this->clientInterface = $clientInterface;
        return $this;
    }

    public function jsonSerialize()
    {
        return [];
    }
}
