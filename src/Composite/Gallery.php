<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite;

class Gallery implements GalleryInterface
{
    /** @var string */
    protected $description;
    /** @var Image\MapInterface */
    protected $images;
    /** @var string */
    protected $template;
    /** @var string */
    protected $title;

    public function hasDescription(): bool
    {
        return $this->description === null ? false : true;
    }

    public function hasTemplate(): bool
    {
        return $this->template === null ? false : true;
    }

    public function hasTitle(): bool
    {
        return $this->title === null ? false : true;
    }

    public function getDescription(): string
    {
        if ($this->description === null) {
            throw new \LogicException('Gallery description has not been set.');
        }
        return $this->description;
    }

    public function setDescription(string $description): GalleryInterface
    {
        if ($this->description !== null) {
            throw new \LogicException('Gallery description already set.');
        }
        $this->description = $description;
        return $this;
    }

    public function getImages(): Image\MapInterface
    {
        if ($this->images === null) {
            throw new \LogicException('Gallery images has not been set.');
        }
        return $this->images;
    }

    public function setImages(Image\MapInterface $images): GalleryInterface
    {
        if ($this->images !== null) {
            throw new \LogicException('Gallery images already set.');
        }
        $this->images = $images;
        return $this;
    }


    public function getTemplate(): string
    {
        if ($this->template === null) {
            throw new \LogicException('Gallery template has not been set.');
        }
        return $this->template;
    }

    public function setTemplate(string $template): GalleryInterface
    {
        if ($this->template !== null) {
            throw new \LogicException('Gallery template already set.');
        }
        $this->template = $template;
        return $this;
    }

    public function getTitle(): string
    {
        if ($this->title === null) {
            throw new \LogicException('Gallery title has not been set.');
        }
        return $this->title;
    }

    public function setTitle(string $title): GalleryInterface
    {
        if ($this->title !== null) {
            throw new \LogicException('Gallery title already set.');
        }
        $this->title = $title;
        return $this;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}
