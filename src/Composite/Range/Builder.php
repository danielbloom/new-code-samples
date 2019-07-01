<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite\Range;

use AreaService\NHDS\MV2\Area\Composite\RangeInterface;

class Builder implements BuilderInterface
{
    use Factory\AwareTrait;
    /** @var array */
    protected $record;
    public function build(): RangeInterface
    {
        $roomRange = $this->getMV2AreaCompositeRangeFactory()->create();
        $record = $this->getRecord();
        if (isset($record[RangeInterface::FIELD_HIGH])) {
            $roomRange->setHigh($record[RangeInterface::FIELD_HIGH]);
        }
        if (isset($record[RangeInterface::FIELD_LOW])) {
            $roomRange->setLow($record[RangeInterface::FIELD_LOW]);
        }
        return $roomRange;
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
