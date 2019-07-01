<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area;

use AreaService\NHDS\MV2\Area\Composite\CenterInterface;
use AreaService\NHDS\MV2\Area\Composite\Frequency;
use AreaService\NHDS\MV2\Area\Composite\HousingInterface;
use AreaService\NHDS\MV2\Area\Composite\Image;
use AreaService\NHDS\MV2\Area\Composite\StringPrimitive;
use AreaService\NHDS\MV2\Area\Composite\PolygonDecoratorInterface;
use AreaService\NHDS\MV2\Area\Composite\PriceInterface;


class Community implements CommunityInterface
{

    /** @var int */
    protected $active_listings;
    /** @var string */
    protected $areaId;
    /** @var Frequency\MapInterface */
    protected $association_prices;

    /** @var string */
    protected $category;
    /** @var CenterInterface */
    protected $center;
    /** @var string */
    protected $city;

    /** @var string */
    protected $description;
    /** @var int */
    protected $featured_rank;
    /** @var HousingInterface */
    protected $housing;
    /** @var string */
    protected $id;
    /** @var Image\MapInterface */
    protected $photos;
    /** @var string */
    protected $name;

    /** @var PolygonDecoratorInterface */
    protected $polygons;
    /** @var PriceInterface */
    protected $prices;
    /** @var StringPrimitive\MapInterface */
    protected $schools;
    /** @var int */
    protected $sold_listings;
    /** @var string */
    protected $state;
    /** @var string */
    protected $state_short;
    /** @var string */
    protected $type;
    /** @var string */
    protected $uri;
    /** @var string */
    protected $zip_code;

    public function getActiveListings(): int
    {
        if ($this->active_listings === null) {
            throw new \LogicException('Community active_listings has not been set.');
        }
        return $this->active_listings;
    }

    public function setActiveListings(int $active_listings): CommunityInterface
    {
        if ($this->active_listings !== null) {
            throw new \LogicException('Community active_listings already set.');
        }
        $this->active_listings = $active_listings;
        return $this;
    }

    public function getAreaId(): string
    {
        if ($this->areaId === null) {
            throw new \LogicException('Community areaId has not been set.');
        }
        return $this->areaId;
    }

    public function setAreaId(string $areaId): CommunityInterface
    {
        if ($this->areaId !== null) {
            throw new \LogicException('Community areaId already set.');
        }
        $this->areaId = $areaId;
        return $this;
    }

    public function getAssociationPrices(): Frequency\MapInterface
    {
        if ($this->association_prices === null) {
            throw new \LogicException('Community association_prices has not been set.');
        }
        return $this->association_prices;
    }

    public function setAssociationPrices(Frequency\MapInterface $association_prices): CommunityInterface
    {
        if ($this->association_prices !== null) {
            throw new \LogicException('Community association_prices already set.');
        }
        $this->association_prices = $association_prices;
        return $this;
    }




    public function getCategory(): string
    {
        if ($this->category === null) {
            throw new \LogicException('Community category has not been set.');
        }
        return $this->category;
    }

    public function setCategory(string $category): CommunityInterface
    {
        if ($this->category !== null) {
            throw new \LogicException('Community category already set.');
        }
        $this->category = $category;
        return $this;
    }

    public function getCenter(): CenterInterface
    {
        if ($this->center === null) {
            throw new \LogicException('Community center has not been set.');
        }
        return $this->center;
    }

    public function setCenter(CenterInterface $center): CommunityInterface
    {
        if ($this->center !== null) {
            throw new \LogicException('Community center already set.');
        }
        $this->center = $center;
        return $this;
    }

    public function getCity(): string
    {
        if ($this->city === null) {
            throw new \LogicException('Community city has not been set.');
        }
        return $this->city;
    }

    public function setCity(string $city): CommunityInterface
    {
        if ($this->city !== null) {
            throw new \LogicException('Community city already set.');
        }
        $this->city = $city;
        return $this;
    }

    public function getDescription(): string
    {
        if ($this->description === null) {
            throw new \LogicException('Community description has not been set.');
        }
        return $this->description;
    }

    public function setDescription(string $description): CommunityInterface
    {
        if ($this->description !== null) {
            throw new \LogicException('Community description already set.');
        }
        $this->description = $description;
        return $this;
    }

    public function getFeaturedRank(): int
    {
        if ($this->featured_rank === null) {
            throw new \LogicException('Community featured_rank has not been set.');
        }
        return $this->featured_rank;
    }

    public function setFeaturedRank(int $featured_rank): CommunityInterface
    {
        if ($this->featured_rank !== null) {
            throw new \LogicException('Community featured_rank already set.');
        }
        $this->featured_rank = $featured_rank;
        return $this;
    }

    public function getHousing(): HousingInterface
    {
        if ($this->housing === null) {
            throw new \LogicException('Community housing has not been set.');
        }
        return $this->housing;
    }

