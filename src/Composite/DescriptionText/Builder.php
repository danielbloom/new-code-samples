<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite\DescriptionText;

use AreaService\NHDS\MV2\Area\Composite\DescriptionTextInterface;

class Builder implements BuilderInterface
{
    use Factory\AwareTrait;

    /** @var array */
    protected $record;

    public function build(): DescriptionTextInterface
    {
        $descriptionText = $this->getMV2AreaCompositeDescriptionTextFactory()->create();
        $record = $this->getRecord();
        $descriptionText->setLocked($record[DescriptionTextInterface::FIELD_LOCKED]);
        $descriptionText->setText($record[DescriptionTextInterface::FIELD_TEXT]);

        return $descriptionText;
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
