<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite;

class Point implements PointInterface
{
    /** @var string */
    protected $lat;
    /** @var string */
    protected $lng;

    public function getLat(): string
    {
        if ($this->lat === null) {
            throw new \LogicException('Point lat has not been set.');
        }
        return $this->lat;
    }

    public function setLat(string $lat): PointInterface
    {
        if ($this->lat !== null) {
            throw new \LogicException('Point lat already set.');
        }
        $this->lat = $lat;
        return $this;
    }

    public function getLng(): string
    {
        if ($this->lng === null) {
            throw new \LogicException('Point lng has not been set.');
        }
        return $this->lng;
    }

    public function setLng(string $lng): PointInterface
    {
        if ($this->lng !== null) {
            throw new \LogicException('Point lng already set.');
        }
        $this->lng = $lng;
        return $this;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}
