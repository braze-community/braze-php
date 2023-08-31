<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Braze\Endpoint;

class GetKpiNewUsersDataSeries extends \Braze\Runtime\Client\BaseEndpoint implements \Braze\Runtime\Client\Endpoint
{
    use \Braze\Runtime\Client\EndpointTrait;

    /**
     * > Use this endpoint to retrieve a daily series of the total number of new users on each date.
     *
     * Note: If you are using our [older navigation](https://www.braze.com/docs/navigation), `app_id` can be found at **Developer Console** > **API Settings**.
     *
     * To use this endpoint, you’ll need to generate an API key with the `kpi.new_users.data_series` permission.
     *
     * ## Rate limit
     *
     * We apply the default Braze rate limit of 250,000 requests per hour to this endpoint, as documented in [API rate limits](https://www.braze.com/docs/api/api_limits/).
     *
     * ## Response
     *
     * ``` json
     * Content-Type: application/json
     * Authorization: Bearer YOUR-REST-API-KEY
     * {
     * "message": (required, string) the status of the export, returns 'success' when completed without errors,
     * "data" : [
     * {
     * "time" : (string) the date as ISO 8601 date,
     * "new_users" : (int) the number of daily new users
     * },
     * ...
     * ]
     * }
     *
     * ```
     *
     * > **Tip:** For help with CSV and API exports, visit [Export troubleshooting](https://www.braze.com/docs/user_guide/data_and_analytics/export_braze_data/export_troubleshooting/).
     *
     * @param array $queryParameters {
     *
     * @var int $length (Required) Integer
     *
     * Maximum number of days before `ending_at` to include in the returned series. Must be between 1 and 100 (inclusive).
     * @var string $ending_at (Optional) Datetime ([ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) string)
     *
     * Date on which the data series should end. Defaults to time of the request.
     * @var string $app_id (Optional) String
     *
     * App API identifier retrieved from **Settings > Setup and Testing > API Keys**. If excluded, results for all apps in workspace will be returned.
     * }
     *
     * @param array $headerParameters {
     *
     * @var string $Authorization
     *             }
     */
    public function __construct(array $queryParameters = [], array $headerParameters = [])
    {
        $this->queryParameters = $queryParameters;
        $this->headerParameters = $headerParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return '/kpi/new_users/data_series';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['length', 'ending_at', 'app_id']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('length', ['int']);
        $optionsResolver->addAllowedTypes('ending_at', ['string']);
        $optionsResolver->addAllowedTypes('app_id', ['string']);

        return $optionsResolver;
    }

    protected function getHeadersOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['Authorization']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('Authorization', ['string']);

        return $optionsResolver;
    }

    /**
     * @return null
     *
     * @throws \Braze\Exception\GetKpiNewUsersDataSeriesBadRequestException
     * @throws \Braze\Exception\GetKpiNewUsersDataSeriesUnauthorizedException
     * @throws \Braze\Exception\GetKpiNewUsersDataSeriesForbiddenException
     * @throws \Braze\Exception\GetKpiNewUsersDataSeriesNotFoundException
     * @throws \Braze\Exception\GetKpiNewUsersDataSeriesTooManyRequestsException
     * @throws \Braze\Exception\GetKpiNewUsersDataSeriesInternalServerErrorException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return json_decode($body);
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\GetKpiNewUsersDataSeriesBadRequestException($serializer->deserialize($body, 'Braze\\Model\\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\GetKpiNewUsersDataSeriesUnauthorizedException($serializer->deserialize($body, 'Braze\\Model\\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\GetKpiNewUsersDataSeriesForbiddenException($serializer->deserialize($body, 'Braze\\Model\\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\GetKpiNewUsersDataSeriesNotFoundException($serializer->deserialize($body, 'Braze\\Model\\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\GetKpiNewUsersDataSeriesTooManyRequestsException($serializer->deserialize($body, 'Braze\\Model\\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\GetKpiNewUsersDataSeriesInternalServerErrorException($serializer->deserialize($body, 'Braze\\Model\\Error', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['BearerAuth'];
    }
}
