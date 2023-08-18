<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Braze\Model;

class MessagesScheduleUpdatePostBodyMessagesSms extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var string
     */
    protected $subscriptionGroupId;
    /**
     * @var string
     */
    protected $messageVariationId;
    /**
     * @var string
     */
    protected $body;
    /**
     * @var string
     */
    protected $appId;

    public function getSubscriptionGroupId(): string
    {
        return $this->subscriptionGroupId;
    }

    public function setSubscriptionGroupId(string $subscriptionGroupId): self
    {
        $this->initialized['subscriptionGroupId'] = true;
        $this->subscriptionGroupId = $subscriptionGroupId;

        return $this;
    }

    public function getMessageVariationId(): string
    {
        return $this->messageVariationId;
    }

    public function setMessageVariationId(string $messageVariationId): self
    {
        $this->initialized['messageVariationId'] = true;
        $this->messageVariationId = $messageVariationId;

        return $this;
    }

    public function getBody(): string
    {
        return $this->body;
    }

    public function setBody(string $body): self
    {
        $this->initialized['body'] = true;
        $this->body = $body;

        return $this;
    }

    public function getAppId(): string
    {
        return $this->appId;
    }

    public function setAppId(string $appId): self
    {
        $this->initialized['appId'] = true;
        $this->appId = $appId;

        return $this;
    }
}
