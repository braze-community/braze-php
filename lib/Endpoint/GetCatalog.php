<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Braze\Endpoint;

class GetCatalog extends \Braze\Runtime\Client\BaseEndpoint implements \Braze\Runtime\Client\Endpoint
{
    use \Braze\Runtime\Client\EndpointTrait;

    /**
     * > Use this endpoint to return a list of catalogs in a workspace.
     *
     * ## Prerequisites
     *
     * To use this endpoint, you’ll need an [API key](https://braze.com/docs/api/api_key/) with the `catalogs.get` permission.
     *
     * ## Rate limit
     *
     * This endpoint has a shared rate limit of 50 requests per minute between all synchronous catalog endpoints, as documented in [API rate limits](https://www.braze.com/docs/api/api_limits/).
     *
     * ## Path and request parameters
     *
     * There are no path or request parameters for this endpoint.
     *
     * ## Example request
     *
     * ```
     * curl --location --request GET 'https://rest.iad-03.braze.com/catalogs' \
     * --header 'Content-Type: application/json' \
     * --header 'Authorization: Bearer YOUR-REST-API-KEY'
     *
     * ```
     *
     * ## Response
     *
     * ### Example success response
     *
     * The status code `200` could return the following response body.
     *
     * ``` json
     * {
     * "catalogs": [
     * {
     * "description": "My Restaurants",
     * "fields": [
     * {
     * "name": "id",
     * "type": "string"
     * },
     * {
     * "name": "Name",
     * "type": "string"
     * },
     * {
     * "name": "City",
     * "type": "string"
     * },
     * {
     * "name": "Cuisine",
     * "type": "string"
     * },
     * {
     * "name": "Rating",
     * "type": "number"
     * },
     * {
     * "name": "Loyalty_Program",
     * "type": "boolean"
     * },
     * {
     * "name": "Created_At",
     * "type": "time"
     * }
     * ],
     * "name": "restaurants",
     * "num_items": 10,
     * "updated_at": "2022-11-02T20:04:06.879+00:00"
     * },
     * {
     * "description": "My Catalog",
     * "fields": [
     * {
     * "name": "id",
     * "type": "string"
     * },
     * {
     * "name": "string_field",
     * "type": "string"
     * },
     * {
     * "name": "number_field",
     * "type": "number"
     * },
     * {
     * "name": "boolean_field",
     * "type": "boolean"
     * },
     * {
     * "name": "time_field",
     * "type": "time"
     * },
     * ],
     * "name": "my_catalog",
     * "num_items": 3,
     * "updated_at": "2022-11-02T09:03:19.967+00:00"
     * },
     * ],
     * "message": "success"
     * }
     *
     * ```
     *
     * @param array $headerParameters {
     *
     * @var string $Content-Type
     * @var string $Authorization
     *             }
     */
    public function __construct(array $headerParameters = [])
    {
        $this->headerParameters = $headerParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return '/catalogs';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getHeadersOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['Content-Type', 'Authorization']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('Content-Type', ['string']);
        $optionsResolver->addAllowedTypes('Authorization', ['string']);

        return $optionsResolver;
    }

    /**
     * @return null
     *
     * @throws \Braze\Exception\GetCatalogBadRequestException
     * @throws \Braze\Exception\GetCatalogUnauthorizedException
     * @throws \Braze\Exception\GetCatalogForbiddenException
     * @throws \Braze\Exception\GetCatalogNotFoundException
     * @throws \Braze\Exception\GetCatalogTooManyRequestsException
     * @throws \Braze\Exception\GetCatalogInternalServerErrorException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return json_decode($body);
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\GetCatalogBadRequestException($serializer->deserialize($body, 'Braze\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\GetCatalogUnauthorizedException($serializer->deserialize($body, 'Braze\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\GetCatalogForbiddenException($serializer->deserialize($body, 'Braze\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\GetCatalogNotFoundException($serializer->deserialize($body, 'Braze\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\GetCatalogTooManyRequestsException($serializer->deserialize($body, 'Braze\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\GetCatalogInternalServerErrorException($serializer->deserialize($body, 'Braze\Model\Error', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['BearerAuth'];
    }
}
