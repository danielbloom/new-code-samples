<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite;

interface GalleryInterface extends \JsonSerializable
{


    public function jsonSerialize();

    public function getDescription(): string;

    public function setDescription(string $description): GalleryInterface;

    public function getTemplate(): string;

    public function setTemplate(string $template): GalleryInterface;

    public function getTitle(): string;

    public function setTitle(string $title): GalleryInterface;

    public function getImages(): Image\MapInterface;

    public function setImages(Image\MapInterface $images): GalleryInterface;

    public function hasDescription(): bool;

    public function hasTemplate(): bool;

    public function hasTitle(): bool;


}
