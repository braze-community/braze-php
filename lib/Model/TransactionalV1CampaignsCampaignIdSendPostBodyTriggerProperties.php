<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Braze\Model;

class TransactionalV1CampaignsCampaignIdSendPostBodyTriggerProperties extends \ArrayObject
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
    protected $exampleStringProperty;
    /**
     * @var string
     */
    protected $exampleIntegerProperty;

    public function getExampleStringProperty(): string
    {
        return $this->exampleStringProperty;
    }

    public function setExampleStringProperty(string $exampleStringProperty): self
    {
        $this->initialized['exampleStringProperty'] = true;
        $this->exampleStringProperty = $exampleStringProperty;

        return $this;
    }

    public function getExampleIntegerProperty(): string
    {
        return $this->exampleIntegerProperty;
    }

    public function setExampleIntegerProperty(string $exampleIntegerProperty): self
    {
        $this->initialized['exampleIntegerProperty'] = true;
        $this->exampleIntegerProperty = $exampleIntegerProperty;

        return $this;
    }
}
