<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Braze\Endpoint;

class PostMessagesScheduleCreate extends \Braze\Runtime\Client\BaseEndpoint implements \Braze\Runtime\Client\Endpoint
{
    use \Braze\Runtime\Client\EndpointTrait;

    /**
     * > Use this endpoint to schedule a campaign, Canvas, or other message to be sent at a designated time and provides you with an identifier to reference that message for updates.
     *
     * If you are targeting a segment, a record of your request will be stored in the [Developer Console](https://dashboard.braze.com/app_settings/developer_console/activitylog/) after all scheduled messages have been sent.
     *
     * ## Prerequisites
     *
     * To use this endpoint, you’ll need an API key with the `messages.schedule.create` permission.
     *
     * ## Rate limit
     *
     * We apply the default Braze rate limit of 250,000 requests per hour to this endpoint, as documented in [API rate limits](https://www.braze.com/docs/api/api_limits/).
     *
     * Braze endpoints support [batching API requests](https://www.braze.com/docs/api/api_limits/#batching-api-requests). A single request to the messaging endpoints can reach any of the following:
     *
     * - Up to 50 specific external_ids, each with individual message parameters
     * - A segment of any size created in the Braze dashboard, specified by its `segment_id`
     * - An ad-hoc audience segment of any size, defined in the request as a [Connected Audience](https://www.braze.com/docs/api/objects_filters/connected_audience/) object
     *
     *
     * ## Request parameters
     *
     * | Parameter | Required | Data Type | Description |
     * | --- | --- | --- | --- |
     * | `broadcast` | Optional | Boolean | See [broadcast](https://www.braze.com/docs/api/parameters/#broadcast). This parameter defaults to false (as of August 31, 2017).  <br>  <br>If `recipients` is omitted, `broadcast` must be set to true. However, use caution when setting `broadcast: true`, as unintentionally setting this flag may cause you to send your message to a larger than expected audience. |
     * | `external_user_ids` | Optional | Array of strings | See [external user identifier](https://www.braze.com/docs/api/parameters/#external-user-id). |
     * | `user_aliases` | Optional | Array of user alias objects | See [user alias object](https://www.braze.com/docs/api/objects_filters/user_alias_object/). |
     * | `audience` | Optional | Connected audience object | See [connected audience](https://www.braze.com/docs/api/objects_filters/connected_audience/). |
     * | `segment_id` | Optional | String | See [segment identifier](https://www.braze.com/docs/api/identifier_types/). |
     * | `campaign_id` | Required | String | See [campaign identifier](https://www.braze.com/docs/api/identifier_types/). |
     * | `recipients` | Optional | Array of recipients objects | See [recipients object](https://www.braze.com/docs/api/objects_filters/recipient_object/). |
     * | `send_id` | Optional | String | See [send identifier](https://www.braze.com/docs/api/identifier_types/). |
     * | `override_messaging_limits` | Optional | Boolean | Ignore global rate limits for campaigns, defaults to false |
     * | `recipient_subscription_state` | Optional | String | Use this to send messages to only users who have opted in (`opted_in`), only users who have subscribed or are opted in (`subscribed`) or to all users, including unsubscribed users (`all`).  <br>  <br>Using `all` users is useful for transactional email messaging. Defaults to `subscribed`. |
     * | `schedule` | Required | Schedule object | See [schedule object](https://www.braze.com/docs/api/objects_filters/schedule_object/) |
     * | `messages` | Optional | Messaging object | See available [messaging objects](https://www.braze.com/docs/api/objects_filters/#messaging-objects). |
     *
     * ## Response
     *
     * ### Example success response
     *
     * ``` json
     * {
     * "dispatch_id": (string) the dispatch identifier,
     * "schedule_id": (string) the schedule identifier,
     * "message": "success"
     * }
     *
     * ```
     */
    public function __construct(?\Braze\Model\MessagesScheduleCreatePostBody $requestBody = null)
    {
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/messages/schedule/create';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Braze\Model\MessagesScheduleCreatePostBody) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }

        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * @return null
     *
     * @throws \Braze\Exception\PostMessagesScheduleCreateBadRequestException
     * @throws \Braze\Exception\PostMessagesScheduleCreateUnauthorizedException
     * @throws \Braze\Exception\PostMessagesScheduleCreateForbiddenException
     * @throws \Braze\Exception\PostMessagesScheduleCreateNotFoundException
     * @throws \Braze\Exception\PostMessagesScheduleCreateTooManyRequestsException
     * @throws \Braze\Exception\PostMessagesScheduleCreateInternalServerErrorException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return json_decode($body);
        }
        if (is_null($contentType) === false && (201 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return json_decode($body);
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\PostMessagesScheduleCreateBadRequestException($serializer->deserialize($body, 'Braze\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\PostMessagesScheduleCreateUnauthorizedException($serializer->deserialize($body, 'Braze\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\PostMessagesScheduleCreateForbiddenException($serializer->deserialize($body, 'Braze\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\PostMessagesScheduleCreateNotFoundException($serializer->deserialize($body, 'Braze\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\PostMessagesScheduleCreateTooManyRequestsException($serializer->deserialize($body, 'Braze\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\PostMessagesScheduleCreateInternalServerErrorException($serializer->deserialize($body, 'Braze\Model\Error', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['BearerAuth'];
    }
}
