<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Braze\Model;

class V2SubscriptionStatusSetPostBodySubscriptionGroupsItem extends \ArrayObject
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
     * @var string[]
     */
    protected $emails;

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

    /**
     * @return string[]
     */
    public function getEmails(): array
    {
        return $this->emails;
    }

    /**
     * @param string[] $emails
     */
    public function setEmails(array $emails): self
    {
        $this->initialized['emails'] = true;
        $this->emails = $emails;

        return $this;
    }
}