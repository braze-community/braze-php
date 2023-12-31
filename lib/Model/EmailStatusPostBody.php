<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Braze\Model;

class EmailStatusPostBody extends \ArrayObject
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
    protected $email;
    /**
     * @var string
     */
    protected $subscriptionState;

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->initialized['email'] = true;
        $this->email = $email;

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
}
