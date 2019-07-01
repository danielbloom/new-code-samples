<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite\GeoJsonPointDecorator;

use AreaService\NHDS\MV2\Area\Composite\GeoJsonPointDecoratorInterface;
use Phayes\GeoPHP\GeoPHP;

class Builder implements BuilderInterface
{
    use \AreaService\NHDS\MV2\Area\Composite\Image\Builder\Factory\AwareTrait;
    use Factory\AwareTrait;

    /** @var array */
    protected $record;

    public function build(): GeoJsonPointDecoratorInterface
    {
        $point = $this->getMV2AreaCompositeGeoJsonPointDecoratorFactory()->create();
        $record = $this->getRecord();

        $point->load($record[0]);

        return $point;
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
