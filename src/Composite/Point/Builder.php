<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite\Point;

use AreaService\NHDS\MV2\Area\Composite\PointInterface;

class Builder implements BuilderInterface
{
    use Factory\AwareTrait;

    /** @var array */
    protected $record;

    public function build(): PointInterface
    {
        $point = $this->getMV2AreaCompositePointFactory()->create();
        $record = $this->getRecord();
        $point->setLat($record[PointInterface::FIELD_LAT]);
        $point->setLng($record[PointInterface::FIELD_LNG]);

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
