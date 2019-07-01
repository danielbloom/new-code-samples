<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite\BoundingBox;

use AreaService\NHDS\MV2\Area\Composite;
use AreaService\NHDS\MV2\Area\Composite\BoundingBoxInterface;

class Builder implements BuilderInterface
{
    use Factory\AwareTrait;
    use Composite\Center\Builder\Factory\AwareTrait;

    /** @var array */
    protected $record;

    public function build(): BoundingBoxInterface
    {
        $boundingBox = $this->getMV2AreaCompositeBoundingBoxFactory()->create();
        $record = $this->getRecord();

        if (!empty($record)) {
            $centerBuilder = $this->getMV2AreaCompositeCenterBuilderFactory()->create();
            $centerBuilder->setRecord($record['bottom_right']);
            $boundingBox->setBottomRight($centerBuilder->build());

            $centerBuilder = $this->getMV2AreaCompositeCenterBuilderFactory()->create();
            $centerBuilder->setRecord($record['top_left']);
            $boundingBox->setTopLeft($centerBuilder->build());
        }

        return $boundingBox;
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
