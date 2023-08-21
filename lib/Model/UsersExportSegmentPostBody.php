<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Braze\Model;

class UsersExportSegmentPostBody extends \ArrayObject
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
    protected $segmentId;
    /**
     * @var string
     */
    protected $callbackEndpoint;
    /**
     * @var string[]
     */
    protected $fieldsToExport;
    /**
     * @var string
     */
    protected $outputFormat;

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

    public function getCallbackEndpoint(): string
    {
        return $this->callbackEndpoint;
    }

    public function setCallbackEndpoint(string $callbackEndpoint): self
    {
        $this->initialized['callbackEndpoint'] = true;
        $this->callbackEndpoint = $callbackEndpoint;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getFieldsToExport(): array
    {
        return $this->fieldsToExport;
    }

    /**
     * @param string[] $fieldsToExport
     */
    public function setFieldsToExport(array $fieldsToExport): self
    {
        $this->initialized['fieldsToExport'] = true;
        $this->fieldsToExport = $fieldsToExport;

        return $this;
    }

    public function getOutputFormat(): string
    {
        return $this->outputFormat;
    }

    public function setOutputFormat(string $outputFormat): self
    {
        $this->initialized['outputFormat'] = true;
        $this->outputFormat = $outputFormat;

        return $this;
    }
}