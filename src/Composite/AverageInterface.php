<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite;

interface AverageInterface extends \JsonSerializable
{
    public const FIELD_HIGH = 'high';
    public const FIELD_LOW = 'low';
    public const FIELD_AVG = 'avg';

    public function getHigh(): int;
    public function setHigh(int $high): AverageInterface;
    public function getLow(): int;
    public function setLow(int $low): AverageInterface;
    public function jsonSerialize();

    public function hasHigh(): bool;

    public function hasLow(): bool;

    public function getAvg(): int;

    public function setAvg(int $avg): AverageInterface;
}
