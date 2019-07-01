<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite;

use AreaService\vendor\Phayes\GeoPHP;
use Phayes\GeoPHP\Geometry\Point;


class GeoJsonPointDecorator implements GeoJsonPointDecoratorInterface
{
    use GeoPHP\AwareTrait;

    /** @var Point */
    protected $geoPhpPoint;


    public function load(string $point)
    {
        $this->setGeoPhpPoint($this->getvendorPhayesGeoPHP()->load($point));
    }

    public function getGeoPhpPoint(): Point
    {
        if ($this->geoPhpPoint === null) {
            throw new \LogicException('Polygon geoPhpPoint has not been set.');
        }
        return $this->geoPhpPoint;
    }

    public function setGeoPhpPoint(Point $geoPhpPoint): GeoJsonPointDecoratorInterface
    {
        if ($this->geoPhpPoint !== null) {
            throw new \LogicException('Polygon geoPhpPoint already set.');
        }
        $this->geoPhpPoint = $geoPhpPoint;
        return $this;
    }

    public function jsonSerialize()
    {
        return json_decode($this->getGeoPhpPoint()->out('geojson'), true);
    }


}
