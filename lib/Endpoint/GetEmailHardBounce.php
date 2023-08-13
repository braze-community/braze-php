<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Braze\Endpoint;

class GetEmailHardBounce extends \Braze\Runtime\Client\BaseEndpoint implements \Braze\Runtime\Client\Endpoint
{
    use \Braze\Runtime\Client\EndpointTrait;

    /**
     * > Use this endpoint to pull a list of email addresses that have “hard bounced” your email messages within a certain time frame.
     *
     * To use this endpoint, you’ll need to generate an API key with the `email.hard_bounces` permission.
     *
     **Note:** You must provide an `end_date`, as well as either an `email` or a `start_date`. If you provide all three, `start_date`, `end_date`, and an `email`, we prioritize the emails given and disregard the date range.
     *
     * If your date range has more than `limit` number of hard bounces, you will need to make multiple API calls, each time increasing the `offset` until a call returns either fewer than `limit` or zero results.
     *
     * ## Rate limit
     *
     * We apply the default Braze rate limit of 250,000 requests per hour to this endpoint, as documented in [API rate limits](https://www.braze.com/docs/api/api_limits/).
     *
     * ## Example request
     *
     * ```
     * curl --location --request GET 'https://rest.iad-01.braze.com/email/hard_bounces?start_date=2019-01-01&end_date=2019-02-01&limit=100&offset=1&email=example@braze.com' \
     * --header 'Authorization: Bearer YOUR-API-KEY-HERE'
     *
     * ```
     *
     * ## Response
     *
     * Entries are listed in descending order.
     *
     * ``` json
     * Content-Type: application/json
     * Authorization: Bearer YOUR-REST-API-KEY
     * {
     * "emails": [
     * {
     * "email": "example1@braze.com",
     * "hard_bounced_at": "2016-08-25 15:24:32 +0000"
     * },
     * {
     * "email": "example2@braze.com",
     * "hard_bounced_at": "2016-08-24 17:41:58 +0000"
     * },
     * {
     * "email": "example3@braze.com",
     * "hard_bounced_at": "2016-08-24 12:01:13 +0000"
     * }
     * ],
     * "message": "success"
     * }
     *
     * ```
     *
     * @param array $queryParameters {
     *
     * @var string $start_date (Optional*) String in YYYY-MM-DD format
     *
     * Start date of the range to retrieve hard bounces, must be earlier than `end_date`. This is treated as midnight in UTC time by the API.
     *
     *You must provide either an `email` or a `start_date`, and an `end_date`.
     * @var string $end_date (Optional*) String in YYYY-MM-DD format
     *
     * String in YYYY-MM-DD format. End date of the range to retrieve hard bounces. This is treated as midnight in UTC time by the API.
     *
     *You must provide either an `email` or a `start_date`, and an `end_date`.
     * @var int $limit (Optional) Integer
     *
     * Optional field to limit the number of results returned. Defaults to 100, maximum is 500.
     * @var int $offset (Optional) Integer
     *
     * Optional beginning point in the list to retrieve from
     * @var string $email (Optional*) String
     *
     * If provided, we will return whether or not the user has hard bounced.
     *
     *You must provide either an `email` or a `start_date`, and an `end_date`.
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
        return '/email/hard_bounces';
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
        $optionsResolver->setDefined(['start_date', 'end_date', 'limit', 'offset', 'email']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('start_date', ['string']);
        $optionsResolver->addAllowedTypes('end_date', ['string']);
        $optionsResolver->addAllowedTypes('limit', ['int']);
        $optionsResolver->addAllowedTypes('offset', ['int']);
        $optionsResolver->addAllowedTypes('email', ['string']);

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
     * @throws \Braze\Exception\GetEmailHardBounceBadRequestException
     * @throws \Braze\Exception\GetEmailHardBounceUnauthorizedException
     * @throws \Braze\Exception\GetEmailHardBounceForbiddenException
     * @throws \Braze\Exception\GetEmailHardBounceNotFoundException
     * @throws \Braze\Exception\GetEmailHardBounceTooManyRequestsException
     * @throws \Braze\Exception\GetEmailHardBounceInternalServerErrorException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return json_decode($body);
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\GetEmailHardBounceBadRequestException($serializer->deserialize($body, 'Braze\\Model\\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\GetEmailHardBounceUnauthorizedException($serializer->deserialize($body, 'Braze\\Model\\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\GetEmailHardBounceForbiddenException($serializer->deserialize($body, 'Braze\\Model\\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\GetEmailHardBounceNotFoundException($serializer->deserialize($body, 'Braze\\Model\\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\GetEmailHardBounceTooManyRequestsException($serializer->deserialize($body, 'Braze\\Model\\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\GetEmailHardBounceInternalServerErrorException($serializer->deserialize($body, 'Braze\\Model\\Error', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['BearerAuth'];
    }
}
