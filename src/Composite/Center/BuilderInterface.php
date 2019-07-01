<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite\Center;

use AreaService\NHDS\MV2\Area\Composite\CenterInterface;

interface BuilderInterface
{
    public function build(): CenterInterface;

    public function setRecord(array $record): BuilderInterface;
}
