<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Composite;

interface LocalInterface extends \JsonSerializable
{
    public const FIELD_DISLIKE = 'dislike';
    public const FIELD_LIKE = 'like';

    public function jsonSerialize();

    public function getDislike(): StringPrimitive\MapInterface;

    public function setDislike(StringPrimitive\MapInterface $dislike): LocalInterface;

    public function getLike(): StringPrimitive\MapInterface;

    public function setLike(StringPrimitive\MapInterface $like): LocalInterface;

}
