<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite;

class ThumborImage implements ThumborImageInterface
{
    protected $_120x80;
    /** @var string */
    protected $_600x400;
    /** @var string */
    protected $general;
    /** @var string */
    protected $original;

    public function get_120x80()
    {
        if ($this->_120x80 === null) {
            throw new \LogicException('ThumborImage _120x80 has not been set.');
        }
        return $this->_120x80;
    }

    public function set_120x80($_120x80): ThumborImageInterface
    {
        if ($this->_120x80 !== null) {
            throw new \LogicException('ThumborImage _120x80 already set.');
        }
        $this->_120x80 = $_120x80;
        return $this;
    }

    public function get_600x400(): string
    {
        if ($this->_600x400 === null) {
            throw new \LogicException('ThumborImage _600x400 has not been set.');
        }
        return $this->_600x400;
    }

    public function set_600x400(string $_600x400): ThumborImageInterface
    {
        if ($this->_600x400 !== null) {
            throw new \LogicException('ThumborImage _600x400 already set.');
        }
        $this->_600x400 = $_600x400;
        return $this;
    }

    public function getGeneral(): string
    {
        if ($this->general === null) {
            throw new \LogicException('ThumborImage general has not been set.');
        }
        return $this->general;
    }

    public function setGeneral(string $general): ThumborImageInterface
    {
        if ($this->general !== null) {
            throw new \LogicException('ThumborImage general already set.');
        }
        $this->general = $general;
        return $this;
    }

    public function getOriginal(): string
    {
        if ($this->original === null) {
            throw new \LogicException('ThumborImage original has not been set.');
        }
        return $this->original;
    }

    public function setOriginal(string $original): ThumborImageInterface
    {
        if ($this->original !== null) {
            throw new \LogicException('ThumborImage original already set.');
        }
        $this->original = $original;
        return $this;
    }

    public function jsonSerialize()
    {
        $responseArray = [];

        foreach ($this as $key => $value) {
            $responseArray[ltrim($key, '_')] = $value;
        }

        return $responseArray;
    }
}
