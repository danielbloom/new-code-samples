<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite;

class Range implements RangeInterface
{
    /** @var int */
    protected $high;
    /** @var int */
    protected $low;


    public function hasHigh(): bool
    {
        return $this->high === null ? false : true;
    }

    public function hasLow(): bool
    {
        return $this->low === null ? false : true;
    }

    public function getHigh(): int
    {
        if ($this->high === null) {
            throw new \LogicException('Range high has not been set.');
        }
        return $this->high;
    }
    public function setHigh(int $high): RangeInterface
    {
        if ($this->high !== null) {
            throw new \LogicException('Range high already set.');
        }
        $this->high = $high;
        return $this;
    }
    public function getLow(): int
    {
        if ($this->low === null) {
            throw new \LogicException('Range low has not been set.');
        }
        return $this->low;
    }
    public function setLow(int $low): RangeInterface
    {
        if ($this->low !== null) {
            throw new \LogicException('Range low already set.');
        }
        $this->low = $low;
        return $this;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}
