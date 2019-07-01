<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite\Average;

use AreaService\NHDS\MV2\Area\Composite\AverageInterface;

interface BuilderInterface
{
    public function build(): AverageInterface;

    public function setRecord(array $record): BuilderInterface;
}
