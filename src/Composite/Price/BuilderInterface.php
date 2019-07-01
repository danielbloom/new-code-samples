<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite\Price;

use AreaService\NHDS\MV2\Area\Composite\PriceInterface;

interface BuilderInterface
{
    public function build(): PriceInterface;

    public function setRecord(array $record): BuilderInterface;
}
