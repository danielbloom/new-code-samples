<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite\DescriptionText;

use AreaService\NHDS\MV2\Area\Composite\DescriptionTextInterface;

interface BuilderInterface
{
    public function build(): DescriptionTextInterface;

    public function setRecord(array $record): BuilderInterface;
}
