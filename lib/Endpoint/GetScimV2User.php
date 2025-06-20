<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Braze\Endpoint;

class GetScimV2User extends \Braze\Runtime\Client\BaseEndpoint implements \Braze\Runtime\Client\Endpoint
{
    use \Braze\Runtime\Client\EndpointTrait;

    /**
     * > Use this endpoint to look up an existing dashboard user account by specifying their email in the filter query parameter.
     *
     * Note that when the query parameter is URL encoded it will read like this: `/scim/v2/Users?filter=userName eq "user@test.com"`
     *
     * ## Prerequisites
     *
     * To use this endpoint, you'll need a SCIM token. For more information, refer to [Automated user provisioning](https://www.braze.com/docs/scim/automated_user_provisioning/).
     *
     * ## Rate limit
     *
     * This endpoint has a rate limit of 5000 requests per day, per company. This rate limit is shared with the `/scim/v2/Users/` PUT, GET, DELETE, and POST endpoints as documented in [API rate limits](https://www.braze.com/docs/api/api_limits/).
     *
     * ## Path parameters
     *
     * | Parameter | Required | Data Type | Description |
     * | --- | --- | --- | --- |
     * | `userName@example.com` | Required | String | The user's email. |
     *
     * ## Request parameters
     *
     * There is no request body for this endpoint.
     *
     * ## Response
     *
     * ``` json
     * Content-Type: application/json
     * X-Request-Origin: YOUR-REQUEST-ORIGIN-HERE
     * Authorization: Bearer YOUR-SCIM-TOKEN-HERE
     * {
     * "schemas": ["urn:ietf:params:scim:api:messages:2.0:ListResponse"],
     * "totalResults": 1,
     * "Resources": [
     * {
     * "userName": "user@test.com",
     * "id": "dfa245b7-24195aec-887bb3ad-602b3340",
     * "name": {
     * "givenName": "Test",
     * "familyName": "User"
     * },
     * "department": "finance",
     * "lastSignInAt": "Thursday, January 1, 1970 12:00:00 AM",
     * "permissions": {
     * "companyPermissions": ["manage_company_settings"],
     * "appGroup": [
     * {
     * "appGroupId": "241adcd25789fabcded",
     * "appGroupName": "Test Workspace",
     * "appGroupPermissions": ["basic_access","send_campaigns_canvases"],
     * "team": [
     * {
     * "teamId": "241adcd25789fabcded",
     * "teamName": "Test Team",
     * "teamPermissions": ["admin"]
     * }
     * ]
     * }
     * ]
     * }
     * }
     * ]
     * }
     *
     * ```
     *
     * @param array $queryParameters {
     *
     * @var string $filter
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $Content-Type
     * @var string $X-Request-Origin
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
        return '/scim/v2/Users';
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
        $optionsResolver->setDefined(['filter']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('filter', ['string']);

        return $optionsResolver;
    }

    protected function getHeadersOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['Content-Type', 'X-Request-Origin', 'Authorization']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('Content-Type', ['string']);
        $optionsResolver->addAllowedTypes('X-Request-Origin', ['string']);
        $optionsResolver->addAllowedTypes('Authorization', ['string']);

        return $optionsResolver;
    }

    /**
     * @return null
     *
     * @throws \Braze\Exception\GetScimV2UserBadRequestException
     * @throws \Braze\Exception\GetScimV2UserUnauthorizedException
     * @throws \Braze\Exception\GetScimV2UserForbiddenException
     * @throws \Braze\Exception\GetScimV2UserNotFoundException
     * @throws \Braze\Exception\GetScimV2UserTooManyRequestsException
     * @throws \Braze\Exception\GetScimV2UserInternalServerErrorException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return json_decode($body);
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\GetScimV2UserBadRequestException($serializer->deserialize($body, 'Braze\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\GetScimV2UserUnauthorizedException($serializer->deserialize($body, 'Braze\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\GetScimV2UserForbiddenException($serializer->deserialize($body, 'Braze\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\GetScimV2UserNotFoundException($serializer->deserialize($body, 'Braze\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\GetScimV2UserTooManyRequestsException($serializer->deserialize($body, 'Braze\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\GetScimV2UserInternalServerErrorException($serializer->deserialize($body, 'Braze\Model\Error', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['BearerAuth'];
    }
}
