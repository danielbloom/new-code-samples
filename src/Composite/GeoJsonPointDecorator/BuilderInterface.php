<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite\GeoJsonPointDecorator;

use AreaService\NHDS\MV2\Area\Composite\GeoJsonPointDecoratorInterface;

interface BuilderInterface
{
    public function build(): GeoJsonPointDecoratorInterface;

    public function setRecord(array $record): BuilderInterface;
}
