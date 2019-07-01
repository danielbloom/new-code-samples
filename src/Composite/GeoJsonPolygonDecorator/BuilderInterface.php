<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite\GeoJsonPolygonDecorator;

use AreaService\NHDS\MV2\Area\Composite\GeoJsonPolygonDecoratorInterface;

interface BuilderInterface
{
    public function build(): GeoJsonPolygonDecoratorInterface;

    public function setRecord(array $record): BuilderInterface;
}
