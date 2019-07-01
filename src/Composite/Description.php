<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite;

class Description implements DescriptionInterface
{

    /** @var DescriptionTextInterface */
    protected $amenities;
    /** @var DescriptionTextInterface */
    protected $homes;
    /** @var DescriptionTextInterface */
    protected $listings;
    /** @var DescriptionTextInterface */
    protected $overview;
    /** @var DescriptionTextInterface */
    protected $sales;
    /** @var DescriptionTextInterface */
    protected $schools;

    public function hasAmenities(): bool
    {
        return $this->amenities === null ? false : true;
    }

    public function hasHomes(): bool
    {
        return $this->homes === null ? false : true;
    }

    public function hasListings(): bool
    {
        return $this->listings === null ? false : true;
    }

    public function hasOverview(): bool
    {
        return $this->overview === null ? false : true;
    }

    public function hasSales(): bool
    {
        return $this->sales === null ? false : true;
    }

    public function hasSchools(): bool
    {
        return $this->schools === null ? false : true;
    }

    public function getAmenities(): DescriptionTextInterface
    {
        if ($this->amenities === null) {
            throw new \LogicException('Description amenities has not been set.');
        }
        return $this->amenities;
    }

    public function setAmenities(DescriptionTextInterface $amenities): DescriptionInterface
    {
        if ($this->amenities !== null) {
            throw new \LogicException('Description amenities already set.');
        }
        $this->amenities = $amenities;
        return $this;
    }

    public function getHomes(): DescriptionTextInterface
    {
        if ($this->homes === null) {
            throw new \LogicException('Description homes has not been set.');
        }
        return $this->homes;
    }

    public function setHomes(DescriptionTextInterface $homes): DescriptionInterface
    {
        if ($this->homes !== null) {
            throw new \LogicException('Description homes already set.');
        }
        $this->homes = $homes;
        return $this;
    }

    public function getListings(): DescriptionTextInterface
    {
        if ($this->listings === null) {
            throw new \LogicException('Description listings has not been set.');
        }
        return $this->listings;
    }

    public function setListings(DescriptionTextInterface $listings): DescriptionInterface
    {
        if ($this->listings !== null) {
            throw new \LogicException('Description listings already set.');
        }
        $this->listings = $listings;
        return $this;
    }

    public function getOverview(): DescriptionTextInterface
    {
        if ($this->overview === null) {
            throw new \LogicException('Description overview has not been set.');
        }
        return $this->overview;
    }

    public function setOverview(DescriptionTextInterface $overview): DescriptionInterface
    {
        if ($this->overview !== null) {
            throw new \LogicException('Description overview already set.');
        }
        $this->overview = $overview;
        return $this;
    }

    public function getSales(): DescriptionTextInterface
    {
        if ($this->sales === null) {
            throw new \LogicException('Description sales has not been set.');
        }
        return $this->sales;
    }

    public function setSales(DescriptionTextInterface $sales): DescriptionInterface
    {
        if ($this->sales !== null) {
            throw new \LogicException('Description sales already set.');
        }
        $this->sales = $sales;
        return $this;
    }

    public function getSchools(): DescriptionTextInterface
    {
        if ($this->schools === null) {
            throw new \LogicException('Description schools has not been set.');
        }
        return $this->schools;
    }

    public function setSchools(DescriptionTextInterface $schools): DescriptionInterface
    {
        if ($this->schools !== null) {
            throw new \LogicException('Description schools already set.');
        }
        $this->schools = $schools;
        return $this;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}
