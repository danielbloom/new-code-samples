<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite;

interface PriceInterface extends \JsonSerializable
{

    public function jsonSerialize();

    public function getActivePrices(): PriceRangeDetailInterface;

    public function setActivePrices(PriceRangeDetailInterface $active_prices): PriceInterface;

    public function getAssociationPrices(): Frequency\MapInterface;

    public function setAssociationPrices(Frequency\MapInterface $association_prices): PriceInterface;

    public function getAvgPricePerSqFt(): float;

    public function setAvgPricePerSqFt(float $avg_price_per_sq_ft): PriceInterface;

    public function getAvgSoldPricePerSqFt(): float;

    public function setAvgSoldPricePerSqFt(float $avg_sold_price_per_sq_ft): PriceInterface;

    public function getSoldPrices(): PriceRangeDetailInterface;

    public function setSoldPrices(PriceRangeDetailInterface $sold_prices): PriceInterface;


}
