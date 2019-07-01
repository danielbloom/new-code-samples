<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite\Description;

use AreaService\NHDS\MV2\Area\Composite\DescriptionInterface;

interface BuilderInterface
{
    public function build(): DescriptionInterface;

    public function setRecord(array $record): BuilderInterface;
}
