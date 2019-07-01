<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite;

use AreaService\vendor\Phayes\GeoPHP;
use Phayes\GeoPHP\Geometry\MultiPolygon;
use Phayes\GeoPHP\Geometry\Polygon;


class GeoJsonPolygonDecorator implements GeoJsonPolygonDecoratorInterface
{
    use GeoPHP\AwareTrait;

    /** @var MultiPolygon */
    protected $geoPhpMultiPolygon;


    public function load(string $polygon)
    {
        $this->setGeoPhpMultiPolygon($this->getvendorPhayesGeoPHP()->load($polygon));
    }

    public function getGeoPhpMultiPolygon(): MultiPolygon
    {
        if ($this->geoPhpMultiPolygon === null) {
            throw new \LogicException('Polygon geoPhpMultiPolygon has not been set.');
        }
        return $this->geoPhpMultiPolygon;
    }

    public function setGeoPhpMultiPolygon(MultiPolygon $geoPhpMultiPolygon): GeoJsonPolygonDecoratorInterface
    {
        if ($this->geoPhpMultiPolygon !== null) {
            throw new \LogicException('Polygon geoPhpMultiPolygon already set.');
        }
        $this->geoPhpMultiPolygon = $geoPhpMultiPolygon;
        return $this;
    }

    public function jsonSerialize()
    {
        return json_decode($this->getGeoPhpMultiPolygon()->out('geojson'), true);
    }
}
