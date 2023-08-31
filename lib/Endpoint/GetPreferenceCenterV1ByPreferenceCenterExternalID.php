<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Braze\Endpoint;

class GetPreferenceCenterV1ByPreferenceCenterExternalID extends \Braze\Runtime\Client\BaseEndpoint implements \Braze\Runtime\Client\Endpoint
{
    use \Braze\Runtime\Client\EndpointTrait;
    protected $PreferenceCenterExternalID;

    /**
     * > Use this endpoint to view the details for your preference centers, including when it was created and updated.
     *
     * To use this endpoint, you’ll need to generate an API key with the `preference_center.get` permission.
     *
     * ## Rate limit
     *
     * This endpoint has a rate limit of 1,000 requests per minute, per workspace.
     *
     * ## Path parameters
     *
     * | Parameter | Required | Data Type | Description |
     * | --- | --- | --- | --- |
     * | `preferenceCenterExternalID` | Required | String | The ID for your preference center. |
     *
     * ## Request parameters
     *
     * There are no request parameters for this endpoint.
     *
     * ## Example request
     *
     * ```
     * curl --location -g --request GET https://rest.iad-01.braze.com/preference_center/v1/preference_center_external_id \
     * --header 'Authorization: Bearer YOUR-REST-API-KEY'
     *
     * ```
     *
     * ## Response
     *
     * ``` json
     * {
     * "name": "My Preference Center",
     * "preference_center_api_id": "preference_center_api_id",
     * "created_at": "example_time_created",
     * "updated_at": "example_time_updated",
     * "preference_center_title": "Example preference center title",
     * "preference_center_page_html": "HTML for preference center here",
     * "confirmation_page_html": "HTML for confirmation page here",
     * "redirect_page_html": null,
     * "preference_center_options": {
     * "meta-viewport-content": "width=device-width, initial-scale=2"
     * },
     * "state": "active"
     * }
     *
     * ```
     *
     * @param array $headerParameters {
     *
     * @var string $Authorization
     *             }
     */
    public function __construct(string $preferenceCenterExternalID, array $headerParameters = [])
    {
        $this->PreferenceCenterExternalID = $preferenceCenterExternalID;
        $this->headerParameters = $headerParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{PreferenceCenterExternalID}'], [$this->PreferenceCenterExternalID], '/preference_center/v1/{PreferenceCenterExternalID}');
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
     * @throws \Braze\Exception\GetPreferenceCenterV1ByPreferenceCenterExternalIDBadRequestException
     * @throws \Braze\Exception\GetPreferenceCenterV1ByPreferenceCenterExternalIDUnauthorizedException
     * @throws \Braze\Exception\GetPreferenceCenterV1ByPreferenceCenterExternalIDForbiddenException
     * @throws \Braze\Exception\GetPreferenceCenterV1ByPreferenceCenterExternalIDNotFoundException
     * @throws \Braze\Exception\GetPreferenceCenterV1ByPreferenceCenterExternalIDTooManyRequestsException
     * @throws \Braze\Exception\GetPreferenceCenterV1ByPreferenceCenterExternalIDInternalServerErrorException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return json_decode($body);
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\GetPreferenceCenterV1ByPreferenceCenterExternalIDBadRequestException($serializer->deserialize($body, 'Braze\\Model\\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\GetPreferenceCenterV1ByPreferenceCenterExternalIDUnauthorizedException($serializer->deserialize($body, 'Braze\\Model\\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\GetPreferenceCenterV1ByPreferenceCenterExternalIDForbiddenException($serializer->deserialize($body, 'Braze\\Model\\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\GetPreferenceCenterV1ByPreferenceCenterExternalIDNotFoundException($serializer->deserialize($body, 'Braze\\Model\\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\GetPreferenceCenterV1ByPreferenceCenterExternalIDTooManyRequestsException($serializer->deserialize($body, 'Braze\\Model\\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\GetPreferenceCenterV1ByPreferenceCenterExternalIDInternalServerErrorException($serializer->deserialize($body, 'Braze\\Model\\Error', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['BearerAuth'];
    }
}
