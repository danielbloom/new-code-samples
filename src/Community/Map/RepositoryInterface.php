<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Community\Map;

use AreaService\NHDS\MV2\Area\Community\MapInterface;
use AreaService\SearchCriteriaInterface;

interface RepositoryInterface
{
    public function createBuilder(): BuilderInterface;

    public function save(MapInterface $area): RepositoryInterface;

    public function getMap(SearchCriteriaInterface $searchCriteria): MapInterface;
}
