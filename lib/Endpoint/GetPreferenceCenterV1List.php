<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Braze\Endpoint;

class GetPreferenceCenterV1List extends \Braze\Runtime\Client\BaseEndpoint implements \Braze\Runtime\Client\Endpoint
{
    use \Braze\Runtime\Client\EndpointTrait;

    /**
     * > Use this endpoint to list your available preference centers.
     *
     * ## Prerequisites
     *
     * To use this endpoint, you’ll need an API key with the `preference_center.list` permission.
     *
     * ## Rate limit
     *
     * This endpoint has a rate limit of 1,000 requests per minute, per workspace.
     *
     * ## Path and request parameters
     *
     * There are no path or request parameters for this endpoint.
     *
     * ## Example request
     *
     * ```
     * curl --location -g --request GET https://rest.iad-01.braze.com/preference_center/v1/list \
     * --header 'Authorization: Bearer YOUR-REST-API-KEY'
     *
     * ```
     *
     * ## Response
     *
     * ``` json
     * {
     * "preference_centers": [
     * {
     * "name": "My Preference Center 1",
     * "preference_center_api_id": "preference_center_api_id",
     * "created_at": "2022-08-17T15:46:10Z",
     * "updated_at": "2022-08-17T15:46:10Z"
     * },
     * {
     * "name": "My Preference Center 2",
     * "preference_center_api_id": "preference_center_api_id",
     * "created_at": "2022-08-19T11:13:06Z",
     * "updated_at": "2022-08-19T11:13:06Z"
     * },
     * {
     * "name": "My Preference Center 3",
     * "preference_center_api_id": "preference_center_api_id",
     * "created_at": "2022-08-19T11:30:50Z",
     * "updated_at": "2022-08-19T11:30:50Z"
     * },
     * {
     * "name": "My Preference Center 4",
     * "preference_center_api_id": "preference_center_api_id",
     * "created_at": "2022-09-13T20:41:34Z",
     * "updated_at": "2022-09-13T20:41:34Z"
     * }
     * ]
     * }
     *
     * ```
     *
     * @param array $headerParameters {
     *
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
        return '/preference_center/v1/list';
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
        $optionsResolver->setDefined(['Authorization']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('Authorization', ['string']);

        return $optionsResolver;
    }

    /**
     * @return null
     *
     * @throws \Braze\Exception\GetPreferenceCenterV1ListBadRequestException
     * @throws \Braze\Exception\GetPreferenceCenterV1ListUnauthorizedException
     * @throws \Braze\Exception\GetPreferenceCenterV1ListForbiddenException
     * @throws \Braze\Exception\GetPreferenceCenterV1ListNotFoundException
     * @throws \Braze\Exception\GetPreferenceCenterV1ListTooManyRequestsException
     * @throws \Braze\Exception\GetPreferenceCenterV1ListInternalServerErrorException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return json_decode($body);
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\GetPreferenceCenterV1ListBadRequestException($serializer->deserialize($body, 'Braze\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\GetPreferenceCenterV1ListUnauthorizedException($serializer->deserialize($body, 'Braze\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\GetPreferenceCenterV1ListForbiddenException($serializer->deserialize($body, 'Braze\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\GetPreferenceCenterV1ListNotFoundException($serializer->deserialize($body, 'Braze\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\GetPreferenceCenterV1ListTooManyRequestsException($serializer->deserialize($body, 'Braze\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\GetPreferenceCenterV1ListInternalServerErrorException($serializer->deserialize($body, 'Braze\Model\Error', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['BearerAuth'];
    }
}
