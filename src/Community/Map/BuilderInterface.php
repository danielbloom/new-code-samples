<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Community\Map;

use AreaService\NHDS\MV2\Area\Community\MapInterface;

interface BuilderInterface
{
    public function build(): MapInterface;

    public function setRecords(array $records): BuilderInterface;
}
