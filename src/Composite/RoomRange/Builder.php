<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite\RoomRange;

use AreaService\NHDS\MV2\Area\Composite\RoomRangeInterface;

class Builder implements BuilderInterface
{
    use Factory\AwareTrait;
    /** @var array */
    protected $record;
    public function build(): RoomRangeInterface
    {
        $roomRange = $this->getMV2AreaCompositeRoomRangeFactory()->create();
        $record = $this->getRecord();
        $roomRange->setHigh($record[RoomRangeInterface::FIELD_HIGH]);
        $roomRange->setLow($record[RoomRangeInterface::FIELD_LOW]);

        if (isset($record[RoomRangeInterface::FIELD_SEPARATOR])) {
            $roomRange->setSeparator($record[RoomRangeInterface::FIELD_SEPARATOR]);
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
