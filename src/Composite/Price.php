<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite;

class Price implements PriceInterface
{


    /** @var  PriceRangeDetailInterface */
    protected $active_prices;
    /** @var  Frequency\MapInterface */
    protected $association_prices;
    /** @var  float */
    protected $avg_price_per_sq_ft;
    /** @var  float */
    protected $avg_sold_price_per_sq_ft;
    /** @var  PriceRangeDetailInterface */
    protected $sold_prices;

    public function getActivePrices(): PriceRangeDetailInterface
    {
        if ($this->active_prices === null) {
            throw new \LogicException('Price active_prices has not been set.');
        }
        return $this->active_prices;
    }

    public function setActivePrices(PriceRangeDetailInterface $active_prices): PriceInterface
    {
        if ($this->active_prices !== null) {
            throw new \LogicException('Price active_prices already set.');
        }
        $this->active_prices = $active_prices;
        return $this;
    }

    public function getAssociationPrices(): Frequency\MapInterface
    {
        if ($this->association_prices === null) {
            throw new \LogicException('Price association_prices has not been set.');
        }
        return $this->association_prices;
    }

    public function setAssociationPrices(Frequency\MapInterface $association_prices): PriceInterface
    {
        if ($this->association_prices !== null) {
            throw new \LogicException('Price association_prices already set.');
        }
        $this->association_prices = $association_prices;
        return $this;
    }

    public function getAvgPricePerSqFt(): float
    {
        if ($this->avg_price_per_sq_ft === null) {
            throw new \LogicException('Price avg_price_per_sq_ft has not been set.');
        }
        return $this->avg_price_per_sq_ft;
    }

    public function setAvgPricePerSqFt(float $avg_price_per_sq_ft): PriceInterface
    {
        if ($this->avg_price_per_sq_ft !== null) {
            throw new \LogicException('Price avg_price_per_sq_ft already set.');
        }
        $this->avg_price_per_sq_ft = $avg_price_per_sq_ft;
        return $this;
    }

    public function getAvgSoldPricePerSqFt(): float
    {
        if ($this->avg_sold_price_per_sq_ft === null) {
            throw new \LogicException('Price avg_sold_price_per_sq_ft has not been set.');
        }
        return $this->avg_sold_price_per_sq_ft;
    }

    public function setAvgSoldPricePerSqFt(float $avg_sold_price_per_sq_ft): PriceInterface
    {
        if ($this->avg_sold_price_per_sq_ft !== null) {
            throw new \LogicException('Price avg_sold_price_per_sq_ft already set.');
        }
        $this->avg_sold_price_per_sq_ft = $avg_sold_price_per_sq_ft;
        return $this;
    }

    public function getSoldPrices(): PriceRangeDetailInterface
    {
        if ($this->sold_prices === null) {
            throw new \LogicException('Price sold_prices has not been set.');
        }
        return $this->sold_prices;
    }

    public function setSoldPrices(PriceRangeDetailInterface $sold_prices): PriceInterface
    {
        if ($this->sold_prices !== null) {
            throw new \LogicException('Price sold_prices already set.');
        }
        $this->sold_prices = $sold_prices;
        return $this;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}
