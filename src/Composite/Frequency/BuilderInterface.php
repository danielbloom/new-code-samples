<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite\Frequency;

use AreaService\NHDS\MV2\Area\Composite\FrequencyInterface;

interface BuilderInterface
{
    public function build(): FrequencyInterface;

    public function setRecord(array $record): BuilderInterface;

}
