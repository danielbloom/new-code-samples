<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Community\Map;

use AreaService\Doctrine;
use AreaService\NHDS\MV2\Area\Repository\Exception;
use AreaService\NHDS\MV2\Area\Community;
use AreaService\NHDS\MV2\Area\Community\MapInterface;
use AreaService\NHDS\MV2\Area\CommunityInterface;
use AreaService\SearchCriteria;
use AreaService\SearchCriteriaInterface;

class Repository implements RepositoryInterface
{
    use Doctrine\DBAL\Connection\Decorator\Repository\AwareTrait;
    use Community\Map\Builder\Factory\AwareTrait;
    use Community\Map\Factory\AwareTrait;
    use Community\Map\AwareTrait;
    use SearchCriteria\Doctrine\DBAL\Query\QueryBuilder\Builder\Factory\AwareTrait;

    public function getMap(SearchCriteriaInterface $searchCriteria): MapInterface
    {
        $queryBuilderBuilder = $this->getSearchCriteriaDoctrineDBALQueryQueryBuilderBuilderFactory()->create();
        $queryBuilderBuilder->setSearchCriteria($searchCriteria);
        $queryBuilder = $queryBuilderBuilder->build();

        $requiredColumns = [
            'active_listings',
            'area_id',
            'category',
            'center',
            'city',
            'descriptions',
            'dynamo_id',
            'featured_rank',
            'housing',
            'id',
            'name',
            'photos',
            'polygons_geometry',
            'prices',
            'schools',
            'sold_listings',
            'state',
            'state_short',
            'type',
            'uri',
            'zip_code',
        ];

        $queryBuilder
            ->from(CommunityInterface::TABLE_NAME, 'areas')
            ->innerJoin(
                'areas',
                CommunityInterface::TABLE_NAME,
                'communities',
                'communities.ref_ids && areas.community_ref_keys'
            )
            ->select(
                'areas.community_ref_keys_jsonb',
                'communities.' . ltrim(implode(', communities.', $requiredColumns), ',')
            );
        $records = $queryBuilder->execute()->fetchAll();

        if (!isset($records[0])) {
            // check if area exists but does not have any communities
            $queryBuilderBuilder = $this->getSearchCriteriaDoctrineDBALQueryQueryBuilderBuilderFactory()->create();
            $queryBuilderBuilder->setSearchCriteria($searchCriteria);
            $queryBuilder = $queryBuilderBuilder->build();
            $queryBuilder
                ->from(CommunityInterface::TABLE_NAME, 'areas')
                ->select('id');
            $records = $queryBuilder->execute()->fetchAll();

            if (!isset($records[0])) {
                throw (new Exception())->setCode(Exception::CODE_AREA_NOT_FOUND);
            }

            $records = [];
        }

        if (count($records) > 1) {

            $communityRefIds = json_decode($records[0]['community_ref_keys_jsonb']);

            $unfilteredRecords = $records;
            $records = [];

            foreach ($unfilteredRecords as $unfilteredRecord) {
                if (in_array(sha1($unfilteredRecord['uri']), $communityRefIds)) {
                    $records[] = $unfilteredRecord;
                }
            }
        }

        return $this->createBuilder()->setRecords($records)->build();

    }

    public function createBuilder(): BuilderInterface
    {
        return $this->getMV2AreaCommunityMapBuilderFactory()->create();
    }

    public function save(MapInterface $area): RepositoryInterface
    {
        // Use Doctrine Connection Decorator Repository to save your DAO to storage.

        return $this;
    }
}
