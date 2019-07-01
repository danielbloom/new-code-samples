<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite\Average;

use AreaService\NHDS\MV2\Area\Composite\AverageInterface;

class Builder implements BuilderInterface
{
    use Factory\AwareTrait;
    /** @var array */
    protected $record;
    public function build(): AverageInterface
    {
        $average = $this->getMV2AreaCompositeAverageFactory()->create();
        $record = $this->getRecord();
        if (isset($record[AverageInterface::FIELD_HIGH])) {
            $average->setHigh($record[AverageInterface::FIELD_HIGH]);
        }
        $average->setLow($record[AverageInterface::FIELD_LOW]);
        $average->setAvg($record[AverageInterface::FIELD_AVG]);

        return $average;
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
