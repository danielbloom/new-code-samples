<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Community\Map\Repository;

use Psr\Http\Server\RequestHandlerInterface;

interface HandlerInterface extends RequestHandlerInterface
{
    public const ROUTE_NAME_COMMUNITIES = 'nhds_mv2_communities';

}
