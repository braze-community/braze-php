<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Braze\Endpoint;

class PostCampaignsTriggerSend extends \Braze\Runtime\Client\BaseEndpoint implements \Braze\Runtime\Client\Endpoint
{
    use \Braze\Runtime\Client\EndpointTrait;

    /**
     * > Use this endpoint to send immediate, ad-hoc messages to designated users via API-triggered delivery.
     *
     * To use this endpoint, you’ll need to generate an API key with the `campaigns.trigger.send` permission.
     *
     * API-triggered delivery allows you to house message content inside of the Braze dashboard while dictating when a message is sent, and to whom via your API.
     *
     * If you are targeting a segment, a record of your request will be stored in the [Developer Console](https://dashboard.braze.com/app_settings/developer_console/activitylog/). Note that to send messages with this endpoint, you must have a [campaign ID](https://www.braze.com/docs/api/identifier_types/) created when you build an [API-triggered campaign](https://www.braze.com/docs/api/api_campaigns/).
     *
     * ## Rate limit
     *
     * When specifying a segment or Connected Audience in your request, we apply a rate limit of 250 requests per minute to this endpoint. Otherwise, if specifying an `external_id`, this endpoint has a default rate limit of 250,000 requests per hour, as documented in [API rate limits](https://www.braze.com/docs/api/api_limits/).
     *
     * Braze endpoints support [batching API requests](https://www.braze.com/docs/api/api_limits/#batching-api-requests). A single request to the messaging endpoints can reach any of the following:
     *
     * - Up to 50 specific `external_ids`, each with individual message parameters
     * - A segment of any size created in the Braze dashboard, specified by its `segment_id`
     * - An ad-hoc audience segment of any size, defined in the request as a [Connected Audience](https://www.braze.com/docs/api/objects_filters/connected_audience/) object
     *
     *
     * ## Request parameters
     *
     * | Parameter | Required | Data Type | Description |
     * | --- | --- | --- | --- |
     * | `campaign_id` | Required | String | See [campaign identifier](https://www.braze.com/docs/api/identifier_types/). |
     * | `send_id` | Optional | String | See [send identifier](https://www.braze.com/docs/api/identifier_types/). |
     * | `trigger_properties` | Optional | Object | See [trigger properties](https://www.braze.com/docs/api/objects_filters/trigger_properties_object/). Personalization key-value pairs that will apply to all users in this request. |
     * | `broadcast` | Optional | Boolean | See [broadcast](https://www.braze.com/docs/api/parameters/#broadcast). This parameter defaults to false (as of August 31, 2017).  <br>  <br>If `recipients` is omitted, `broadcast` must be set to true. However, use caution when setting `broadcast: true`, as unintentionally setting this flag may cause you to send your campaign to a larger than expected audience. |
     * | `audience` | Optional | Connected audience object | See [connected audience](https://www.braze.com/docs/api/objects_filters/connected_audience/). |
     * | `recipients` | Optional | Array | See [recipients object](https://www.braze.com/docs/api/objects_filters/recipient_object/). If not provided and `broadcast` is set to true, the message will send to the entire segment targeted by the campaign. |
     *
     * The recipients array may contain up to 50 objects, with each object containing a single `external_user_id` string and `trigger_properties` object.
     *
     * When `send_to_existing_only` is `true`, Braze will only send the message to existing users. When `send_to_existing_only` is `false` and a user with the given `id` does not exist, Braze will create a user with that id and attributes before sending the message.
     *
     * > Important: A user’s subscription group status can be updated via the inclusion of a subscription_groups parameter within the attributes object. This is currently in early access. Contact your Braze customer success manager if you’re interested in participating in the early access. More details can be found in the [User attributes object](https://www.braze.com/docs/api/objects_filters/user_attributes_object).
     *
     *
     * ## Response details
     *
     * Message sending endpoint responses will include the message’s `dispatch_id` for reference back to the dispatch of the message. The `dispatch_id` is the ID of the message dispatch, a unique ID for each transmission sent from the Braze platform. When using this endpoint, you receive a single `dispatch_id` for an entire batched set of users. For more information on `dispatch_id` check out out our documentation on [Dispatch ID Behavior](https://www.braze.com/docs/help/help_articles/data/dispatch_id/).
     *
     * ## Create send endpoint
     *
     **Using the attributes object in campaigns**
     *
     * Braze has a Messaging Object called `Attributes` that will allow you to add, create, or update attributes and values for a user before you send them an API-triggered campaigns using the `campaign/trigger/send` endpoint as this API call will process the User Attributes object before it processes and sends the campaign. This helps minimize the risk of there being issues caused by [race conditions](https://www.braze.com/docs/help/best_practices/race_conditions/).
     *
     * > **Important:** Looking for the Canvas version of this endpoint? Check out [Sending Canvas messages via API-triggered delivery](https://www.braze.com/docs/api/endpoints/messaging/send_messages/post_send_triggered_canvases/#create-send-endpoint).
     *
     * @param array $headerParameters {
     *
     * @var string $Content-Type
     * @var string $Authorization
     *             }
     */
    public function __construct(\Braze\Model\CampaignsTriggerSendPostBody $requestBody = null, array $headerParameters = [])
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
        return '/campaigns/trigger/send';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Braze\Model\CampaignsTriggerSendPostBody) {
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
     * @throws \Braze\Exception\PostCampaignsTriggerSendBadRequestException
     * @throws \Braze\Exception\PostCampaignsTriggerSendUnauthorizedException
     * @throws \Braze\Exception\PostCampaignsTriggerSendForbiddenException
     * @throws \Braze\Exception\PostCampaignsTriggerSendNotFoundException
     * @throws \Braze\Exception\PostCampaignsTriggerSendTooManyRequestsException
     * @throws \Braze\Exception\PostCampaignsTriggerSendInternalServerErrorException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return json_decode($body);
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\PostCampaignsTriggerSendBadRequestException($serializer->deserialize($body, 'Braze\\Model\\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\PostCampaignsTriggerSendUnauthorizedException($serializer->deserialize($body, 'Braze\\Model\\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\PostCampaignsTriggerSendForbiddenException($serializer->deserialize($body, 'Braze\\Model\\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\PostCampaignsTriggerSendNotFoundException($serializer->deserialize($body, 'Braze\\Model\\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\PostCampaignsTriggerSendTooManyRequestsException($serializer->deserialize($body, 'Braze\\Model\\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\PostCampaignsTriggerSendInternalServerErrorException($serializer->deserialize($body, 'Braze\\Model\\Error', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['BearerAuth'];
    }
}
