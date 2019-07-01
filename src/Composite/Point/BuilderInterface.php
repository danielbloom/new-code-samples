<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite\Point;

use AreaService\NHDS\MV2\Area\Composite\PointInterface;

interface BuilderInterface
{
    public function build(): PointInterface;

    public function setRecord(array $record): BuilderInterface;
}