    public function setHousing(HousingInterface $housing): CommunityInterface
    {
        if ($this->housing !== null) {
            throw new \LogicException('Community housing already set.');
        }
        $this->housing = $housing;
        return $this;
    }

    public function getId(): string
    {
        if ($this->id === null) {
            throw new \LogicException('Community id has not been set.');
        }
        return $this->id;
    }

    public function setId(string $id): CommunityInterface
    {
        if ($this->id !== null) {
            throw new \LogicException('Community id already set.');
        }
        $this->id = $id;
        return $this;
    }

    public function getPhotos(): Image\MapInterface
    {
        if ($this->photos === null) {
            throw new \LogicException('Community photos has not been set.');
        }
        return $this->photos;
    }

    public function setPhotos(Image\MapInterface $photos): CommunityInterface
    {
        if ($this->photos !== null) {
            throw new \LogicException('Community photos already set.');
        }
        $this->photos = $photos;
        return $this;
    }

    public function getName(): string
    {
        if ($this->name === null) {
            throw new \LogicException('Community name has not been set.');
        }
        return $this->name;
    }

    public function setName(string $name): CommunityInterface
    {
        if ($this->name !== null) {
            throw new \LogicException('Community name already set.');
        }
        $this->name = $name;
        return $this;
    }

    public function getPolygons(): PolygonDecoratorInterface
    {
        if ($this->polygons === null) {
            throw new \LogicException('Community polygons has not been set.');
        }
        return $this->polygons;
    }

    public function setPolygons(PolygonDecoratorInterface $polygons): CommunityInterface
    {
        if ($this->polygons !== null) {
            throw new \LogicException('Community polygons already set.');
        }
        $this->polygons = $polygons;
        return $this;
    }

    public function getPrices(): PriceInterface
    {
        if ($this->prices === null) {
            throw new \LogicException('Community prices has not been set.');
        }
        return $this->prices;
    }

    public function setPrices(PriceInterface $prices): CommunityInterface
    {
        if ($this->prices !== null) {
            throw new \LogicException('Community prices already set.');
        }
        $this->prices = $prices;
        return $this;
    }

    public function getSchools(): StringPrimitive\MapInterface
    {
        if ($this->schools === null) {
            throw new \LogicException('Community schools has not been set.');
        }
        return $this->schools;
    }

    public function setSchools(StringPrimitive\MapInterface $schools): CommunityInterface
    {
        if ($this->schools !== null) {
            throw new \LogicException('Community schools already set.');
        }
        $this->schools = $schools;
        return $this;
    }

    public function getSoldListings(): int
    {
        if ($this->sold_listings === null) {
            throw new \LogicException('Community sold_listings has not been set.');
        }
        return $this->sold_listings;
    }

    public function setSoldListings(int $sold_listings): CommunityInterface
    {
        if ($this->sold_listings !== null) {
            throw new \LogicException('Community sold_listings already set.');
        }
        $this->sold_listings = $sold_listings;
        return $this;
    }

    public function getState(): string
    {
        if ($this->state === null) {
            throw new \LogicException('Community state has not been set.');
        }
        return $this->state;
    }

    public function setState(string $state): CommunityInterface
    {
        if ($this->state !== null) {
            throw new \LogicException('Community state already set.');
        }
        $this->state = $state;
        return $this;
    }

    public function getStateShort(): string
    {
        if ($this->state_short === null) {
            throw new \LogicException('Community state_short has not been set.');
        }
        return $this->state_short;
    }

    public function setStateShort(string $state_short): CommunityInterface
    {
        if ($this->state_short !== null) {
            throw new \LogicException('Community state_short already set.');
        }
        $this->state_short = $state_short;
        return $this;
    }

    public function getType(): string
    {
        if ($this->type === null) {
            throw new \LogicException('Community type has not been set.');
        }
        return $this->type;
    }

    public function setType(string $type): CommunityInterface
    {
        if ($this->type !== null) {
            throw new \LogicException('Community type already set.');
        }
        $this->type = $type;
        return $this;
    }

    public function getUri(): string
    {
        if ($this->uri === null) {
            throw new \LogicException('Community uri has not been set.');
        }
        return $this->uri;
    }

    public function setUri(string $uri): CommunityInterface
    {
        if ($this->uri !== null) {
            throw new \LogicException('Community uri already set.');
        }
        $this->uri = $uri;
        return $this;
    }

    public function getZipCode(): string
    {
        if ($this->zip_code === null) {
            throw new \LogicException('Community zip_code has not been set.');
        }
        return $this->zip_code;
    }

    public function setZipCode(string $zip_code): CommunityInterface
    {
        if ($this->zip_code !== null) {
            throw new \LogicException('Community zip_code already set.');
        }
        $this->zip_code = $zip_code;
        return $this;
    }




    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}
