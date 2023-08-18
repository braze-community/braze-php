<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Braze\Model;

class CanvasTriggerSendPostBodyRecipientsItem extends \ArrayObject
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
     * @var CanvasTriggerSendPostBodyRecipientsItemUserAlias
     */
    protected $userAlias;
    /**
     * @var string
     */
    protected $externalUserId;
    /**
     * @var string
     */
    protected $triggerProperties;
    /**
     * @var string
     */
    protected $canvasEntryProperties;
    /**
     * @var bool
     */
    protected $sendToExistingOnly;
    /**
     * @var CanvasTriggerSendPostBodyRecipientsItemAttributes
     */
    protected $attributes;

    public function getUserAlias(): CanvasTriggerSendPostBodyRecipientsItemUserAlias
    {
        return $this->userAlias;
    }

    public function setUserAlias(CanvasTriggerSendPostBodyRecipientsItemUserAlias $userAlias): self
    {
        $this->initialized['userAlias'] = true;
        $this->userAlias = $userAlias;

        return $this;
    }

    public function getExternalUserId(): string
    {
        return $this->externalUserId;
    }

    public function setExternalUserId(string $externalUserId): self
    {
        $this->initialized['externalUserId'] = true;
        $this->externalUserId = $externalUserId;

        return $this;
    }

    public function getTriggerProperties(): string
    {
        return $this->triggerProperties;
    }

    public function setTriggerProperties(string $triggerProperties): self
    {
        $this->initialized['triggerProperties'] = true;
        $this->triggerProperties = $triggerProperties;

        return $this;
    }

    public function getCanvasEntryProperties(): string
    {
        return $this->canvasEntryProperties;
    }

    public function setCanvasEntryProperties(string $canvasEntryProperties): self
    {
        $this->initialized['canvasEntryProperties'] = true;
        $this->canvasEntryProperties = $canvasEntryProperties;

        return $this;
    }

    public function getSendToExistingOnly(): bool
    {
        return $this->sendToExistingOnly;
    }

    public function setSendToExistingOnly(bool $sendToExistingOnly): self
    {
        $this->initialized['sendToExistingOnly'] = true;
        $this->sendToExistingOnly = $sendToExistingOnly;

        return $this;
    }

    public function getAttributes(): CanvasTriggerSendPostBodyRecipientsItemAttributes
    {
        return $this->attributes;
    }

    public function setAttributes(CanvasTriggerSendPostBodyRecipientsItemAttributes $attributes): self
    {
        $this->initialized['attributes'] = true;
        $this->attributes = $attributes;

        return $this;
    }
}
