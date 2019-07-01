<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite\ThumborImage;

use AreaService\NHDS\MV2\Area\Composite\ThumborImageInterface;

class Builder implements BuilderInterface
{
    use Factory\AwareTrait;
    /** @var array */
    protected $record;

    public function build(): ThumborImageInterface
    {
        $thumborImage = $this->getMV2AreaCompositeThumborImageFactory()->create();
        $record = $this->getRecord();
        $thumborImage->set_120x80($record['120x80']);
        $thumborImage->set_600x400($record['600x400']);
        $thumborImage->setGeneral($record['general']);
        $thumborImage->setOriginal($record['original']);
        return $thumborImage;
    }
    protected function getRecord(): array
    {
        if ($this->record === null) {
            throw new \LogicException('Builder record has not been set.');
        }
        return $this->record;
    }
    public function setRecord(array $record): BuilderInterface
    {
        if ($this->record !== null) {
            throw new \LogicException('Builder record is already set.');
        }
        $this->record = $record;
        return $this;
    }
}
