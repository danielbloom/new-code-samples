<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite\PolygonDecorator;

use AreaService\NHDS\MV2\Area\Composite\PolygonDecoratorInterface;

interface BuilderInterface
{
    public function build(): PolygonDecoratorInterface;

    public function setRecord(array $record): BuilderInterface;
}
