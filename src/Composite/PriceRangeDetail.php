<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite;

class PriceRangeDetail implements PriceRangeDetailInterface
{

    /** @var float */
    protected $avg;
    /** @var float */
    protected $high;
    /** @var string */
    protected $label;
    /** @var float */
    protected $low;
    /** @var float */
    protected $median;

    public function hasLabel(): bool
    {
        return $this->label === null ? false : true;
    }

    public function hasHigh(): bool
    {
        return $this->high === null ? false : true;
    }

    public function hasLow(): bool
    {
        return $this->low === null ? false : true;
    }

    public function getAvg(): float
    {
        if ($this->avg === null) {
            throw new \LogicException('PriceRangeDetail avg has not been set.');
        }
        return $this->avg;
    }

    public function setAvg(float $avg): PriceRangeDetailInterface
    {
        if ($this->avg !== null) {
            throw new \LogicException('PriceRangeDetail avg already set.');
        }
        $this->avg = $avg;
        return $this;
    }

    public function getHigh(): float
    {
        if ($this->high === null) {
            throw new \LogicException('PriceRangeDetail high has not been set.');
        }
        return $this->high;
    }

    public function setHigh(float $high): PriceRangeDetailInterface
    {
        if ($this->high !== null) {
            throw new \LogicException('PriceRangeDetail high already set.');
        }
        $this->high = $high;
        return $this;
    }

    public function getLabel(): string
    {
        if ($this->label === null) {
            throw new \LogicException('PriceRangeDetail label has not been set.');
        }
        return $this->label;
    }

    public function setLabel(string $label): PriceRangeDetailInterface
    {
        if ($this->label !== null) {
            throw new \LogicException('PriceRangeDetail label already set.');
        }
        $this->label = $label;
        return $this;
    }

    public function getLow(): float
    {
        if ($this->low === null) {
            throw new \LogicException('PriceRangeDetail low has not been set.');
        }
        return $this->low;
    }

    public function setLow(float $low): PriceRangeDetailInterface
    {
        if ($this->low !== null) {
            throw new \LogicException('PriceRangeDetail low already set.');
        }
        $this->low = $low;
        return $this;
    }

    public function getMedian(): float
    {
        if ($this->median === null) {
            throw new \LogicException('PriceRangeDetail median has not been set.');
        }
        return $this->median;
    }

    public function setMedian(float $median): PriceRangeDetailInterface
    {
        if ($this->median !== null) {
            throw new \LogicException('PriceRangeDetail median already set.');
        }
        $this->median = $median;
        return $this;
    }



    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}
