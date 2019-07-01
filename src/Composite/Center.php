<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite;

class Center implements CenterInterface
{
    /** @var float */
    protected $latitude;
    /** @var float */
    protected $longitude;

    public function getLatitude(): float
    {
        if ($this->latitude === null) {
            throw new \LogicException('Center latitude has not been set.');
        }
        return $this->latitude;
    }

    public function setLatitude(float $latitude): CenterInterface
    {
        if ($this->latitude !== null) {
            throw new \LogicException('Center latitude already set.');
        }
        $this->latitude = $latitude;
        return $this;
    }

    public function getLongitude(): float
    {
        if ($this->longitude === null) {
            throw new \LogicException('Center longitude has not been set.');
        }
        return $this->longitude;
    }

    public function setLongitude(float $longitude): CenterInterface
    {
        if ($this->longitude !== null) {
            throw new \LogicException('Center longitude already set.');
        }
        $this->longitude = $longitude;
        return $this;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}
