<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite\StringPrimitive\Map;

use AreaService\NHDS\MV2\Area\Composite\StringPrimitive\MapInterface;
use AreaService\NHDS\MV2;

class Builder implements BuilderInterface
{
    use Factory\AwareTrait;

    /** @var array */
    protected $records;

    public function build(): MapInterface
    {
        $map = $this->getMV2AreaCompositeStringPrimitiveMapFactory()->create();
        foreach ($this->getRecords() as $record) {
            $map->append($record);
        }

        return $map;
    }

    protected function getRecords(): array
    {
        if ($this->records === null) {
            throw new \LogicException('Builder records has not been set.');
        }

        return $this->records;
    }

    public function setRecords(array $records): BuilderInterface
    {
        if ($this->records !== null) {
            throw new \LogicException('Builder records is already set.');
        }
        $this->records = $records;

        return $this;
    }
}
