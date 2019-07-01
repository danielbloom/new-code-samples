<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite;

class Frequency implements FrequencyInterface
{


    /** @var string */
    protected $high;
    /** @var string */
    protected $low;
    /** @var string */
    protected $avg;
    /** @var string */
    protected $median;
    /** @var string */
    protected $frequency;

    public function getHigh(): string
    {
        if ($this->high === null) {
            throw new \LogicException('Frequency high has not been set.');
        }
        return $this->high;
    }

    public function setHigh(string $high): FrequencyInterface
    {
        if ($this->high !== null) {
            throw new \LogicException('Frequency high already set.');
        }
        $this->high = $high;
        return $this;
    }

    public function getLow(): string
    {
        if ($this->low === null) {
            throw new \LogicException('Frequency low has not been set.');
        }
        return $this->low;
    }

    public function setLow(string $low): FrequencyInterface
    {
        if ($this->low !== null) {
            throw new \LogicException('Frequency low already set.');
        }
        $this->low = $low;
        return $this;
    }

    public function getAvg(): string
    {
        if ($this->avg === null) {
            throw new \LogicException('Frequency avg has not been set.');
        }
        return $this->avg;
    }

    public function setAvg(string $avg): FrequencyInterface
    {
        if ($this->avg !== null) {
            throw new \LogicException('Frequency avg already set.');
        }
        $this->avg = $avg;
        return $this;
    }

    public function getMedian(): string
    {
        if ($this->median === null) {
            throw new \LogicException('Frequency median has not been set.');
        }
        return $this->median;
    }

    public function setMedian(string $median): FrequencyInterface
    {
        if ($this->median !== null) {
            throw new \LogicException('Frequency median already set.');
        }
        $this->median = $median;
        return $this;
    }

    public function getFrequency(): string
    {
        if ($this->frequency === null) {
            throw new \LogicException('Frequency frequency has not been set.');
        }
        return $this->frequency;
    }

    public function setFrequency(string $frequency): FrequencyInterface
    {
        if ($this->frequency !== null) {
            throw new \LogicException('Frequency frequency already set.');
        }
        $this->frequency = $frequency;
        return $this;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}
