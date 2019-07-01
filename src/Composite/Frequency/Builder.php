<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite\Frequency;

use AreaService\NHDS\MV2\Area\Composite\FrequencyInterface;

class Builder implements BuilderInterface
{
    use Factory\AwareTrait;

    /** @var array */
    protected $record;

    public function build(): FrequencyInterface
    {
        $frequency = $this->getMV2AreaCompositeFrequencyFactory()->create();
        $record = $this->getRecord();

        if (isset($record['frequency'])) {
            $frequency->setFrequency($record['frequency']);
        }

        $frequency->setMedian($record['median']);
        $frequency->setHigh($record['high']);
        $frequency->setLow($record['low']);
        $frequency->setAvg($record['avg']);

        return $frequency;
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
