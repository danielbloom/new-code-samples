<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite;

interface FrequencyInterface extends \JsonSerializable
{

    public function getHigh(): string;

    public function setHigh(string $high): FrequencyInterface;

    public function getLow(): string;

    public function setLow(string $low): FrequencyInterface;

    public function getAvg(): string;

    public function setAvg(string $avg): FrequencyInterface;

    public function getMedian(): string;

    public function setMedian(string $median): FrequencyInterface;

    public function getFrequency(): string;

    public function setFrequency(string $frequency): FrequencyInterface;

    public function jsonSerialize();
}
