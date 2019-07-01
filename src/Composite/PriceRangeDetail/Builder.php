<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite\PriceRangeDetail;

use AreaService\NHDS\MV2\Area\Composite\PriceRangeDetailInterface;

class Builder implements BuilderInterface
{
    use Factory\AwareTrait;
    /** @var array */
    protected $record;
    public function build(): PriceRangeDetailInterface
    {
        $roomPriceRangeDetail = $this->getMV2AreaCompositePriceRangeDetailFactory()->create();
        $record = $this->getRecord();

        if (isset($record['high'])) {
            $roomPriceRangeDetail->setHigh((float)$record['high']);
        }
        if (isset($record['low'])) {
            $roomPriceRangeDetail->setLow((float)$record['low']);
        }
        $roomPriceRangeDetail->setAvg((float)$record['avg']);
        $roomPriceRangeDetail->setMedian((float)$record['median']);
        if (isset($record['label'])) {
            $roomPriceRangeDetail->setLabel($record['label']);
        }

        return $roomPriceRangeDetail;
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
