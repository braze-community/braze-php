<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Braze\Endpoint;

class DeleteCatalogByCatalogName extends \Braze\Runtime\Client\BaseEndpoint implements \Braze\Runtime\Client\Endpoint
{
    use \Braze\Runtime\Client\EndpointTrait;
    protected $catalog_name;

    /**
     * > Use this endpoint to delete a catalog.
     *
     * ## Prerequisites
     *
     * To use this endpoint, you’ll need an [API key](https://braze.com/docs/api/api_key/) with the `catalogs.delete` permission.
     *
     * ## Rate limit
     *
     * This endpoint has a shared rate limit of 50 requests per minute between all synchronous catalog endpoints, as documented in [API rate limits](https://www.braze.com/docs/api/api_limits/).
     *
     * ## Path parameters
     *
     * | Parameter | Required | Data Type | Description |
     * | --- | --- | --- | --- |
     * | `catalog_name` | Required | String | Name of the catalog. |
     *
     * ## Response
     *
     * There are two status code responses for this endpoint: `200` and `404`.
     *
     * ### Example success response
     *
     * The status code `200` could return the following response body.
     *
     * ``` json
     * {
     * "message": "success"
     * }
     *
     * ```
     *
     * ### Example error response
     *
     * The status code `404` could return the following response body. Refer to [Troubleshooting](https://www.braze.com/docs/api/endpoints/catalogs/catalog_management/synchronous/delete_catalog/#troubleshooting) for more information about errors you may encounter.
     *
     * ``` json
     * {
     * "errors": [
     * {
     * "id": "catalog-not-found",
     * "message": "Could not find catalog",
     * "parameters": [
     * "catalog_name"
     * ],
     * "parameter_values": [
     * "restaurants"
     * ]
     * }
     * ],
     * "message": "Invalid Request"
     * }
     *
     * ```
     *
     * ## Troubleshooting
     *
     * The following table lists possible returned errors and their associated troubleshooting steps.
     *
     * | Error | Troubleshooting |
     * | --- | --- |
     * | `catalog-not-found` | Check that the catalog name is valid. |
     *
     * @param array $headerParameters {
     *
     * @var string $Content-Type
     * @var string $Authorization
     *             }
     */
    public function __construct(string $catalogName, array $headerParameters = [])
    {
        $this->catalog_name = $catalogName;
        $this->headerParameters = $headerParameters;
    }

    public function getMethod(): string
    {
        return 'DELETE';
    }

    public function getUri(): string
    {
        return str_replace(['{catalog_name}'], [$this->catalog_name], '/catalogs/{catalog_name}');
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
     * @throws \Braze\Exception\DeleteCatalogByCatalogNameBadRequestException
     * @throws \Braze\Exception\DeleteCatalogByCatalogNameUnauthorizedException
     * @throws \Braze\Exception\DeleteCatalogByCatalogNameForbiddenException
     * @throws \Braze\Exception\DeleteCatalogByCatalogNameNotFoundException
     * @throws \Braze\Exception\DeleteCatalogByCatalogNameTooManyRequestsException
     * @throws \Braze\Exception\DeleteCatalogByCatalogNameInternalServerErrorException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return json_decode($body);
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\DeleteCatalogByCatalogNameBadRequestException($serializer->deserialize($body, 'Braze\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\DeleteCatalogByCatalogNameUnauthorizedException($serializer->deserialize($body, 'Braze\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\DeleteCatalogByCatalogNameForbiddenException($serializer->deserialize($body, 'Braze\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\DeleteCatalogByCatalogNameNotFoundException($serializer->deserialize($body, 'Braze\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\DeleteCatalogByCatalogNameTooManyRequestsException($serializer->deserialize($body, 'Braze\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\DeleteCatalogByCatalogNameInternalServerErrorException($serializer->deserialize($body, 'Braze\Model\Error', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['BearerAuth'];
    }
}
