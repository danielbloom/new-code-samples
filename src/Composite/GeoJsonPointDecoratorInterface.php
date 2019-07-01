<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite;

use Phayes\GeoPHP\Geometry\Point;

interface GeoJsonPointDecoratorInterface extends \JsonSerializable
{
    public const FIELD_ID = 'id';

    const PROP_LATITUDE = 'lat';
    const PROP_LONGITUDE = 'lng';

    public function jsonSerialize();

    public function load(string $polygon);

    public function getGeoPhpPoint(): Point;

    public function setGeoPhpPoint(Point $geoPhpPoint): GeoJsonPointDecoratorInterface;

}
