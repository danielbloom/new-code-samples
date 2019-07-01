<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite\PriceRangeDetail;

use AreaService\NHDS\MV2\Area\Composite\PriceRangeDetailInterface;

interface BuilderInterface
{
    public function build(): PriceRangeDetailInterface;

    public function setRecord(array $record): BuilderInterface;
}
