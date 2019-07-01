<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite\Local;

use AreaService\NHDS\MV2\Area\Composite\LocalInterface;

interface BuilderInterface
{
    public function build(): LocalInterface;

    public function setRecord(array $record): BuilderInterface;
}
