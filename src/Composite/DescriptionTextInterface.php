<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite;

interface DescriptionTextInterface extends \JsonSerializable
{
    public const FIELD_LOCKED = 'locked';
    public const FIELD_TEXT = 'text';

    public function jsonSerialize();

    public function isLocked(): bool;

    public function setLocked(bool $locked): DescriptionTextInterface;

    public function getText(): string;

    public function setText(string $text): DescriptionTextInterface;
}
