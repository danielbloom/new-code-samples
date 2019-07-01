<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite;

class Housing implements HousingInterface
{
    /** @var RangeInterface */
    protected $age;
    /** @var RangeInterface */
    protected $baths;
    /** @var RangeInterface */
    protected $beds;
    /** @var  AverageInterface */
    protected $lot_sizes;
    /** @var  MedianInterface */
    protected $sq_ft;
    /** @var  StringPrimitive\MapInterface */
    protected $type;

    public function getAge(): RangeInterface
    {
        if ($this->age === null) {
            throw new \LogicException('Housing age has not been set.');
        }
        return $this->age;
    }

    public function setAge(RangeInterface $age): HousingInterface
    {
        if ($this->age !== null) {
            throw new \LogicException('Housing age already set.');
        }
        $this->age = $age;
        return $this;
    }

    public function getBaths(): RangeInterface
    {
        if ($this->baths === null) {
            throw new \LogicException('Housing baths has not been set.');
        }
        return $this->baths;
    }

    public function setBaths(RangeInterface $baths): HousingInterface
    {
        if ($this->baths !== null) {
            throw new \LogicException('Housing baths already set.');
        }
        $this->baths = $baths;
        return $this;
    }

    public function getBeds(): RangeInterface
    {
        if ($this->beds === null) {
            throw new \LogicException('Housing beds has not been set.');
        }
        return $this->beds;
    }

    public function setBeds(RangeInterface $beds): HousingInterface
    {
        if ($this->beds !== null) {
            throw new \LogicException('Housing beds already set.');
        }
        $this->beds = $beds;
        return $this;
    }

    public function getLotSizes(): AverageInterface
    {
        if ($this->lot_sizes === null) {
            throw new \LogicException('Housing lot_sizes has not been set.');
        }
        return $this->lot_sizes;
    }

    public function setLotSizes(AverageInterface $lot_sizes): HousingInterface
    {
        if ($this->lot_sizes !== null) {
            throw new \LogicException('Housing lot_sizes already set.');
        }
        $this->lot_sizes = $lot_sizes;
        return $this;
    }

    public function getSqFt(): MedianInterface
    {
        if ($this->sq_ft === null) {
            throw new \LogicException('Housing sq_ft has not been set.');
        }
        return $this->sq_ft;
    }

    public function setSqFt(MedianInterface $sq_ft): HousingInterface
    {
        if ($this->sq_ft !== null) {
            throw new \LogicException('Housing sq_ft already set.');
        }
        $this->sq_ft = $sq_ft;
        return $this;
    }

    public function getType(): StringPrimitive\MapInterface
    {
        if ($this->type === null) {
            throw new \LogicException('Housing type has not been set.');
        }
        return $this->type;
    }

    public function setType(StringPrimitive\MapInterface $type): HousingInterface
    {
        if ($this->type !== null) {
            throw new \LogicException('Housing type already set.');
        }
        $this->type = $type;
        return $this;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}
