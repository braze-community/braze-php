<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Braze\Model;

class UsersMergePostBody extends \ArrayObject
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
     * @var list<array<string, mixed>>
     */
    protected $mergeUpdates;

    /**
     * @return list<array<string, mixed>>
     */
    public function getMergeUpdates(): array
    {
        return $this->mergeUpdates;
    }

    /**
     * @param list<array<string, mixed>> $mergeUpdates
     */
    public function setMergeUpdates(array $mergeUpdates): self
    {
        $this->initialized['mergeUpdates'] = true;
        $this->mergeUpdates = $mergeUpdates;

        return $this;
    }
}
