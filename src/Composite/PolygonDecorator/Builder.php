<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite\PolygonDecorator;

use AreaService\NHDS\MV2\Area\Composite\PolygonDecoratorInterface;
use Phayes\GeoPHP\GeoPHP;

class Builder implements BuilderInterface
{
    use \AreaService\NHDS\MV2\Area\Composite\Image\Builder\Factory\AwareTrait;
    use Factory\AwareTrait;

    /** @var array */
    protected $record;

    public function build(): PolygonDecoratorInterface
    {
        $polygon = $this->getMV2AreaCompositePolygonDecoratorFactory()->create();
        $record = $this->getRecord();

        $polygon->load($record[0]);

        return $polygon;
    }
    protected function getRecord(): array
    {
        if ($this->record === null) {
            throw new \LogicException('Builder record has not been set.');
        }
        return $this->record;
    }
    public function setRecord(array $record): BuilderInterface
    {
        if ($this->record !== null) {
            throw new \LogicException('Builder record is already set.');
        }
        $this->record = $record;
        return $this;
    }
}
