<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite\Image;

use AreaService\NHDS\MV2\Area\Composite\ImageInterface;

class Builder implements BuilderInterface
{
    use Factory\AwareTrait;
    use \AreaService\NHDS\MV2\Area\Composite\ThumborImage\Builder\Factory\AwareTrait;

    /** @var array */
    protected $record;
    public function build(): ImageInterface
    {
        $image = $this->getMV2AreaCompositeImageFactory()->create();
        $record = $this->getRecord();

        $image->setFile($record[ImageInterface::FIELD_FILE]);

        if (isset($record[ImageInterface::FIELD_ARTIST])) {
            $image->setArtist($record[ImageInterface::FIELD_ARTIST]);
        }
        if (isset($record[ImageInterface::FIELD_ARTIST_LINK])) {
            $image->setArtistLink($record[ImageInterface::FIELD_ARTIST_LINK]);
        }
        if (isset($record[ImageInterface::FIELD_COMMENTS])) {
            $image->setComments($record[ImageInterface::FIELD_COMMENTS]);
        }
        if (isset($record[ImageInterface::FIELD_CURATED])) {
            $image->setCurated($record[ImageInterface::FIELD_CURATED]);
        }
        if (isset($record[ImageInterface::FIELD_LICENSE])) {
            $image->setLicense($record[ImageInterface::FIELD_LICENSE]);
        }
        if (isset($record[ImageInterface::FIELD_LOCAL_URI])) {
            $image->setLocalUri($record[ImageInterface::FIELD_LOCAL_URI]);
        }
        if (isset($record[ImageInterface::FIELD_PATH])) {
            $image->setPath($record[ImageInterface::FIELD_PATH]);
        }
        if (isset($record[ImageInterface::FIELD_PATHS])) {
            $thumborImageBuilder = $this->getMV2AreaCompositeThumborImageBuilderFactory()->create();
            $thumborImageBuilder->setRecord($record[ImageInterface::FIELD_PATHS]);
            $image->setPaths($thumborImageBuilder->build());
        }
        if (isset($record[ImageInterface::FIELD_PERMISSIONS_LINK])) {
            $image->setPermissionsLink($record[ImageInterface::FIELD_PERMISSIONS_LINK]);
        }
        if (isset($record[ImageInterface::FIELD_SOURCE])) {
            $image->setSource($record[ImageInterface::FIELD_SOURCE]);
        }
        if (isset($record[ImageInterface::FIELD_TITLE])) {
            $image->setTitle($record[ImageInterface::FIELD_TITLE]);
        }

        return $image;
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
