<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite\Range;

use AreaService\NHDS\MV2\Area\Composite\RangeInterface;

interface BuilderInterface
{
    public function build(): RangeInterface;

    public function setRecord(array $record): BuilderInterface;
}
