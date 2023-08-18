<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Braze\Model;

class TransactionalV1CampaignsCampaignIdSendPostBody extends \ArrayObject
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
    protected $externalSendId;
    /**
     * @var TransactionalV1CampaignsCampaignIdSendPostBodyTriggerProperties
     */
    protected $triggerProperties;
    /**
     * @var TransactionalV1CampaignsCampaignIdSendPostBodyRecipientItem[]
     */
    protected $recipient;

    public function getExternalSendId(): string
    {
        return $this->externalSendId;
    }

    public function setExternalSendId(string $externalSendId): self
    {
        $this->initialized['externalSendId'] = true;
        $this->externalSendId = $externalSendId;

        return $this;
    }

    public function getTriggerProperties(): TransactionalV1CampaignsCampaignIdSendPostBodyTriggerProperties
    {
        return $this->triggerProperties;
    }

    public function setTriggerProperties(TransactionalV1CampaignsCampaignIdSendPostBodyTriggerProperties $triggerProperties): self
    {
        $this->initialized['triggerProperties'] = true;
        $this->triggerProperties = $triggerProperties;

        return $this;
    }

    /**
     * @return TransactionalV1CampaignsCampaignIdSendPostBodyRecipientItem[]
     */
    public function getRecipient(): array
    {
        return $this->recipient;
    }

    /**
     * @param TransactionalV1CampaignsCampaignIdSendPostBodyRecipientItem[] $recipient
     */
    public function setRecipient(array $recipient): self
    {
        $this->initialized['recipient'] = true;
        $this->recipient = $recipient;

        return $this;
    }
}
