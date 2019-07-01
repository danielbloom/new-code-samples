<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite;

interface PointInterface extends \JsonSerializable
{
    public const FIELD_LAT = 'lat';
    public const FIELD_LNG = 'lng';

    public function getLat(): string;

    public function setLat(string $lat): PointInterface;

    public function getLng(): string;

    public function setLng(string $lng): PointInterface;

    public function jsonSerialize();
}
