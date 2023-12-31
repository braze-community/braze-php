<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Braze\Model;

class MessagesScheduleCreatePostBodyMessages extends \ArrayObject
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
     * @var array<string, mixed>
     */
    protected $applePush;
    /**
     * @var array<string, mixed>
     */
    protected $androidPush;
    /**
     * @var array<string, mixed>
     */
    protected $windowsPush;
    /**
     * @var array<string, mixed>
     */
    protected $windows8Push;
    /**
     * @var array<string, mixed>
     */
    protected $kindlePush;
    /**
     * @var array<string, mixed>
     */
    protected $webPush;
    /**
     * @var array<string, mixed>
     */
    protected $email;
    /**
     * @var array<string, mixed>
     */
    protected $webhook;
    /**
     * @var array<string, mixed>
     */
    protected $contentCard;

    /**
     * @return array<string, mixed>
     */
    public function getApplePush(): iterable
    {
        return $this->applePush;
    }

    /**
     * @param array<string, mixed> $applePush
     */
    public function setApplePush(iterable $applePush): self
    {
        $this->initialized['applePush'] = true;
        $this->applePush = $applePush;

        return $this;
    }

    /**
     * @return array<string, mixed>
     */
    public function getAndroidPush(): iterable
    {
        return $this->androidPush;
    }

    /**
     * @param array<string, mixed> $androidPush
     */
    public function setAndroidPush(iterable $androidPush): self
    {
        $this->initialized['androidPush'] = true;
        $this->androidPush = $androidPush;

        return $this;
    }

    /**
     * @return array<string, mixed>
     */
    public function getWindowsPush(): iterable
    {
        return $this->windowsPush;
    }

    /**
     * @param array<string, mixed> $windowsPush
     */
    public function setWindowsPush(iterable $windowsPush): self
    {
        $this->initialized['windowsPush'] = true;
        $this->windowsPush = $windowsPush;

        return $this;
    }

    /**
     * @return array<string, mixed>
     */
    public function getWindows8Push(): iterable
    {
        return $this->windows8Push;
    }

    /**
     * @param array<string, mixed> $windows8Push
     */
    public function setWindows8Push(iterable $windows8Push): self
    {
        $this->initialized['windows8Push'] = true;
        $this->windows8Push = $windows8Push;

        return $this;
    }

    /**
     * @return array<string, mixed>
     */
    public function getKindlePush(): iterable
    {
        return $this->kindlePush;
    }

    /**
     * @param array<string, mixed> $kindlePush
     */
    public function setKindlePush(iterable $kindlePush): self
    {
        $this->initialized['kindlePush'] = true;
        $this->kindlePush = $kindlePush;

        return $this;
    }

    /**
     * @return array<string, mixed>
     */
    public function getWebPush(): iterable
    {
        return $this->webPush;
    }

    /**
     * @param array<string, mixed> $webPush
     */
    public function setWebPush(iterable $webPush): self
    {
        $this->initialized['webPush'] = true;
        $this->webPush = $webPush;

        return $this;
    }

    /**
     * @return array<string, mixed>
     */
    public function getEmail(): iterable
    {
        return $this->email;
    }

    /**
     * @param array<string, mixed> $email
     */
    public function setEmail(iterable $email): self
    {
        $this->initialized['email'] = true;
        $this->email = $email;

        return $this;
    }

    /**
     * @return array<string, mixed>
     */
    public function getWebhook(): iterable
    {
        return $this->webhook;
    }

    /**
     * @param array<string, mixed> $webhook
     */
    public function setWebhook(iterable $webhook): self
    {
        $this->initialized['webhook'] = true;
        $this->webhook = $webhook;

        return $this;
    }

    /**
     * @return array<string, mixed>
     */
    public function getContentCard(): iterable
    {
        return $this->contentCard;
    }

    /**
     * @param array<string, mixed> $contentCard
     */
    public function setContentCard(iterable $contentCard): self
    {
        $this->initialized['contentCard'] = true;
        $this->contentCard = $contentCard;

        return $this;
    }
}
