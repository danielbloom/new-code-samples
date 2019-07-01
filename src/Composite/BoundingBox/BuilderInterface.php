<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite\BoundingBox;

use AreaService\NHDS\MV2\Area\Composite\BoundingBoxInterface;

interface BuilderInterface
{
    public function build(): BoundingBoxInterface;

    public function setRecord(array $record): BuilderInterface;
}
