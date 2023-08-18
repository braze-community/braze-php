<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Braze\Endpoint;

class PutCatalogsByCatalogNameItem extends \Braze\Runtime\Client\BaseEndpoint implements \Braze\Runtime\Client\Endpoint
{
    use \Braze\Runtime\Client\EndpointTrait;
    protected $catalog_name;

    /**
     * > Use this endpoint to send Canvas messages via API-triggered delivery.
     *
     * To use this endpoint, you'll need to generate an API key with the `catalogs.replace_item` permission.
     *
     * API-triggered Delivery allows you to store message content in the Braze dashboard while dictating when a message is sent, and to whom via your API.
     *
     * Note that to send messages with this endpoint, you must have a [Canvas ID](https://www.braze.com/docs/api/identifier_types/#canvas-api-identifier), created when you build a Canvas.
     *
     * ## Rate limit
     *
     * This endpoint has a shared rate limit of 50 requests per minute between all synchronous catalog item endpoints, as documented in [API rate limits](https://www.braze.com/docs/api/api_limits/).
     *
     * ## Request parameters
     *
     * | Parameter | Required | Data Type | Description |
     * | --- | --- | --- | --- |
     * | `catalog_name` | Required | String | Name of the catalog. |
     * | `item_id` | Required | String | The ID of the catalog item. |
     *
     * ## Request parameters
     *
     * | Parameter | Required | Data Type | Description |
     * | --- | --- | --- | --- |
     * | `items` | Required | Array | An array that contains item objects. The item objects should contain fields that exist in the catalog except for the `id` field. Only one item object is allowed per request. |
     *
     * ## Example request
     *
     * ## Response
     *
     * There are three status code responses for this endpoint: `200`, `400`, and `404`.
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
     * The status code `400` could return the following response body. Refer to [Troubleshooting](#troubleshooting) for more information about errors you may encounter.
     *
     * ``` json
     * {
     * "errors": [
     * {
     * "id": "invalid-fields",
     * "message": "Some of the fields given do not exist in the catalog",
     * "parameters": [
     * "id"
     * ],
     * "parameter_values": [
     * "restaurant1"
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
     * | `catalog_not_found` | Check that the catalog name is valid. |
     * | `ids_not_string` | Confirm that each item ID is a string. |
     * | `ids_not_unique` | Check that each item ID is unique. |
     * | `ids_too_large` | Character limit for each item ID is 250 characters. |
     * | `item_array_invalid` | `items` must be an array of objects. |
     * | `items_missing_ids` | Confirm that each item has an ID. |
     * | `items_too_large` | Item values can't exceed 5,000 characters. |
     * | `invalid_ids` | Supported characters for item ID names are letters, numbers, hyphens, and underscores. |
     * | `invalid_fields` | Confirm that the fields in the request exist in the catalog. |
     * | `invalid_keys_in_value_object` | Item object keys can't include `.` or `$`. |
     * | `too_deep_nesting_in_value_object` | Item objects can't have more than 50 levels of nesting.
     * | `request_includes_too_many_items` | Your request has too many items. The item limit per request is 50. |
     * | `unable_to_coerce_value` | Item types can't be converted. |
     *
     * @param array $headerParameters {
     *
     * @var string $Content-Type
     * @var string $Authorization
     *             }
     */
    public function __construct(string $catalogName, \Braze\Model\CatalogsCatalogNameItemsPutBody $requestBody = null, array $headerParameters = [])
    {
        $this->catalog_name = $catalogName;
        $this->body = $requestBody;
        $this->headerParameters = $headerParameters;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{catalog_name}'], [$this->catalog_name], '/catalogs/{catalog_name}/items');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Braze\Model\CatalogsCatalogNameItemsPutBody) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }

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
     * @throws \Braze\Exception\PutCatalogsByCatalogNameItemBadRequestException
     * @throws \Braze\Exception\PutCatalogsByCatalogNameItemUnauthorizedException
     * @throws \Braze\Exception\PutCatalogsByCatalogNameItemForbiddenException
     * @throws \Braze\Exception\PutCatalogsByCatalogNameItemNotFoundException
     * @throws \Braze\Exception\PutCatalogsByCatalogNameItemTooManyRequestsException
     * @throws \Braze\Exception\PutCatalogsByCatalogNameItemInternalServerErrorException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return json_decode($body);
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\PutCatalogsByCatalogNameItemBadRequestException($serializer->deserialize($body, 'Braze\\Model\\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\PutCatalogsByCatalogNameItemUnauthorizedException($serializer->deserialize($body, 'Braze\\Model\\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\PutCatalogsByCatalogNameItemForbiddenException($serializer->deserialize($body, 'Braze\\Model\\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\PutCatalogsByCatalogNameItemNotFoundException($serializer->deserialize($body, 'Braze\\Model\\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\PutCatalogsByCatalogNameItemTooManyRequestsException($serializer->deserialize($body, 'Braze\\Model\\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\PutCatalogsByCatalogNameItemInternalServerErrorException($serializer->deserialize($body, 'Braze\\Model\\Error', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['BearerAuth'];
    }
}
