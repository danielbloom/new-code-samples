<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite;

class DescriptionText implements DescriptionTextInterface
{
    /** @var bool */
    protected $locked;
    /** @var string */
    protected $text;

    public function isLocked(): bool
    {
        if ($this->locked === null) {
            throw new \LogicException('DescriptionText locked has not been set.');
        }
        return $this->locked;
    }

    public function setLocked(bool $locked): DescriptionTextInterface
    {
        if ($this->locked !== null) {
            throw new \LogicException('DescriptionText locked already set.');
        }
        $this->locked = $locked;
        return $this;
    }

    public function getText(): string
    {
        if ($this->text === null) {
            throw new \LogicException('DescriptionText text has not been set.');
        }
        return $this->text;
    }

    public function setText(string $text): DescriptionTextInterface
    {
        if ($this->text !== null) {
            throw new \LogicException('DescriptionText string already set.');
        }
        $this->text = $text;
        return $this;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}
