<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Community\Map;

use AreaService\NHDS\MV2\Area\Community\MapInterface;
use AreaService\NHDS\MV2;

class Builder implements BuilderInterface
{
    use Factory\AwareTrait;
    use MV2\Area\Community\Map\Builder\Factory\AwareTrait;
    use MV2\Area\Community\Builder\Factory\AwareTrait;


    /** @var array */
    protected $records;

    public function build(): MapInterface
    {
        $map = $this->getMV2AreaCommunityMapFactory()->create();

        foreach ($this->getRecords() as $record) {
                $CommunityBuilder = $this->getMV2AreaCommunityBuilderFactory()->create();
                $Community = $CommunityBuilder->setRecord($record)->build();
                $map->append($Community);
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
