<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite\ThumborImage;

use AreaService\NHDS\MV2\Area\Composite\ThumborImageInterface;

interface BuilderInterface
{
    public function build(): ThumborImageInterface;

    public function setRecord(array $record): BuilderInterface;
}
