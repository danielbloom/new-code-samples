<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite\HttpClient;

use AreaService\NHDS\MV2\Area\Composite\HttpClientInterface;

interface BuilderInterface
{
    public function build(): HttpClientInterface;

    public function setRecord(array $record): BuilderInterface;
}
