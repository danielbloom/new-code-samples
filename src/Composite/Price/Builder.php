<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite\Price;

use AreaService\NHDS\MV2\Area\Composite\PriceInterface;
use AreaService\NHDS\MV2\Area\Composite\PriceRangeDetailInterface;


class Builder implements BuilderInterface
{
    use Factory\AwareTrait;
    use \AreaService\NHDS\MV2\Area\Composite\PriceRangeDetail\Builder\Factory\AwareTrait;
    use \AreaService\NHDS\MV2\Area\Composite\Frequency\Map\Builder\Factory\AwareTrait;


    /** @var array */
    protected $record;
    public function build(): PriceInterface
    {
        $price = $this->getMV2AreaCompositePriceFactory()->create();
        $record = $this->getRecord();

        if (isset($record['association_prices'])) {
            $frequencyMapBuilder = $this->getMV2AreaCompositeFrequencyMapBuilderFactory()->create();
            $frequencyMapBuilder->setRecords($record['association_prices']);
            $price->setAssociationPrices($frequencyMapBuilder->build());
        }

        $priceDetailBuilder = $this->getMV2AreaCompositePriceRangeDetailBuilderFactory()->create();
        $priceDetailBuilder->setRecord($record['active_prices']);
        $price->setActivePrices($priceDetailBuilder->build());



        $price->setAvgPricePerSqFt((float)$record['avg_price_per_sq_ft']);
        $price->setAvgSoldPricePerSqFt((float)$record['avg_sold_price_per_sq_ft']);

        $priceDetailBuilder = $this->getMV2AreaCompositePriceRangeDetailBuilderFactory()->create();
        $priceDetailBuilder->setRecord($record['sold_prices']);
        $price->setSoldPrices($priceDetailBuilder->build());



        return $price;
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
