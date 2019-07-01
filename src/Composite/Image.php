<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite;

class Image implements ImageInterface
{

    /** @var string */
    protected $artist;
    /** @var string */
    protected $artist_link;
    /** @var string */
    protected $comments;
    /** @var bool */
    protected $curated;
    /** @var string */
    protected $file;
    /** @var string */
    protected $license;
    /** @var string */
    protected $local_uri;
    /** @var string */
    protected $path;
    /** @var ThumborImageInterface */
    protected $paths;
    /** @var string */
    protected $permissions_link;
    /** @var string */
    protected $source;
    /** @var string */
    protected $title;


    public function hasArtist(): bool
    {
        return $this->artist === null ? false : true;
    }

    public function hasArtistLink(): bool
    {
        return $this->artist_link === null ? false : true;
    }

    public function hasComments(): bool
    {
        return $this->comments === null ? false : true;
    }

    public function hasCurated(): bool
    {
        return $this->curated === null ? false : true;
    }

    public function hasLicense(): bool
    {
        return $this->license === null ? false : true;
    }

    public function hasLocalUri(): bool
    {
        return $this->local_uri === null ? false : true;
    }

    public function hasPath(): bool
    {
        return $this->path === null ? false : true;
    }

    public function hasPaths(): bool
    {
        return isset($this->paths);
    }

    public function hasPermissionsLink(): bool
    {
        return $this->permissions_link === null ? false : true;
    }

    public function hasSource(): bool
    {
        return $this->source === null ? false : true;
    }

    public function hasTitle(): bool
    {
        return $this->title === null ? false : true;
    }

    public function getArtist(): string
    {
        if ($this->artist === null) {
            throw new \LogicException('Image artist has not been set.');
        }
        return $this->artist;
    }

    public function setArtist(string $artist): ImageInterface
    {
        if ($this->artist !== null) {
            throw new \LogicException('Image artist already set.');
        }
        $this->artist = $artist;
        return $this;
    }

    public function getArtistLink(): string
    {
        if ($this->artist_link === null) {
            throw new \LogicException('Image artist_link has not been set.');
        }
        return $this->artist_link;
    }

    public function setArtistLink(string $artist_link): ImageInterface
    {
        if ($this->artist_link !== null) {
            throw new \LogicException('Image artist_link already set.');
        }
        $this->artist_link = $artist_link;
        return $this;
    }

    public function getComments(): string
    {
        if ($this->comments === null) {
            throw new \LogicException('Image comments has not been set.');
        }
        return $this->comments;
    }

    public function setComments(string $comments): ImageInterface
    {
        if ($this->comments !== null) {
            throw new \LogicException('Image comments already set.');
        }
        $this->comments = $comments;
        return $this;
    }

    public function isCurated(): bool
    {
        if ($this->curated === null) {
            throw new \LogicException('Image curated has not been set.');
        }
        return $this->curated;
    }

    public function setCurated(bool $curated): ImageInterface
    {
        if ($this->curated !== null) {
            throw new \LogicException('Image curated already set.');
        }
        $this->curated = $curated;
        return $this;
    }

    public function getFile(): string
    {
        if ($this->file === null) {
            throw new \LogicException('Image file has not been set.');
        }
        return $this->file;
    }

    public function setFile(string $file): ImageInterface
    {
        if ($this->file !== null) {
            throw new \LogicException('Image file already set.');
        }
        $this->file = $file;
        return $this;
    }

    public function getLicense(): string
    {
        if ($this->license === null) {
            throw new \LogicException('Image license has not been set.');
        }
        return $this->license;
    }

    public function setLicense(string $license): ImageInterface
    {
        if ($this->license !== null) {
            throw new \LogicException('Image license already set.');
        }
        $this->license = $license;
        return $this;
    }

    public function getLocalUri(): string
    {
        if ($this->local_uri === null) {
            throw new \LogicException('Image local_uri has not been set.');
        }
        return $this->local_uri;
    }

    public function setLocalUri(string $local_uri): ImageInterface
    {
        if ($this->local_uri !== null) {
            throw new \LogicException('Image local_uri already set.');
        }
        $this->local_uri = $local_uri;
        return $this;
    }

    public function getPath(): string
    {
        if ($this->path === null) {
            throw new \LogicException('Image path has not been set.');
        }
        return $this->path;
    }

    public function setPath(string $path): ImageInterface
    {
        if ($this->path !== null) {
            throw new \LogicException('Image path already set.');
        }
        $this->path = $path;
        return $this;
    }

    public function getPaths(): ThumborImageInterface
    {
        if ($this->paths === null) {
            throw new \LogicException('Image paths has not been set.');
        }
        return $this->paths;
    }

    public function setPaths(ThumborImageInterface $paths): ImageInterface
    {
        if ($this->paths !== null) {
            throw new \LogicException('Image paths already set.');
        }
        $this->paths = $paths;
        return $this;
    }

    public function getPermissionsLink(): string
    {
        if ($this->permissions_link === null) {
            throw new \LogicException('Image permissions_link has not been set.');
        }
        return $this->permissions_link;
    }

    public function setPermissionsLink(string $permissions_link): ImageInterface
    {
        if ($this->permissions_link !== null) {
            throw new \LogicException('Image permissions_link already set.');
        }
        $this->permissions_link = $permissions_link;
        return $this;
    }

    public function getSource(): string
    {
        if ($this->source === null) {
            throw new \LogicException('Image source has not been set.');
        }
        return $this->source;
    }

    public function setSource(string $source): ImageInterface
    {
        if ($this->source !== null) {
            throw new \LogicException('Image source already set.');
        }
        $this->source = $source;
        return $this;
    }

    public function getTitle(): string
    {
        if ($this->title === null) {
            throw new \LogicException('Image title has not been set.');
        }
        return $this->title;
    }

    public function setTitle(string $title): ImageInterface
    {
        if ($this->title !== null) {
            throw new \LogicException('Image title already set.');
        }
        $this->title = $title;
        return $this;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}
