<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite;

class BoundingBox implements BoundingBoxInterface
{
    /** @var CenterInterface */
    protected $bottom_right;
    /** @var CenterInterface */
    protected $top_left;

    public function getBottomRight(): CenterInterface
    {
        if ($this->bottom_right === null) {
            throw new \LogicException('BoundingBox bottom_right has not been set.');
        }
        return $this->bottom_right;
    }

    public function setBottomRight(CenterInterface $bottomRight): BoundingBoxInterface
    {
        if ($this->bottom_right !== null) {
            throw new \LogicException('BoundingBox bottom_right already set.');
        }
        $this->bottom_right = $bottomRight;
        return $this;
    }

    public function getTopLeft(): CenterInterface
    {
        if ($this->top_left === null) {
            throw new \LogicException('BoundingBox top_left has not been set.');
        }
        return $this->top_left;
    }

    public function setTopLeft(CenterInterface $topLeft): BoundingBoxInterface
    {
        if ($this->top_left !== null) {
            throw new \LogicException('BoundingBox top_left already set.');
        }
        $this->top_left = $topLeft;
        return $this;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}
