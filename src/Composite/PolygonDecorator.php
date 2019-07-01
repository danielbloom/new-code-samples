<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite;

use AreaService\vendor\Phayes\GeoPHP;
use Phayes\GeoPHP\Geometry\MultiPolygon;
use Phayes\GeoPHP\Geometry\Polygon;


class PolygonDecorator implements PolygonDecoratorInterface
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

    public function setGeoPhpMultiPolygon(MultiPolygon $geoPhpMultiPolygon): PolygonDecoratorInterface
    {
        if ($this->geoPhpMultiPolygon !== null) {
            throw new \LogicException('Polygon geoPhpMultiPolygon already set.');
        }
        $this->geoPhpMultiPolygon = $geoPhpMultiPolygon;
        return $this;
    }

    public function jsonSerialize()
    {
        return $this->transformMultipolygon();
    }

    private function transformMultipolygon(): array
    {
        $multiPolygon = $this->getGeoPhpMultiPolygon();
        $returnArray = [];

        if ($multiPolygon) {
            foreach ($multiPolygon->components as $polygon) {
                $pointsArray = [];

                /** @var Polygon $polygon */
                $exteriorRing = $polygon->exteriorRing();
                $points = $exteriorRing->getPoints();

                foreach ($points as $point) {
                    $pointsArray[] = $this->transformPoint($point);
                }

                $returnArray[] = $pointsArray;

            }
        }

        return $returnArray;
    }

    /**
     * Transforms a point into latitude and longitude values.
     *
     * @param Point $model
     * @return array|null
     * @throws \InvalidArgumentException
     */
    private function transformPoint(\Phayes\GeoPHP\Geometry\Point $model): ?array
    {
        $y = $model->y();
        $x = $model->x();
        if (is_nan($y) || is_nan($x)) {
            return null;
        }

        $transformed = [
            self::PROP_LATITUDE => $y,
            self::PROP_LONGITUDE => $x,
        ];

        return $transformed;
    }

}
