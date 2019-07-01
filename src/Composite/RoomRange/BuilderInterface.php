<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite\RoomRange;

use AreaService\NHDS\MV2\Area\Composite\RoomRangeInterface;

interface BuilderInterface
{
    public function build(): RoomRangeInterface;

    public function setRecord(array $record): BuilderInterface;
}
