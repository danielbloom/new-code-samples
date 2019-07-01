<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite;

interface DescriptionInterface extends \JsonSerializable
{
    const FIELD_AMENITIES  = 'amenities';
    const FIELD_HOMES  = 'homes';
    const FIELD_LISTINGS  = 'listings';
    const FIELD_OVERVIEW  = 'overview';
    const FIELD_SALES  = 'sales';
    const FIELD_SCHOOLS  = 'schools';


    public function jsonSerialize();

    public function getAmenities(): DescriptionTextInterface;

    public function setAmenities(DescriptionTextInterface $amenities): DescriptionInterface;

    public function getHomes(): DescriptionTextInterface;

    public function setHomes(DescriptionTextInterface $homes): DescriptionInterface;

    public function getListings(): DescriptionTextInterface;

    public function setListings(DescriptionTextInterface $listings): DescriptionInterface;

    public function getOverview(): DescriptionTextInterface;

    public function setOverview(DescriptionTextInterface $overview): DescriptionInterface;

    public function getSales(): DescriptionTextInterface;

    public function setSales(DescriptionTextInterface $sales): DescriptionInterface;

    public function getSchools(): DescriptionTextInterface;

    public function setSchools(DescriptionTextInterface $schools): DescriptionInterface;
}
