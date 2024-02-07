<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Braze\Endpoint;

class PostUsersIdentify extends \Braze\Runtime\Client\BaseEndpoint implements \Braze\Runtime\Client\Endpoint
{
    use \Braze\Runtime\Client\EndpointTrait;

    /**
     * > Use this endpoint to identify an unidentified (alias-only) user.
     *
     * To use this endpoint, you’ll need to generate an API key with the `users.identify` permission.
     *
     * Calling `/users/identify` combines the alias-only profile with the identified profile and removes the alias-only profile.
     *
     * Identifying a user requires an `external_id` to be included in the `aliases_to_identify` object. If there is no user with that `external_id`, the `external_id` will simply be added to the aliased user's record, and the user will be considered identified. You can add up to 50 user aliases per request.
     *
     * Subsequently, you can associate multiple additional user aliases with a single `external_id`.
     *
     * - When these subsequent associations are made with the `merge_behavior` field set to `none`, only the push tokens and message history associated with the user alias are retained; any attributes, events, or purchases will be "orphaned" and not available on the identified user. One workaround is to export the aliased user's data before identification using the [`/users/export/ids` endpoint](https://www.braze.com/docs/api/endpoints/export/user_data/post_users_identifier/), then re-associate the attributes, events, and purchases with the identified user.
     * - When associations are made with the `merge_behavior` field set to `merge`, this endpoint will merge [specific fields](#merge) found on the anonymous user to the identified user.
     *
     *
     * > Note: To prevent unexpected loss of data when identifying users, we highly recommend that you first refer to [data collection best practices](https://www.braze.com/docs/user_guide/data_and_analytics/user_data_collection/best_practices/#capturing-user-data-when-alias-only-user-info-is-already-present) to learn about capturing user data when alias-only user info is already present.
     *
     *
     * ### Rate limit
     *
     * For customers who onboarded with Braze on or after September 16, 2021, we apply a shared rate limit of 20,000 requests per minute to this endpoint. This rate limit is shared with the `/users/delete` and `/users/alias/new` endpoints, as documented in [API rate limits](https://www.braze.com/docs/api/api_limits/).
     *
     * ### Parameters
     *
     * | Parameter | Required | Data Type | Description |
     * | --- | --- | --- | --- |
     * | `aliases_to_identify` | Required | Array of aliases to identify object | See [alias to identify object](https://www.braze.com/docs/api/objects_filters/aliases_to_identify/) and [user alias object](https://www.braze.com/docs/api/objects_filters/user_alias_object/). |
     * | `merge_behavior` | Optional | String | One of `none` or `merge` is expected. |
     *
     * #### Merge_behavior field
     *
     * Setting the `merge_behavior` field to `merge` sets the endpoint to merge any of the following fields found **exclusively** on the anonymous user to the identified user.
     *
     * - First name
     * - Last name
     * - Email
     * - Gender
     * - Date of birth
     * - Phone number
     * - Time zone
     * - Home city
     * - Country
     * - Language
     * - Session count (the sum of sessions from both profiles)
     * - Date of first session (Braze will pick the earlier date of the two dates)
     * - Date of last session (Braze will pick the later date of the two dates)
     * - Custom attributes
     * - Custom event and purchase event data (excluding event properties)
     * - Custom event and purchase event properties for "X times in Y days" segmentation (where X<=50 and Y<=30)
     * - Segmentable custom events summary
     * - Event count (the sum from both profiles)
     * - Event first occurred (Braze will pick the earlier date of the two dates)
     * - Event last occurred (Braze will pick the later date of the two dates)
     * - In-app purchase total in cents (the sum from both profiles)
     * - Total number of purchases (the sum from both profiles)
     * - Date of first purchase (Braze will pick the earlier date of the two dates)
     * - Date of last purchase (Braze will pick the later date of the two dates)
     * - App summaries
     * - Last_X_at fields (Braze will update the fields if the orphaned profile fields are more recent)
     * - Campaign summaries (Braze will pick the most recent date fields)
     * - Workflow summaries (Braze will pick the most recent date fields)
     * - Message and message engagement history
     *
     *
     * Any of the following fields found on the anonymous user to the identified user:
     *
     * - Custom event and purchase event count and first date and last date timestamps
     * - These merged fields will update "for X events in Y days" filters. For purchase events, these filters include "number of purchases in Y days" and "money spent in last Y days".
     *
     * Session data will only be merged if the app exists on both user profiles. For example, if our target user doesn't have an app summary for "ABCApp" but our original user does, the target user will have the "ABCApp" app summary on their profile after the merge.
     *
     * Setting the field to `none` will not merge any user data to the identified user profile.
     *
     * ### Aliases to Identify object specification
     *
     * ``` json
     * {
     * "external_id" : (required, string) see External User ID below,
     * // external_ids for users that do not exist will return a non-fatal error.
     * // See Server Responses for details.
     * "user_alias" : {
     * "alias_name" : (required, string),
     * "alias_label" : (required, string)
     * }
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
    public function __construct(?\Braze\Model\UsersIdentifyPostBody $requestBody = null, array $headerParameters = [])
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
        return '/users/identify';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Braze\Model\UsersIdentifyPostBody) {
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
     * @throws \Braze\Exception\PostUsersIdentifyBadRequestException
     * @throws \Braze\Exception\PostUsersIdentifyUnauthorizedException
     * @throws \Braze\Exception\PostUsersIdentifyForbiddenException
     * @throws \Braze\Exception\PostUsersIdentifyNotFoundException
     * @throws \Braze\Exception\PostUsersIdentifyTooManyRequestsException
     * @throws \Braze\Exception\PostUsersIdentifyInternalServerErrorException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return json_decode($body);
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\PostUsersIdentifyBadRequestException($serializer->deserialize($body, 'Braze\\Model\\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\PostUsersIdentifyUnauthorizedException($serializer->deserialize($body, 'Braze\\Model\\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\PostUsersIdentifyForbiddenException($serializer->deserialize($body, 'Braze\\Model\\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\PostUsersIdentifyNotFoundException($serializer->deserialize($body, 'Braze\\Model\\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\PostUsersIdentifyTooManyRequestsException($serializer->deserialize($body, 'Braze\\Model\\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\PostUsersIdentifyInternalServerErrorException($serializer->deserialize($body, 'Braze\\Model\\Error', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['BearerAuth'];
    }
}
