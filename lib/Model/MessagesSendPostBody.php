<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Braze\Model;

class MessagesSendPostBody extends \ArrayObject
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
    protected $broadcast;
    /**
     * @var string
     */
    protected $externalUserIds;
    /**
     * @var MessagesSendPostBodyUserAliases
     */
    protected $userAliases;
    /**
     * @var string
     */
    protected $segmentId;
    /**
     * @var MessagesSendPostBodyAudience
     */
    protected $audience;
    /**
     * @var string
     */
    protected $campaignId;
    /**
     * @var string
     */
    protected $sendId;
    /**
     * @var string
     */
    protected $overrideFrequencyCapping;
    /**
     * @var string
     */
    protected $recipientSubscriptionState;
    /**
     * @var MessagesSendPostBodyMessages
     */
    protected $messages;

    public function getBroadcast(): string
    {
        return $this->broadcast;
    }

    public function setBroadcast(string $broadcast): self
    {
        $this->initialized['broadcast'] = true;
        $this->broadcast = $broadcast;

        return $this;
    }

    public function getExternalUserIds(): string
    {
        return $this->externalUserIds;
    }

    public function setExternalUserIds(string $externalUserIds): self
    {
        $this->initialized['externalUserIds'] = true;
        $this->externalUserIds = $externalUserIds;

        return $this;
    }

    public function getUserAliases(): MessagesSendPostBodyUserAliases
    {
        return $this->userAliases;
    }

    public function setUserAliases(MessagesSendPostBodyUserAliases $userAliases): self
    {
        $this->initialized['userAliases'] = true;
        $this->userAliases = $userAliases;

        return $this;
    }

    public function getSegmentId(): string
    {
        return $this->segmentId;
    }

    public function setSegmentId(string $segmentId): self
    {
        $this->initialized['segmentId'] = true;
        $this->segmentId = $segmentId;

        return $this;
    }

    public function getAudience(): MessagesSendPostBodyAudience
    {
        return $this->audience;
    }

    public function setAudience(MessagesSendPostBodyAudience $audience): self
    {
        $this->initialized['audience'] = true;
        $this->audience = $audience;

        return $this;
    }

    public function getCampaignId(): string
    {
        return $this->campaignId;
    }

    public function setCampaignId(string $campaignId): self
    {
        $this->initialized['campaignId'] = true;
        $this->campaignId = $campaignId;

        return $this;
    }

    public function getSendId(): string
    {
        return $this->sendId;
    }

    public function setSendId(string $sendId): self
    {
        $this->initialized['sendId'] = true;
        $this->sendId = $sendId;

        return $this;
    }

    public function getOverrideFrequencyCapping(): string
    {
        return $this->overrideFrequencyCapping;
    }

    public function setOverrideFrequencyCapping(string $overrideFrequencyCapping): self
    {
        $this->initialized['overrideFrequencyCapping'] = true;
        $this->overrideFrequencyCapping = $overrideFrequencyCapping;

        return $this;
    }

    public function getRecipientSubscriptionState(): string
    {
        return $this->recipientSubscriptionState;
    }

    public function setRecipientSubscriptionState(string $recipientSubscriptionState): self
    {
        $this->initialized['recipientSubscriptionState'] = true;
        $this->recipientSubscriptionState = $recipientSubscriptionState;

        return $this;
    }

    public function getMessages(): MessagesSendPostBodyMessages
    {
        return $this->messages;
    }

    public function setMessages(MessagesSendPostBodyMessages $messages): self
    {
        $this->initialized['messages'] = true;
        $this->messages = $messages;

        return $this;
    }
}