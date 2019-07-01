<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite\Description;

use AreaService\NHDS\MV2\Area\Composite\DescriptionInterface;

class Builder implements BuilderInterface
{
    use Factory\AwareTrait;
    use \AreaService\NHDS\MV2\Area\Composite\DescriptionText\Builder\Factory\AwareTrait;
    /** @var array */
    protected $record;

    public function build(): DescriptionInterface
    {
        $description = $this->getMV2AreaCompositeDescriptionFactory()->create();
        $record = $this->getRecord();
        if (isset($record[DescriptionInterface::FIELD_AMENITIES])) {
            $descriptionTextBuilder = $this->getMV2AreaCompositeDescriptionTextBuilderFactory()->create();
            $descriptionTextBuilder->setRecord($record[DescriptionInterface::FIELD_AMENITIES]);
            $description->setAmenities($descriptionTextBuilder->build());
        }
        if (isset($record[DescriptionInterface::FIELD_HOMES])) {
            $descriptionTextBuilder = $this->getMV2AreaCompositeDescriptionTextBuilderFactory()->create();
            $descriptionTextBuilder->setRecord($record[DescriptionInterface::FIELD_HOMES]);
            $description->setHomes($descriptionTextBuilder->build());
        }
        if (isset($record[DescriptionInterface::FIELD_LISTINGS])) {
            $descriptionTextBuilder = $this->getMV2AreaCompositeDescriptionTextBuilderFactory()->create();
            $descriptionTextBuilder->setRecord($record[DescriptionInterface::FIELD_LISTINGS]);
            $description->setListings($descriptionTextBuilder->build());
        }
        if (isset($record[DescriptionInterface::FIELD_OVERVIEW])) {
            $descriptionTextBuilder = $this->getMV2AreaCompositeDescriptionTextBuilderFactory()->create();
            $descriptionTextBuilder->setRecord($record[DescriptionInterface::FIELD_OVERVIEW]);
            $description->setOverview($descriptionTextBuilder->build());
        }
        if (isset($record[DescriptionInterface::FIELD_SALES])) {
            $descriptionTextBuilder = $this->getMV2AreaCompositeDescriptionTextBuilderFactory()->create();
            $descriptionTextBuilder->setRecord($record[DescriptionInterface::FIELD_SALES]);
            $description->setSales($descriptionTextBuilder->build());
        }
        if (isset($record[DescriptionInterface::FIELD_SCHOOLS])) {
            $descriptionTextBuilder = $this->getMV2AreaCompositeDescriptionTextBuilderFactory()->create();
            $descriptionTextBuilder->setRecord($record[DescriptionInterface::FIELD_SCHOOLS]);
            $description->setSchools($descriptionTextBuilder->build());
        }

        return $description;
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
