<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite\Local;

use AreaService\NHDS\MV2\Area\Composite\LocalInterface;


class Builder implements BuilderInterface
{
    use Factory\AwareTrait;
    use \AreaService\NHDS\MV2\Area\Composite\StringPrimitive\Map\Builder\Factory\AwareTrait;


    /** @var array */
    protected $record;

    public function build(): LocalInterface
    {
        $local = $this->getMV2AreaCompositeLocalFactory()->create();
        $record = $this->getRecord();

        if (isset($record[LocalInterface::FIELD_DISLIKE])) {
            $stringMapBuilder = $this->getMV2AreaCompositeStringPrimitiveMapBuilderFactory()->create();
            $stringMapBuilder->setRecords($record[LocalInterface::FIELD_DISLIKE]);
            $local->setDislike($stringMapBuilder->build());
        }

        if (isset($record[LocalInterface::FIELD_LIKE])) {
            $stringMapBuilder = $this->getMV2AreaCompositeStringPrimitiveMapBuilderFactory()->create();
            $stringMapBuilder->setRecords($record[LocalInterface::FIELD_LIKE]);
            $local->setLike($stringMapBuilder->build());
        }


        return $local;
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
