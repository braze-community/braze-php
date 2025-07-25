<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Braze\Model;

class TemplatesEmailCreatePostBody extends \ArrayObject
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
    protected $templateName;
    /**
     * @var string
     */
    protected $subject;
    /**
     * @var string
     */
    protected $body;
    /**
     * @var string
     */
    protected $plaintextBody;
    /**
     * @var string
     */
    protected $preheader;
    /**
     * @var list<string>
     */
    protected $tags;
    /**
     * @var bool
     */
    protected $shouldInlineCss;

    public function getTemplateName(): string
    {
        return $this->templateName;
    }

    public function setTemplateName(string $templateName): self
    {
        $this->initialized['templateName'] = true;
        $this->templateName = $templateName;

        return $this;
    }

    public function getSubject(): string
    {
        return $this->subject;
    }

    public function setSubject(string $subject): self
    {
        $this->initialized['subject'] = true;
        $this->subject = $subject;

        return $this;
    }

    public function getBody(): string
    {
        return $this->body;
    }

    public function setBody(string $body): self
    {
        $this->initialized['body'] = true;
        $this->body = $body;

        return $this;
    }

    public function getPlaintextBody(): string
    {
        return $this->plaintextBody;
    }

    public function setPlaintextBody(string $plaintextBody): self
    {
        $this->initialized['plaintextBody'] = true;
        $this->plaintextBody = $plaintextBody;

        return $this;
    }

    public function getPreheader(): string
    {
        return $this->preheader;
    }

    public function setPreheader(string $preheader): self
    {
        $this->initialized['preheader'] = true;
        $this->preheader = $preheader;

        return $this;
    }

    /**
     * @return list<string>
     */
    public function getTags(): array
    {
        return $this->tags;
    }

    /**
     * @param list<string> $tags
     */
    public function setTags(array $tags): self
    {
        $this->initialized['tags'] = true;
        $this->tags = $tags;

        return $this;
    }

    public function getShouldInlineCss(): bool
    {
        return $this->shouldInlineCss;
    }

    public function setShouldInlineCss(bool $shouldInlineCss): self
    {
        $this->initialized['shouldInlineCss'] = true;
        $this->shouldInlineCss = $shouldInlineCss;

        return $this;
    }
}
