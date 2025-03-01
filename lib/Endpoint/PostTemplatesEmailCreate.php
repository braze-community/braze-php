<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Braze\Endpoint;

class PostTemplatesEmailCreate extends \Braze\Runtime\Client\BaseEndpoint implements \Braze\Runtime\Client\Endpoint
{
    use \Braze\Runtime\Client\EndpointTrait;

    /**
     * > Use this endpoint to create email templates on the Braze dashboard.
     *
     * To use this endpoint, you’ll need to generate an API key with the `templates.email.create` permission.
     *
     * These templates will be available on the **Templates & Media** page. The response from this endpoint will include a field for `email_template_id`, which can be used to update the template in subsequent API calls.
     *
     * Users’ email subscription status can be updated and retrieved via Braze using a RESTful API. You can use the API to set up bi-directional sync between Braze and other email systems or your own database. All API requests are made over HTTPS.
     *
     * ### Rate limit
     *
     * We apply the default Braze rate limit of 250,000 requests per hour to this endpoint, as documented in [API rate limits](https://www.braze.com/docs/api/api_limits/).
     *
     * ### Request parameters
     *
     * | Parameter | Required | Data Type | Description |
     * | --- | --- | --- | --- |
     * | `template_name` | Required | String | Name of your email template. |
     * | `subject` | Required | String | Email template subject line. |
     * | `body` | Required | String | Email template body that may include HTML. |
     * | `plaintext_body` | Optional | String | A plaintext version of the email template body. |
     * | `preheader` | Optional | String | Email preheader used to generate previews in some clients. |
     * | `tags` | Optional | String | [Tags](https://www.braze.com/docs/user_guide/administrative/app_settings/manage_app_group/tags/) must already exist. |
     * | `should_inline_css` | Optional | Boolean | Enables or disables the `inline_css` feature per template. If not provided, Braze will use the default setting for the app group. One of `true` or `false` is expected. |
     *
     * ### Possible errors
     *
     * The following table lists possible returned errors and their associated troubleshooting steps, if applicable.
     *
     * | Error | Troubleshooting |
     * | --- | --- |
     * | Template name is required | Enter a template name. |
     * | Tags must be an array | Tags must be formatted as an array of strings, for example `["marketing", "promotional", "transactional"]`. |
     * | All tags must be strings | Make sure your tags are encapsulated in quotes (`""`). |
     * | Some tags could not be found | To add a tag when creating an email template, the tag must already exist in Braze. |
     * | Email must have valid Content Block names | The email contains Content Blocks that don't exist in this environment. |
     * | Invalid value for `should_inline_css`. One of `true` or `false` was expected | This parameter only accepts boolean values (true or false). Make sure the value for `should_inline_css` is not encapsulated in quotes (`""`), which causes the value to be sent as a string instead. |
     *
     * @param array $headerParameters {
     *
     * @var string $Content-Type
     * @var string $Authorization
     *             }
     */
    public function __construct(?\Braze\Model\TemplatesEmailCreatePostBody $requestBody = null, array $headerParameters = [])
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
        return '/templates/email/create';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Braze\Model\TemplatesEmailCreatePostBody) {
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
     * @throws \Braze\Exception\PostTemplatesEmailCreateBadRequestException
     * @throws \Braze\Exception\PostTemplatesEmailCreateUnauthorizedException
     * @throws \Braze\Exception\PostTemplatesEmailCreateForbiddenException
     * @throws \Braze\Exception\PostTemplatesEmailCreateNotFoundException
     * @throws \Braze\Exception\PostTemplatesEmailCreateTooManyRequestsException
     * @throws \Braze\Exception\PostTemplatesEmailCreateInternalServerErrorException
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
            throw new \Braze\Exception\PostTemplatesEmailCreateBadRequestException($serializer->deserialize($body, 'Braze\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\PostTemplatesEmailCreateUnauthorizedException($serializer->deserialize($body, 'Braze\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\PostTemplatesEmailCreateForbiddenException($serializer->deserialize($body, 'Braze\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\PostTemplatesEmailCreateNotFoundException($serializer->deserialize($body, 'Braze\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\PostTemplatesEmailCreateTooManyRequestsException($serializer->deserialize($body, 'Braze\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Braze\Exception\PostTemplatesEmailCreateInternalServerErrorException($serializer->deserialize($body, 'Braze\Model\Error', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['BearerAuth'];
    }
}
