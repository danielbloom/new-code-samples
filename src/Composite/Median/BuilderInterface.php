<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite\Median;

use AreaService\NHDS\MV2\Area\Composite\MedianInterface;

interface BuilderInterface
{
    public function build(): MedianInterface;

    public function setRecord(array $record): BuilderInterface;
}
