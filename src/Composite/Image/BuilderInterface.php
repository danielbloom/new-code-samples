<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite\Image;

use AreaService\NHDS\MV2\Area\Composite\ImageInterface;

interface BuilderInterface
{
    public function build(): ImageInterface;

    public function setRecord(array $record): BuilderInterface;
}
