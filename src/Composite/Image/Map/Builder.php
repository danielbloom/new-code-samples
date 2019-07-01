<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite\Image\Map;

use AreaService\NHDS\MV2\Area\Composite\Image\MapInterface;
use AreaService\NHDS\MV2;

class Builder implements BuilderInterface
{
    use Factory\AwareTrait;
    use MV2\Area\Composite\Image\Builder\Factory\AwareTrait;
    /** @var array */
    protected $records;

    public function build(): MapInterface
    {
        $map = $this->getMV2AreaCompositeImageMapFactory()->create();
        foreach ($this->getRecords() as $record) {
            $imageBuilder = $this->getMV2AreaCompositeImageBuilderFactory()->create();
            $image = $imageBuilder->setRecord($record)->build();
            $map->append($image);
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
