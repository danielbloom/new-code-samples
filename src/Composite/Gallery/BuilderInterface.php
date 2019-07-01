<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite\Gallery;

use AreaService\NHDS\MV2\Area\Composite\GalleryInterface;

interface BuilderInterface
{
    public function build(): GalleryInterface;

    public function setRecord(array $record): BuilderInterface;
}
