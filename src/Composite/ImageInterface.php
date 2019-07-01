<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite;

interface ImageInterface extends \JsonSerializable
{
    public const FIELD_ARTIST  = 'artist';
    public const FIELD_ARTIST_LINK  = 'artist_link';
    public const FIELD_COMMENTS  = 'comments';
    public const FIELD_CURATED  = 'curated';
    public const FIELD_FILE  = 'file';
    public const FIELD_LICENSE  = 'license';
    public const FIELD_LOCAL_URI  = 'local_uri';
    public const FIELD_PATH  = 'path';
    public const FIELD_PATHS  = 'paths';
    public const FIELD_PERMISSIONS_LINK  = 'permissions_link';
    public const FIELD_SOURCE  = 'source';
    public const FIELD_TITLE  = 'title';

    public function getArtist(): string;

    public function setArtist(string $artist): ImageInterface;

    public function getArtistLink(): string;

    public function setArtistLink(string $artist_link): ImageInterface;

    public function getComments(): string;

    public function setComments(string $comments): ImageInterface;

    public function isCurated(): bool;

    public function setCurated(bool $curated): ImageInterface;

    public function getFile(): string;

    public function setFile(string $file): ImageInterface;

    public function getLicense(): string;

    public function setLicense(string $license): ImageInterface;

    public function getLocalUri(): string;

    public function setLocalUri(string $local_uri): ImageInterface;

    public function getPath(): string;

    public function setPath(string $path): ImageInterface;

    public function getPermissionsLink(): string;

    public function setPermissionsLink(string $permissions_link): ImageInterface;

    public function getSource(): string;

    public function setSource(string $source): ImageInterface;

    public function getTitle(): string;

    public function setTitle(string $title): ImageInterface;

    public function jsonSerialize();

    public function getPaths(): ThumborImageInterface;

    public function setPaths(ThumborImageInterface $paths): ImageInterface;


}
