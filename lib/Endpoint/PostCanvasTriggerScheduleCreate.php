<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Braze\Endpoint;

class PostCanvasTriggerScheduleCreate extends \Braze\Runtime\Client\BaseEndpoint implements \Braze\Runtime\Client\Endpoint
{
    use \Braze\Runtime\Client\EndpointTrait;

    /**
     * > Use this endpoint to schedule Canvas messages via API-triggered delivery, allowing you to decide what action should trigger the message to be sent.
     *
     * You can pass in `canvas_entry_properties` that will be templated into the messages sent by the first steps of the Canvas.
     *
     * Note that to send messages with this endpoint, you must have a [Canvas ID](https://www.braze.com/docs/api/identifier_types/#canvas-api-identifier) created when you build a Canvas.
     *
     * ### Prerequisites
     *
     * To use this endpoint, you’ll need an API key with the `canvas.trigger.schedule.create` permission.
     *
     * ### Rate limit
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
     * ### Request parameters
     *
     * | Parameter | Required | Data Type | Description |
     * | --- | --- | --- | --- |
     * | `canvas_id` | Required | String | See [Canvas identifier](https://www.braze.com/docs/api/identifier_types/). |
     * | `send_id` | Optional | String | See [send identifier](https://www.braze.com/docs/api/identifier_types/). |
     * | `recipients` | Optional | Array of recipient objects | See [recipients object](https://www.braze.com/docs/api/objects_filters/recipient_object/). |
     * | `audience` | Optional | Connected audience object | See [connected audience](https://www.braze.com/docs/api/objects_filters/connected_audience/). |
     * | `broadcast` | Optional | Boolean | See [broadcast](https://www.braze.com/docs/api/parameters/#broadcast). This parameter defaults to false (as of August 31, 2017).  <br>  <br>If `recipients` is omitted, `broadcast` must be set to true. However, use caution when setting `broadcast: true`, as unintentionally setting this flag may cause you to send your message to a larger than expected audience. |
     * | `trigger_properties` | Optional | Object | Personalization key-value pairs for all users in this send. See [trigger properties](https://www.braze.com/docs/api/objects_filters/trigger_properties_object/). |
     * | `schedule` | Required | Schedule object | See [schedule object](https://www.braze.com/docs/api/objects_filters/schedule_object/). |
     *
     * @param array $headerParameters {
     *
     * @var string $Content-Type
     * @var string $Authorization
     *             }
     */
    public function __construct(?\Braze\Model\CanvasTriggerScheduleCreatePostBody $requestBody = null, array $headerParameters = [])
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
        return '/canvas/trigger/schedule/create';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Braze\Model\CanvasTriggerScheduleCreatePostBody) {
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
     * @throws \Braze\Exception\PostCanvasTriggerScheduleCreateBadRequestException
     * @throws \Braze\Exception\PostCanvasTriggerScheduleCreateUnauthorizedException
     * @throws \Braze\Exception\PostCanvasTriggerScheduleCreateForbiddenException
     * @throws \Braze\Exception\PostCanvasTriggerScheduleCreateNotFoundException
     * @throws \Braze\Exception\PostCanvasTriggerScheduleCreateTooManyRequestsException
     * @throws \Braze\Exception\PostCanvasTriggerScheduleCreateInternalServerErrorException
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
            throw new \Braze\Exception\PostCanvasTriggerScheduleCreateBadRequestException($serializer->deserialize($body, 'Braze\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\PostCanvasTriggerScheduleCreateUnauthorizedException($serializer->deserialize($body, 'Braze\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\PostCanvasTriggerScheduleCreateForbiddenException($serializer->deserialize($body, 'Braze\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\PostCanvasTriggerScheduleCreateNotFoundException($serializer->deserialize($body, 'Braze\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\PostCanvasTriggerScheduleCreateTooManyRequestsException($serializer->deserialize($body, 'Braze\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\PostCanvasTriggerScheduleCreateInternalServerErrorException($serializer->deserialize($body, 'Braze\Model\Error', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['BearerAuth'];
    }
}
