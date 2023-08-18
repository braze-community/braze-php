<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Braze\Model;

class TransactionalV1CampaignsCampaignIdSendPostBodyRecipientItem extends \ArrayObject
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
    protected $externalUserId;

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
}
