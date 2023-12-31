<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Braze\Model;

class CampaignsTriggerScheduleUpdatePostBodySchedule extends \ArrayObject
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
     * @var \DateTime
     */
    protected $time;
    /**
     * @var bool
     */
    protected $inLocalTime;

    public function getTime(): \DateTime
    {
        return $this->time;
    }

    public function setTime(\DateTime $time): self
    {
        $this->initialized['time'] = true;
        $this->time = $time;

        return $this;
    }

    public function getInLocalTime(): bool
    {
        return $this->inLocalTime;
    }

    public function setInLocalTime(bool $inLocalTime): self
    {
        $this->initialized['inLocalTime'] = true;
        $this->inLocalTime = $inLocalTime;

        return $this;
    }
}
