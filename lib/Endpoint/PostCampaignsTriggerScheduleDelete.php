<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Braze\Endpoint;

class PostCampaignsTriggerScheduleDelete extends \Braze\Runtime\Client\BaseEndpoint implements \Braze\Runtime\Client\Endpoint
{
    use \Braze\Runtime\Client\EndpointTrait;

    /**
     * > The delete schedule endpoint allows you to cancel a message that you previously scheduled API-triggered Canvases before it has been sent.
     *
     * To use this endpoint, you’ll need to generate an API key with the `campaigns.trigger.schedule.delete` permission.
     *
     * Scheduled messages or triggers that are deleted very close to or during the time they were supposed to be sent will be updated with best efforts, so last-second deletions could be applied to all, some, or none of your targeted users.
     *
     * ### Rate limit
     *
     * We apply the default Braze rate limit of 250,000 requests per hour to this endpoint, as documented in [API rate limits](https://www.braze.com/docs/api/api_limits/).
     *
     * ### Request parameters
     *
     * | Parameter | Required | Data Type | Description |
     * | --- | --- | --- | --- |
     * | `campaign_id` | Required | String | See [campaign identifier](https://www.braze.com/docs/api/identifier_types/). |
     * | `schedule_id` | Required | String | The `schedule_id` to delete (obtained from the response to create schedule). |
     *
     * @param array $headerParameters {
     *
     * @var string $Content-Type
     * @var string $Authorization
     *             }
     */
    public function __construct(?\Braze\Model\CampaignsTriggerScheduleDeletePostBody $requestBody = null, array $headerParameters = [])
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
        return '/campaigns/trigger/schedule/delete';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Braze\Model\CampaignsTriggerScheduleDeletePostBody) {
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
     * @throws \Braze\Exception\PostCampaignsTriggerScheduleDeleteBadRequestException
     * @throws \Braze\Exception\PostCampaignsTriggerScheduleDeleteUnauthorizedException
     * @throws \Braze\Exception\PostCampaignsTriggerScheduleDeleteForbiddenException
     * @throws \Braze\Exception\PostCampaignsTriggerScheduleDeleteNotFoundException
     * @throws \Braze\Exception\PostCampaignsTriggerScheduleDeleteTooManyRequestsException
     * @throws \Braze\Exception\PostCampaignsTriggerScheduleDeleteInternalServerErrorException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return json_decode($body);
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\PostCampaignsTriggerScheduleDeleteBadRequestException($serializer->deserialize($body, 'Braze\\Model\\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\PostCampaignsTriggerScheduleDeleteUnauthorizedException($serializer->deserialize($body, 'Braze\\Model\\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\PostCampaignsTriggerScheduleDeleteForbiddenException($serializer->deserialize($body, 'Braze\\Model\\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\PostCampaignsTriggerScheduleDeleteNotFoundException($serializer->deserialize($body, 'Braze\\Model\\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\PostCampaignsTriggerScheduleDeleteTooManyRequestsException($serializer->deserialize($body, 'Braze\\Model\\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\PostCampaignsTriggerScheduleDeleteInternalServerErrorException($serializer->deserialize($body, 'Braze\\Model\\Error', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['BearerAuth'];
    }
}
