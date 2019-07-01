<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite;

use Phayes\GeoPHP\Geometry\MultiPolygon;

interface GeoJsonPolygonDecoratorInterface extends \JsonSerializable
{
    public const FIELD_ID = 'id';

    const PROP_LATITUDE = 'lat';
    const PROP_LONGITUDE = 'lng';

    public function jsonSerialize();

    public function load(string $polygon);

    public function getGeoPhpMultiPolygon(): MultiPolygon;

    public function setGeoPhpMultiPolygon(MultiPolygon $geoPhpMultiPolygon): GeoJsonPolygonDecoratorInterface;

}
