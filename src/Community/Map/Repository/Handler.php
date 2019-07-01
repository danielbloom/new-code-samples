<?php
declare(strict_types=1);

namespace AreaService\NHDS\MV2\Area\Community\Map\Repository;

use AreaService\NHDS\MV2\Area\Repository\Exception;
use AreaService\NHDS\MV2\Area\Community\MapInterface;
use AreaService\Psr;
use AreaService\SearchCriteria;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Zend\Diactoros\Response\JsonResponse;
use Zend\Expressive\Router\RouteResult;

class Handler implements HandlerInterface
{
    use AwareTrait;
    use Psr\Http\Message\ServerRequest\AwareTrait;
    use SearchCriteria\ServerRequest\Builder\Factory\AwareTrait;

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $this->setPsrHttpMessageServerRequest($request);
        $routeResult = $this->getRouteResult();
        switch ($routeResult->getMatchedRouteName()) {
            case self::ROUTE_NAME_COMMUNITIES:
                try {
                    $map = $this->getMap();
                    $response = $this->wrapResponse($map);
                    $response = new JsonResponse($response);
                } catch (Exception $exception) {
                    $response = $this->generateErrorResponse($exception->getMessage());
                }

                break;
            default:
                throw new \UnexpectedValueException('Unknown route name.');
        }

        return $response;
    }

    protected function getMap(): MapInterface
    {
        $searchCriteriaBuilder = $this->getSearchCriteriaServerRequestBuilderFactory()->create();
        $psrHttpMessageServerRequest = $this->getPsrHttpMessageServerRequest();
        $searchCriteriaBuilder->setPsrHttpMessageServerRequest($psrHttpMessageServerRequest);
        $searchCriteria = $searchCriteriaBuilder->build();
        $map = $this->getNHDSMV2AreaCommunityMapRepository()->getMap($searchCriteria);

        if (extension_loaded('newrelic')) {
            $filterFields = [];
            $baseTransactionName = 'AreaService/Area' . $psrHttpMessageServerRequest->getQueryParams()['_url'];

            foreach ($searchCriteria->getFilters() as $filter) {
                $filterFields[] = $filter->getField();
            }

            if (!empty($filterFields)) {
                ksort($filterFields);
                $transactionName = $baseTransactionName . implode('-', $filterFields);
            } else {
                $transactionName = $baseTransactionName;
            }

            newrelic_name_transaction($transactionName);
        }

        return $map;
    }

    protected function getRouteResult(): RouteResult
    {
        return $this->getPsrHttpMessageServerRequest()->getAttribute(RouteResult::class);
    }

    private function wrapResponse(MapInterface $map): array
    {
        $response = [
            'meta' => [
                'description' => "Success",
                'status_code' => 200,
                'num_results' => $map->count()
            ],
            'results' => $map
        ];
        return $response;
    }

    private function generateErrorResponse($message): JsonResponse
    {
        $message = json_decode($message);

        $response = [
            'meta' => [
                'description' => $message[0],
                "errors" => [],
                'status_code' => 404,
                'num_results' => 0
            ],
            'results' => []
        ];

        $response = new JsonResponse($response, 404);

        return $response;
    }
}
