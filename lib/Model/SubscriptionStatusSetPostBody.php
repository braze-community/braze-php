<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Braze\Model;

class SubscriptionStatusSetPostBody extends \ArrayObject
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
    protected $subscriptionState;
    /**
     * @var string
     */
    protected $externalId;
    /**
     * @var string[]
     */
    protected $phone;

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

    public function getSubscriptionState(): string
    {
        return $this->subscriptionState;
    }

    public function setSubscriptionState(string $subscriptionState): self
    {
        $this->initialized['subscriptionState'] = true;
        $this->subscriptionState = $subscriptionState;

        return $this;
    }

    public function getExternalId(): string
    {
        return $this->externalId;
    }

    public function setExternalId(string $externalId): self
    {
        $this->initialized['externalId'] = true;
        $this->externalId = $externalId;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getPhone(): array
    {
        return $this->phone;
    }

    /**
     * @param string[] $phone
     */
    public function setPhone(array $phone): self
    {
        $this->initialized['phone'] = true;
        $this->phone = $phone;

        return $this;
    }
}
