<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area;

use AreaService\NHDS\MV2\Area\Composite\CenterInterface;
use AreaService\NHDS\MV2\Area\Composite\Frequency;
use AreaService\NHDS\MV2\Area\Composite\HousingInterface;
use AreaService\NHDS\MV2\Area\Composite\Image;
use AreaService\NHDS\MV2\Area\Composite\StringPrimitive;
use AreaService\NHDS\MV2\Area\Composite\PolygonDecoratorInterface;
use AreaService\NHDS\MV2\Area\Composite\PriceInterface;

interface CommunityInterface extends \JsonSerializable
{

    public const TABLE_NAME = 'mv2_areas';

    public function getActiveListings(): int;

    public function setActiveListings(int $active_listings): CommunityInterface;

    public function getAreaId(): string;

    public function setAreaId(string $areaId): CommunityInterface;

    public function getCategory(): string;

    public function setCategory(string $category): CommunityInterface;

    public function getCenter(): CenterInterface;

    public function setCenter(CenterInterface $center): CommunityInterface;

    public function getCity(): string;

    public function setCity(string $city): CommunityInterface;

    public function getDescription(): string;

    public function setDescription(string $description): CommunityInterface;

    public function getFeaturedRank(): int;

    public function setFeaturedRank(int $featured_rank): CommunityInterface;

    public function getHousing(): HousingInterface;

    public function setHousing(HousingInterface $housing): CommunityInterface;

    public function getId(): string;

    public function setId(string $id): CommunityInterface;

    public function getName(): string;

    public function setName(string $name): CommunityInterface;

    public function getPolygons(): PolygonDecoratorInterface;

    public function setPolygons(PolygonDecoratorInterface $polygons): CommunityInterface;

    public function getPrices(): PriceInterface;

    public function setPrices(PriceInterface $prices): CommunityInterface;

    public function getSchools(): StringPrimitive\MapInterface;

    public function setSchools(StringPrimitive\MapInterface $schools): CommunityInterface;

    public function getSoldListings(): int;

    public function setSoldListings(int $sold_listings): CommunityInterface;

    public function getState(): string;

    public function setState(string $state): CommunityInterface;

    public function getStateShort(): string;

    public function setStateShort(string $state_short): CommunityInterface;

    public function getType(): string;

    public function setType(string $type): CommunityInterface;

    public function getUri(): string;

    public function setUri(string $uri): CommunityInterface;

    public function getZipCode(): string;

    public function setZipCode(string $zip_code): CommunityInterface;

    public function getAssociationPrices(): Frequency\MapInterface;

    public function setAssociationPrices(Frequency\MapInterface $association_prices): CommunityInterface;

    public function getPhotos(): Image\MapInterface;

    public function setPhotos(Image\MapInterface $images): CommunityInterface;


}
