<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite;

class RoomRange implements RoomRangeInterface
{
    /** @var int */
    protected $high;
    /** @var int */
    protected $low;
    /** @var string */
    protected $separator;

    public function getHigh(): int
    {
        if ($this->high === null) {
            throw new \LogicException('RoomRange high has not been set.');
        }
        return $this->high;
    }
    public function setHigh(int $high): RoomRangeInterface
    {
        if ($this->high !== null) {
            throw new \LogicException('RoomRange high already set.');
        }
        $this->high = $high;
        return $this;
    }
    public function getLow(): int
    {
        if ($this->low === null) {
            throw new \LogicException('RoomRange low has not been set.');
        }
        return $this->low;
    }
    public function setLow(int $low): RoomRangeInterface
    {
        if ($this->low !== null) {
            throw new \LogicException('RoomRange low already set.');
        }
        $this->low = $low;
        return $this;
    }
    public function getSeparator(): string
    {
        if ($this->separator === null) {
            throw new \LogicException('RoomRange separator has not been set.');
        }
        return $this->separator;
    }
    public function setSeparator(string $separator): RoomRangeInterface
    {
        if ($this->separator !== null) {
            throw new \LogicException('RoomRange separator already set.');
        }
        $this->separator = $separator;
        return $this;
    }

    public function hasSeparator(): bool
    {
        return isset($this->separator);
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}
