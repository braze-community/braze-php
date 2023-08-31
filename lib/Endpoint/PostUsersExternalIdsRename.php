<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Braze\Endpoint;

class PostUsersExternalIdsRename extends \Braze\Runtime\Client\BaseEndpoint implements \Braze\Runtime\Client\Endpoint
{
    use \Braze\Runtime\Client\EndpointTrait;

    /**
     * > Use this endpoint to rename your users’ external IDs.
     *
     * To use this endpoint, you’ll need to generate an API key with the `users.external_ids.rename` permission.
     *
     * You can send up to 50 rename objects per request. You will need to create a new [API key](https://www.braze.com/docs/api/api_key/) with permissions for this endpoint.
     *
     * This endpoint sets a new (primary) `external_id` for the user and deprecates their existing `external_id`. This means that the user can be identified by either `external_id` until the deprecated one is removed. Having multiple external IDs allows for a migration period so that older versions of your apps that use the previous external ID naming schema don't break.
     *
     * After your old naming schema is no longer in use, we highly recommend removing deprecated external IDs using the [`/users/external_ids/remove` endpoint](https://www.braze.com/docs/api/endpoints/user_data/external_id_migration/post_external_ids_remove).
     *
     * > **Warning:** Make sure to remove deprecated external IDs with the
     *
     *
     * ## Rate limit
     *
     * We apply a rate limit of 1,000 requests per minute to this endpoint, as documented in [API rate limits](http://braze.com/docs/api/api_limits/).
     *
     * ### Request parameters
     *
     * | Parameter | Required | Data Type | Description |
     * | --- | --- | --- | --- |
     * | `external_id_renames` | Required | Array of external ID rename objects | View request example and the following limitations for structure of external ID rename object |
     *
     * - The `current_external_id` must be the user’s primary ID, and cannot be a deprecated ID
     * - The `new_external_id` must not already be in use as either a primary ID or a deprecated ID
     * - The `current_external_id` and `new_external_id` cannot be the same
     *
     *
     * ## Response
     *
     * The response will confirm all successful renames, as well as unsuccessful renames with any associated errors. Error messages in the `rename_errors` field will reference the index of the object in the array of the original request.
     *
     * ``` json
     * {
     * "message" : (string) status message,
     * "external_ids" : (array of successful Rename Operations),
     * "rename_errors": (array of any )
     * }
     *
     * ```
     *
     * The `message` field will return `success` for any valid request. More specific errors are captured in the `rename_errors` array. The `message` field returns an error in the case of:
     *
     * - Invalid API key
     * - Empty `external_id_renames` array
     * - `external_id_renames` array with more than 50 objects
     * - Rate limit hit (>1,000 requests/minute)
     *
     *
     * ## Frequently Asked Questions
     *
     **Does this impact MAU?**
     * No, since the number of users will stay the same, they’ll just have a new `external_id`.
     *
     **Does user behavior change historically?**
     * No, since the user is still the same user, and all their historical behavior is still connected to them.
     *
     **Can it be run on dev/staging app groups?**
     * Yes. In fact, we highly recommend running a test migration on a staging or development app group, and ensuring everything has gone smoothly before executing on production data.
     *
     **Does this consume data points?**
     * This feature does not cost data points.
     *
     **What is the recommended deprecation period?**
     * We have no hard limit on how long you can keep deprecated external IDs around, but we highly recommend removing them once there is no longer a need to reference users by the deprecated ID.
     *
     * @param array $headerParameters {
     *
     * @var string $Content-Type
     * @var string $Authorization
     *             }
     */
    public function __construct(\Braze\Model\UsersExternalIdsRenamePostBody $requestBody = null, array $headerParameters = [])
    {
        $this->body = $requestBody;
        $this->headerParameters = $headerParameters;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/users/external_ids/rename';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Braze\Model\UsersExternalIdsRenamePostBody) {
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
     * @throws \Braze\Exception\PostUsersExternalIdsRenameBadRequestException
     * @throws \Braze\Exception\PostUsersExternalIdsRenameUnauthorizedException
     * @throws \Braze\Exception\PostUsersExternalIdsRenameForbiddenException
     * @throws \Braze\Exception\PostUsersExternalIdsRenameNotFoundException
     * @throws \Braze\Exception\PostUsersExternalIdsRenameTooManyRequestsException
     * @throws \Braze\Exception\PostUsersExternalIdsRenameInternalServerErrorException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return json_decode($body);
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\PostUsersExternalIdsRenameBadRequestException($serializer->deserialize($body, 'Braze\\Model\\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\PostUsersExternalIdsRenameUnauthorizedException($serializer->deserialize($body, 'Braze\\Model\\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\PostUsersExternalIdsRenameForbiddenException($serializer->deserialize($body, 'Braze\\Model\\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\PostUsersExternalIdsRenameNotFoundException($serializer->deserialize($body, 'Braze\\Model\\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\PostUsersExternalIdsRenameTooManyRequestsException($serializer->deserialize($body, 'Braze\\Model\\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\PostUsersExternalIdsRenameInternalServerErrorException($serializer->deserialize($body, 'Braze\\Model\\Error', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['BearerAuth'];
    }
}
