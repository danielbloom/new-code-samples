<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite\Center;

use AreaService\NHDS\MV2\Area\Composite\CenterInterface;

class Builder implements BuilderInterface
{
    use Factory\AwareTrait;

    /** @var array */
    protected $record;

    public function build(): CenterInterface
    {
        $center = $this->getMV2AreaCompositeCenterFactory()->create();
        $record = $this->getRecord();
        $center->setLatitude($record[CenterInterface::FIELD_LATITUDE]);
        $center->setLongitude($record[CenterInterface::FIELD_LONGITUDE]);

        return $center;
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
