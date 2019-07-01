<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Community;

use AreaService\NHDS\MV2\Area\CommunityInterface;

interface BuilderInterface
{
    public function build(): CommunityInterface;

    public function setRecord(array $record): BuilderInterface;

}
