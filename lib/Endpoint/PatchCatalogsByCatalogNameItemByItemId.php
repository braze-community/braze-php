<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Braze\Endpoint;

class PatchCatalogsByCatalogNameItemByItemId extends \Braze\Runtime\Client\BaseEndpoint implements \Braze\Runtime\Client\Endpoint
{
    use \Braze\Runtime\Client\EndpointTrait;
    protected $catalog_name;
    protected $item_id;

    /**
     * > Use this endpoint to edit an item in your catalog.
     *
     * To use this endpoint, you’ll need to generate an API key with the `catalogs.update_item` permission.
     *
     * ## Rate Limit
     *
     * This endpoint has a shared rate limit of 50 requests per minute between all synchronous catalog item endpoints, as documented in [API rate limits](https://www.braze.com/docs/api/api_limits/).
     *
     * ## Path parameters
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
     * ```
     * curl --location --request PATCH 'https://rest.iad-03.braze.com/catalogs/restaurants/items/restaurant1' \
     * --header 'Content-Type: application/json' \
     * --header 'Authorization: Bearer YOUR-REST-API-KEY' \
     * --data-raw '{
     * "items": [
     * {
     * "Name": "Restaurant",
     * "Loyalty_Program": false,
     * "Open_Time": "2021-09-03T09:03:19.967+00:00"
     * }
     * ]
     * }'
     *
     * ```
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
     * | `arbitrary-error` | An arbitrary error occurred. Please try again or contact [Support](https://www.braze.com/docs/support_contact/). |
     * | `catalog-not-found` | Check that the catalog name is valid. |
     * | `filtered-set-field-too-long` | The field value is being used in a filtered set that exceeds the character limit for an item. |
     * | `id-in-body` | An item ID already exists in the catalog. |
     * | `ids-too-large` | Character limit for each item ID is 250 characters. |
     * | `invalid-ids` | Supported characters for item ID names are letters, numbers, hyphens, and underscores. |
     * | `invalid-fields` | Confirm that the fields in the request exist in the catalog. |
     * | `invalid-keys-in-value-object` | Item object keys can't include `.` or `$`. |
     * | `item-not-found` | Check that the item is in the catalog. |
     * | `item-array-invalid` | `items` must be an array of objects. |
     * | `items-too-large` | Character limit for each item is 5,000 characters. |
     * | `request-includes-too-many-items` | You can only edit one catalog item per request. |
     * | `too-deep-nesting-in-value-object` | Item objects can't have more than 50 levels of nesting. |
     * | `unable-to-coerce-value` | Item types can't be converted. |
     *
     * @param array $headerParameters {
     *
     * @var string $Content-Type
     * @var string $Authorization
     *             }
     */
    public function __construct(string $catalogName, string $itemId, \Braze\Model\CatalogsCatalogNameItemsItemIdPatchBody $requestBody = null, array $headerParameters = [])
    {
        $this->catalog_name = $catalogName;
        $this->item_id = $itemId;
        $this->body = $requestBody;
        $this->headerParameters = $headerParameters;
    }

    public function getMethod(): string
    {
        return 'PATCH';
    }

    public function getUri(): string
    {
        return str_replace(['{catalog_name}', '{item_id}'], [$this->catalog_name, $this->item_id], '/catalogs/{catalog_name}/items/{item_id}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Braze\Model\CatalogsCatalogNameItemsItemIdPatchBody) {
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
     * @return null
     *
     * @throws \Braze\Exception\PatchCatalogsByCatalogNameItemByItemIdBadRequestException
     * @throws \Braze\Exception\PatchCatalogsByCatalogNameItemByItemIdUnauthorizedException
     * @throws \Braze\Exception\PatchCatalogsByCatalogNameItemByItemIdForbiddenException
     * @throws \Braze\Exception\PatchCatalogsByCatalogNameItemByItemIdNotFoundException
     * @throws \Braze\Exception\PatchCatalogsByCatalogNameItemByItemIdTooManyRequestsException
     * @throws \Braze\Exception\PatchCatalogsByCatalogNameItemByItemIdInternalServerErrorException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return json_decode($body);
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\PatchCatalogsByCatalogNameItemByItemIdBadRequestException($serializer->deserialize($body, 'Braze\\Model\\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\PatchCatalogsByCatalogNameItemByItemIdUnauthorizedException($serializer->deserialize($body, 'Braze\\Model\\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\PatchCatalogsByCatalogNameItemByItemIdForbiddenException($serializer->deserialize($body, 'Braze\\Model\\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\PatchCatalogsByCatalogNameItemByItemIdNotFoundException($serializer->deserialize($body, 'Braze\\Model\\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\PatchCatalogsByCatalogNameItemByItemIdTooManyRequestsException($serializer->deserialize($body, 'Braze\\Model\\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\PatchCatalogsByCatalogNameItemByItemIdInternalServerErrorException($serializer->deserialize($body, 'Braze\\Model\\Error', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['BearerAuth'];
    }
}
