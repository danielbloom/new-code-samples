<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite;

interface ThumborImageInterface extends \JsonSerializable
{


    public function jsonSerialize();


    public function getOriginal(): string;

    public function setOriginal(string $original): ThumborImageInterface;

    public function get_120x80();

    public function set_120x80($_120x80): ThumborImageInterface;

    public function get_600x400(): string;

    public function set_600x400(string $_600x400): ThumborImageInterface;

    public function getGeneral(): string;

    public function setGeneral(string $general): ThumborImageInterface;


}
