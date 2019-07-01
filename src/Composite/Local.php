<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite;

class Local implements LocalInterface
{
    /** @var StringPrimitive\MapInterface */
    protected $dislike;

    /** @var StringPrimitive\MapInterface */
    protected $like;

    public function getDislike(): StringPrimitive\MapInterface
    {
        if ($this->dislike === null) {
            throw new \LogicException('Local dislike has not been set.');
        }
        return $this->dislike;
    }

    public function setDislike(StringPrimitive\MapInterface $dislike): LocalInterface
    {
        if ($this->dislike !== null) {
            throw new \LogicException('Local dislike already set.');
        }
        $this->dislike = $dislike;
        return $this;
    }

    public function getLike(): StringPrimitive\MapInterface
    {
        if ($this->like === null) {
            throw new \LogicException('Local like has not been set.');
        }
        return $this->like;
    }

    public function setLike(StringPrimitive\MapInterface $like): LocalInterface
    {
        if ($this->like !== null) {
            throw new \LogicException('Local like already set.');
        }
        $this->like = $like;
        return $this;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}
