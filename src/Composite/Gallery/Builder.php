<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite\Gallery;

use AreaService\NHDS\MV2\Area\Composite\GalleryInterface;

class Builder implements BuilderInterface
{
    use \AreaService\NHDS\MV2\Area\Composite\Image\Map\Builder\Factory\AwareTrait;
    use Factory\AwareTrait;

    /** @var array */
    protected $record;

    public function build(): GalleryInterface
    {
        $gallery = $this->getMV2AreaCompositeGalleryFactory()->create();
        $record = $this->getRecord();
        if (isset($record['description'])) {
            $gallery->setDescription($record['description']);
        }
        if (isset($record['template'])) {
            $gallery->setTemplate($record['template']);
        }
        if (isset($record['title'])) {
            $gallery->setTitle($record['title']);
        }
        $imagesMapBuilder = $this->getMV2AreaCompositeImageMapBuilderFactory()->create();
        $imagesMapBuilder->setRecords($record['images']);
        $gallery->setImages($imagesMapBuilder->build());

        return $gallery;
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
