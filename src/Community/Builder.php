<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Community;

use AreaService\NHDS\MV2\Area\CommunityInterface;

class Builder implements BuilderInterface
{
    use Factory\AwareTrait;
    use Map\Builder\Factory\AwareTrait;
    use \AreaService\NHDS\MV2\Area\Composite\Price\Builder\Factory\AwareTrait;
    use \AreaService\NHDS\MV2\Area\Composite\Image\Map\Builder\Factory\AwareTrait;
    use \AreaService\NHDS\MV2\Area\Composite\Center\Builder\Factory\AwareTrait;
    use \AreaService\NHDS\MV2\Area\Composite\StringPrimitive\Map\Builder\Factory\AwareTrait;
    use \AreaService\NHDS\MV2\Area\Composite\PolygonDecorator\Builder\Factory\AwareTrait;
    use \AreaService\NHDS\MV2\Area\Composite\Frequency\Map\Builder\Factory\AwareTrait;
    use \AreaService\NHDS\MV2\Area\Composite\Housing\Builder\Factory\AwareTrait;




    /** @var array */
    protected $record;

    public function build(): CommunityInterface
    {
        $community = $this->getMV2AreaCommunityFactory()->create();

        $record = $this->getRecord();

        $community->setActiveListings($record['active_listings']);

        $community->setAreaId($record['area_id']);


        $frequencyMapBuilder = $this->getMV2AreaCompositeFrequencyMapBuilderFactory()->create();
        $prices = json_decode($record['prices'], true);
        $frequencyMapBuilder->setRecords($prices['association_prices']);
        $community->setAssociationPrices($frequencyMapBuilder->build());

        $community->setCategory($record['category']);

        $centerBuilder = $this->getMV2AreaCompositeCenterBuilderFactory()->create();
        $centerBuilder->setRecord(json_decode($record['center'],true));
        $community->setCenter($centerBuilder->build());

        $community->setCity($record['city']);

        $descriptions = json_decode($record['descriptions'], true);
        $community->setDescription($descriptions['overview']['text']);

        if (isset($record['featured_rank'])) {
            $community->setFeaturedRank($record['featured_rank']);
        }


        $community->setId($record['dynamo_id']);

        $community->setName($record['name']);

        $polygonBuilder = $this->getMV2AreaCompositePolygonDecoratorBuilderFactory()->create();
        $polygonBuilder->setRecord([$record['polygons_geometry']]);
        $community->setPolygons($polygonBuilder->build());


        $imagesMapBuilder = $this->getMV2AreaCompositeImageMapBuilderFactory()->create();
        $imagesMapBuilder->setRecords(json_decode($record['photos'], true));
        $community->setPhotos($imagesMapBuilder->build());

        if (!empty(json_decode($record['housing']))) {
            $housingBuilder = $this->getMV2AreaCompositeHousingBuilderFactory()->create();
            $housingBuilder->setRecord(json_decode($record['housing'], true));
            $community->setHousing($housingBuilder->build());
        }

        $pricesBuilder = $this->getMV2AreaCompositePriceBuilderFactory()->create();
        $pricesBuilder->setRecord(json_decode($record['prices'], true));
        $community->setPrices($pricesBuilder->build());

        $schoolsArray = json_decode($record['schools'], true);

        if (isset($schoolsArray['unknown_school'])) {
            $schools = $schoolsArray['unknown_school'];
        } else {
            $schools = [];
        }

        $stringMapBuilder = $this->getMV2AreaCompositeStringPrimitiveMapBuilderFactory()->create();
        $stringMapBuilder->setRecords($schools);
        $community->setSchools($stringMapBuilder->build());

        $community->setSoldListings($record['sold_listings']);
        $community->setState($record['state']);
        $community->setStateShort($record['state_short']);

        $community->setType($record['type']);
        $community->setUri($record['uri']);

        if (isset($record['zip_code'])) {
            $community->setZipCode($record['zip_code']);
        }

        return $community;
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

