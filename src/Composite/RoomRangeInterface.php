<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite;

interface RoomRangeInterface extends \JsonSerializable
{
    public const FIELD_HIGH = 'high';
    public const FIELD_LOW = 'low';
    public const FIELD_SEPARATOR = 'separator';
    public function getHigh(): int;
    public function setHigh(int $high): RoomRangeInterface;
    public function getLow(): int;
    public function setLow(int $low): RoomRangeInterface;
    public function getSeparator(): string;
    public function setSeparator(string $separator): RoomRangeInterface;
    public function hasSeparator(): bool;
    public function jsonSerialize();
}
