<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Braze\Endpoint;

class GetSessionsDataSeries extends \Braze\Runtime\Client\BaseEndpoint implements \Braze\Runtime\Client\Endpoint
{
    use \Braze\Runtime\Client\EndpointTrait;

    /**
     * > Use this endpoint to retrieve a series of the number of sessions for your app over a designated time period.
     *
     * Note: If you are using our [older navigation](https://www.braze.com/docs/navigation), `segment_id` can be found at **Developer Console > API Settings**.
     *
     * To use this endpoint, you’ll need to generate an API key with the `sessions.data_series` permission.
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
     * "time" : (string) point in time - as ISO 8601 extended when unit is "hour" and as ISO 8601 date when unit is "day",
     * "sessions" : (int)
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
     * Max number of days before `ending_at` to include in the returned series - must be between 1 and 100 (inclusive)
     * @var string $unit (Optional) String
     *
     * Unit of time between data points. Can be `day` or `hour`, defaults to `day`.
     * @var string $ending_at (Optional) Datetime (ISO 8601 string)
     *
     * Date on which the data series should end. Defaults to time of the request.
     * @var string $app_id (Optional) String
     *
     * App API identifier retrieved from the **Settings > Setup and Testing > API Keys** to limit analytics to a specific app
     * @var string $segment_id (Required) String
     *
     * See [Segment API identifier](https://www.braze.com/docs/api/identifier_types/). Segment ID indicating the analytics-enabled segment for which sessions should be returned.
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
        return '/sessions/data_series';
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
        $optionsResolver->setDefined(['length', 'unit', 'ending_at', 'app_id', 'segment_id']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('length', ['int']);
        $optionsResolver->addAllowedTypes('unit', ['string']);
        $optionsResolver->addAllowedTypes('ending_at', ['string']);
        $optionsResolver->addAllowedTypes('app_id', ['string']);
        $optionsResolver->addAllowedTypes('segment_id', ['string']);

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
     * @throws \Braze\Exception\GetSessionsDataSeriesBadRequestException
     * @throws \Braze\Exception\GetSessionsDataSeriesUnauthorizedException
     * @throws \Braze\Exception\GetSessionsDataSeriesForbiddenException
     * @throws \Braze\Exception\GetSessionsDataSeriesNotFoundException
     * @throws \Braze\Exception\GetSessionsDataSeriesTooManyRequestsException
     * @throws \Braze\Exception\GetSessionsDataSeriesInternalServerErrorException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return json_decode($body);
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\GetSessionsDataSeriesBadRequestException($serializer->deserialize($body, 'Braze\\Model\\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\GetSessionsDataSeriesUnauthorizedException($serializer->deserialize($body, 'Braze\\Model\\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\GetSessionsDataSeriesForbiddenException($serializer->deserialize($body, 'Braze\\Model\\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\GetSessionsDataSeriesNotFoundException($serializer->deserialize($body, 'Braze\\Model\\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\GetSessionsDataSeriesTooManyRequestsException($serializer->deserialize($body, 'Braze\\Model\\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\GetSessionsDataSeriesInternalServerErrorException($serializer->deserialize($body, 'Braze\\Model\\Error', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['BearerAuth'];
    }
}
