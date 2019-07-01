<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite\Frequency\Map;

use AreaService\NHDS\MV2\Area\Composite\Frequency\MapInterface;
use AreaService\NHDS\MV2;

class Builder implements BuilderInterface
{
    use Factory\AwareTrait;
    use MV2\Area\Composite\Frequency\Builder\Factory\AwareTrait;
    /** @var array */
    protected $records;

    public function build(): MapInterface
    {
        $map = $this->getMV2AreaCompositeFrequencyMapFactory()->create();
        foreach ($this->getRecords() as $record) {
            $frequencyBuilder = $this->getMV2AreaCompositeFrequencyBuilderFactory()->create();
            $frequency = $frequencyBuilder->setRecord($record)->build();
            $map[] = $frequency;
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
