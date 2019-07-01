<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite\Housing;

use AreaService\NHDS\MV2\Area\Composite\HousingInterface;

interface BuilderInterface
{
    public function build(): HousingInterface;

    public function setRecord(array $record): BuilderInterface;
}
