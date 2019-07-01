<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite;

interface RangeInterface extends \JsonSerializable
{
    public const FIELD_HIGH = 'high';
    public const FIELD_LOW = 'low';
    public function getHigh(): int;
    public function setHigh(int $high): RangeInterface;
    public function getLow(): int;
    public function setLow(int $low): RangeInterface;
    public function jsonSerialize();

    public function hasHigh(): bool;

    public function hasLow(): bool;
}
