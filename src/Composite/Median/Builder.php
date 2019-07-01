<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite\Median;

use AreaService\NHDS\MV2\Area\Composite\MedianInterface;

class Builder implements BuilderInterface
{
    use Factory\AwareTrait;
    /** @var array */
    protected $record;
    public function build(): MedianInterface
    {
        $median = $this->getMV2AreaCompositeMedianFactory()->create();
        $record = $this->getRecord();
        if (isset($record[MedianInterface::FIELD_HIGH])) {
            $median->setHigh($record[MedianInterface::FIELD_HIGH]);
        }
        $median->setLow($record[MedianInterface::FIELD_LOW]);
        $median->setAvg($record[MedianInterface::FIELD_AVG]);
        $median->setMedian($record[MedianInterface::FIELD_MEDIAN]);

        return $median;
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
