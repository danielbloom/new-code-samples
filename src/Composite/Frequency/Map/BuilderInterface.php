<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite\Frequency\Map;

use AreaService\NHDS\MV2\Area\Composite\Frequency\MapInterface;

interface BuilderInterface
{
    public function build(): MapInterface;

    public function setRecords(array $records): BuilderInterface;
}
