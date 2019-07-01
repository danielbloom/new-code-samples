<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite;

interface PriceRangeDetailInterface extends \JsonSerializable
{
    public const FIELD_HIGH = 'high';
    public const FIELD_LOW = 'low';
    public const FIELD_LABEL = 'label';
    public const FIELD_AVG = 'avg';
    public const FIELD_MEDIAN = 'median';


    public function getAvg(): float;

    public function setAvg(float $avg): PriceRangeDetailInterface;

    public function getHigh(): float;

    public function setHigh(float $high): PriceRangeDetailInterface;

    public function getLabel(): string;

    public function setLabel(string $label): PriceRangeDetailInterface;

    public function getLow(): float;

    public function setLow(float $low): PriceRangeDetailInterface;

    public function getMedian(): float;

    public function setMedian(float $median): PriceRangeDetailInterface;

    public function jsonSerialize();

    public function hasLabel(): bool;

    public function hasHigh(): bool;

    public function hasLow(): bool;

}
