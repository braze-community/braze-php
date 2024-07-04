<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Braze\Endpoint;

class PostPreferenceCenterV1 extends \Braze\Runtime\Client\BaseEndpoint implements \Braze\Runtime\Client\Endpoint
{
    use \Braze\Runtime\Client\EndpointTrait;

    /**
     * > Use this endpoint to create a preference center to allow users to manage their notification preferences for email campaigns.
     *
     * To use this endpoint, you’ll need to generate an API key with the `preference_center.update` permission.
     *
     * Check out [Creating a preference center via API](https://www.braze.com/docs/user_guide/message_building_by_channel/email/preference_center/) for details on how to include this in your email campaigns.
     *
     * ## Rate limit
     *
     * This endpoint has a rate limit of 10 requests per minute, per workspace.
     *
     * ## Request parameters
     *
     * | Parameter | Required | Data Type | Description |
     * | --- | --- | --- | --- |
     * | `name` | Required | String | The name of the preference center that meets the following requirements:  <br>\- Only contains letters, numbers, hyphens, and underscores  <br>\- Does not have spaces |
     * | `preference_center_title` | Optional | String | The title for the preference center and confirmation pages. If a title is not specified, the title of the pages will default to "Preference Center". |
     * | `preference_center_page_html` | Required | String | The HTML for the preference center page. |
     * | `confirmation_page_html` | Required | String | The HTML for the confirmation page. |
     * | `state` | Optional | String | Choose `active` or `draft`. Defaults to `active` if not specified. |
     * | `options` | Optional | Object | Attributes: `meta-viewport-content`. When present, a `viewport` meta tag will be added to the page with `content=` . |
     *
     * > **Note:** The preference center name can't be edited once created.
     *
     *
     * ### Liquid tags
     *
     * Refer to the following Liquid tags that can be included in your HTML to generate a user's subscription state on the preference center page.
     *
     * #### User subscription state
     *
     * | Liquid | Description |
     * | --- | --- |
     * | `{{subscribed_state.${email_global}}}` | Get the global email subscribed state for the user (i.e., "opted_in", "subscribed", or "unsubscribed". |
     * | `{{subscribed_state.${}}}` | Get the subscribed state of the specified subscription group for the user (i.e., "subscribed" or "unsubscribed"). |
     *
     * #### Form inputs and action
     *
     * | Liquid | Description |
     * | --- | --- |
     * | `{% form_field_name :email_global_state %}` | Indicates that a specific form input element corresponds to the user's global email subscribed state. The user's selection state should be "opted_in", "subscribed", or "unsubscribed" when the form is submitted with selection data for the global email subscribed state. If it's a checkbox, the user will either be "opted_in" or "unsubscribed". For a hidden input, the "subscribed" state will also be valid. |
     * | `{% form_field_name :subscription_group %}` | Indicates that a specific form input element corresponds to a given subscription group. The user's selection state should be either "subscribed" or "unsubscribed" when the form is submitted with selection data for a specific subscription group. |
     * | `{{preference_center_submit_url}}` | Generates URL for form submission. |
     *
     * ## Example response
     *
     * ```
     * {
     * "preference_center_api_id": "preference_center_api_id_example",
     * "liquid_tag": "{{preference_center.${MyPreferenceCenter2022-09-22}}}",
     * "created_at": "2022-09-22T18:28:07+00:00",
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
    public function __construct(?\Braze\Model\PreferenceCenterV1PostBody $requestBody = null, array $headerParameters = [])
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
        return '/preference_center/v1';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Braze\Model\PreferenceCenterV1PostBody) {
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
     * @throws \Braze\Exception\PostPreferenceCenterV1BadRequestException
     * @throws \Braze\Exception\PostPreferenceCenterV1UnauthorizedException
     * @throws \Braze\Exception\PostPreferenceCenterV1ForbiddenException
     * @throws \Braze\Exception\PostPreferenceCenterV1NotFoundException
     * @throws \Braze\Exception\PostPreferenceCenterV1TooManyRequestsException
     * @throws \Braze\Exception\PostPreferenceCenterV1InternalServerErrorException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return json_decode($body);
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\PostPreferenceCenterV1BadRequestException($serializer->deserialize($body, 'Braze\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\PostPreferenceCenterV1UnauthorizedException($serializer->deserialize($body, 'Braze\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\PostPreferenceCenterV1ForbiddenException($serializer->deserialize($body, 'Braze\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\PostPreferenceCenterV1NotFoundException($serializer->deserialize($body, 'Braze\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\PostPreferenceCenterV1TooManyRequestsException($serializer->deserialize($body, 'Braze\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\PostPreferenceCenterV1InternalServerErrorException($serializer->deserialize($body, 'Braze\Model\Error', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['BearerAuth'];
    }
}
