<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite;

class Average implements AverageInterface
{
    /** @var int */
    protected $high;
    /** @var int */
    protected $low;
    /** @var int */
    protected $avg;


    public function hasHigh(): bool
    {
        return $this->high === null ? false : true;
    }

    public function hasLow(): bool
    {
        return $this->low === null ? false : true;
    }

    public function getAvg(): int
    {
        if ($this->avg === null) {
            throw new \LogicException('Average avg has not been set.');
        }
        return $this->avg;
    }

    public function setAvg(int $avg): AverageInterface
    {
        if ($this->avg !== null) {
            throw new \LogicException('Average avg already set.');
        }
        $this->avg = $avg;
        return $this;
    }

    public function getHigh(): int
    {
        if ($this->high === null) {
            throw new \LogicException('Average high has not been set.');
        }
        return $this->high;
    }
    public function setHigh(int $high): AverageInterface
    {
        if ($this->high !== null) {
            throw new \LogicException('Average high already set.');
        }
        $this->high = $high;
        return $this;
    }
    public function getLow(): int
    {
        if ($this->low === null) {
            throw new \LogicException('Average low has not been set.');
        }
        return $this->low;
    }
    public function setLow(int $low): AverageInterface
    {
        if ($this->low !== null) {
            throw new \LogicException('Average low already set.');
        }
        $this->low = $low;
        return $this;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}
