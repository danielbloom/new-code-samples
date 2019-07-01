<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite;

interface MedianInterface extends \JsonSerializable
{
    public const FIELD_HIGH = 'high';
    public const FIELD_LOW = 'low';
    public const FIELD_AVG = 'avg';
    public const FIELD_MEDIAN = 'median';

    public function getHigh(): int;
    public function setHigh(int $high): MedianInterface;
    public function getLow(): int;
    public function setLow(int $low): MedianInterface;
    public function jsonSerialize();

    public function hasHigh(): bool;

    public function hasLow(): bool;

    public function getAvg(): int;

    public function setAvg(int $avg): MedianInterface;

    public function getMedian(): int;

    public function setMedian(int $median): MedianInterface;
}
