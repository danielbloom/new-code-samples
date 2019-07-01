<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite\Housing;

use AreaService\NHDS\MV2\Area\Composite\HousingInterface;


class Builder implements BuilderInterface
{
    use Factory\AwareTrait;
    use \AreaService\NHDS\MV2\Area\Composite\Range\Builder\Factory\AwareTrait;
    use \AreaService\NHDS\MV2\Area\Composite\Average\Builder\Factory\AwareTrait;
    use \AreaService\NHDS\MV2\Area\Composite\Median\Builder\Factory\AwareTrait;
    use \AreaService\NHDS\MV2\Area\Composite\StringPrimitive\Map\Builder\Factory\AwareTrait;

    protected $record;
    public function build(): HousingInterface
    {
        $housing = $this->getMV2AreaCompositeHousingFactory()->create();
        $record = $this->getRecord();

        $rangeBuilder = $this->getMV2AreaCompositeRangeBuilderFactory()->create();
        $rangeBuilder->setRecord($record['age']);
        $housing->setAge($rangeBuilder->build());

        $rangeBuilder = $this->getMV2AreaCompositeRangeBuilderFactory()->create();
        $rangeBuilder->setRecord($record['baths']);
        $housing->setBaths($rangeBuilder->build());

        $rangeBuilder = $this->getMV2AreaCompositeRangeBuilderFactory()->create();
        $rangeBuilder->setRecord($record['beds']);
        $housing->setBeds($rangeBuilder->build());

        $avgBuilder = $this->getMV2AreaCompositeAverageBuilderFactory()->create();
        $avgBuilder->setRecord($record['lot_sizes']);
        $housing->setLotSizes($avgBuilder->build());

        $medianBuilder = $this->getMV2AreaCompositeMedianBuilderFactory()->create();
        $medianBuilder->setRecord($record['sq_ft']);
        $housing->setSqFt($medianBuilder->build());

        $stringMapBuilder = $this->getMV2AreaCompositeStringPrimitiveMapBuilderFactory()->create();
        $stringMapBuilder->setRecords($record['type']);
        $housing->setType($stringMapBuilder->build());

        return $housing;
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
