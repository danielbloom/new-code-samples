<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite;

interface CenterInterface extends \JsonSerializable
{
    public const FIELD_LATITUDE = 'latitude';
    public const FIELD_LONGITUDE = 'longitude';

    public function getLatitude(): float;

    public function setLatitude(float $latitude): CenterInterface;

    public function getLongitude(): float;

    public function setLongitude(float $longitude): CenterInterface;

    public function jsonSerialize();
}
