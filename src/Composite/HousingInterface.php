<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite;

interface HousingInterface extends \JsonSerializable
{


    public function jsonSerialize();

    public function getAge(): RangeInterface;

    public function setAge(RangeInterface $age): HousingInterface;

    public function getBaths(): RangeInterface;

    public function setBaths(RangeInterface $baths): HousingInterface;

    public function getBeds(): RangeInterface;

    public function setBeds(RangeInterface $beds): HousingInterface;

    public function getLotSizes(): AverageInterface;

    public function setLotSizes(AverageInterface $lot_sizes): HousingInterface;

    public function getSqFt(): MedianInterface;

    public function setSqFt(MedianInterface $sq_ft): HousingInterface;

    public function getType(): StringPrimitive\MapInterface;

    public function setType(StringPrimitive\MapInterface $type): HousingInterface;
}
