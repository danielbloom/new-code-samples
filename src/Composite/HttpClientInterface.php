<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite;


interface HttpClientInterface extends \JsonSerializable
{
    public function jsonSerialize();


    public function makeRequest();

    public function setUri(string $uri): HttpClientInterface;

    public function setHttpMethod(string $uri): HttpClientInterface;

    public function setHeaders(array $headers): HttpClientInterface;

    public function setQueryParams(array $queryParams): HttpClientInterface;

    public function setBody(string $body): HttpClientInterface;

}
