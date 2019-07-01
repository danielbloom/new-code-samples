<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite;

class Median implements MedianInterface
{
    /** @var int */
    protected $high;
    /** @var int */
    protected $low;
    /** @var int */
    protected $avg;
    /** @var int */
    protected $median;

    public function getMedian(): int
    {
        if ($this->median === null) {
            throw new \LogicException('Median median has not been set.');
        }
        return $this->median;
    }

    public function setMedian(int $median): MedianInterface
    {
        if ($this->median !== null) {
            throw new \LogicException('Median median already set.');
        }
        $this->median = $median;
        return $this;
    }

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
            throw new \LogicException('Median avg has not been set.');
        }
        return $this->avg;
    }

    public function setAvg(int $avg): MedianInterface
    {
        if ($this->avg !== null) {
            throw new \LogicException('Median avg already set.');
        }
        $this->avg = $avg;
        return $this;
    }

    public function getHigh(): int
    {
        if ($this->high === null) {
            throw new \LogicException('Median high has not been set.');
        }
        return $this->high;
    }
    public function setHigh(int $high): MedianInterface
    {
        if ($this->high !== null) {
            throw new \LogicException('Median high already set.');
        }
        $this->high = $high;
        return $this;
    }
    public function getLow(): int
    {
        if ($this->low === null) {
            throw new \LogicException('Median low has not been set.');
        }
        return $this->low;
    }
    public function setLow(int $low): MedianInterface
    {
        if ($this->low !== null) {
            throw new \LogicException('Median low already set.');
        }
        $this->low = $low;
        return $this;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}
