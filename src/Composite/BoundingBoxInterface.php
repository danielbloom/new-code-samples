<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite;

interface BoundingBoxInterface extends \JsonSerializable
{
    public const FIELD_BOTTOM_RIGHT = 'bottom_right';
    public const FIELD_TOP_LEFT = 'top_left';

    public function getBottomRight(): CenterInterface;

    public function setBottomRight(CenterInterface $bottomRight): BoundingBoxInterface;

    public function getTopLeft(): CenterInterface;

    public function setTopLeft(CenterInterface $topLeft): BoundingBoxInterface;

    public function jsonSerialize();
}
