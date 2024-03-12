<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Braze\Model;

class UsersExternalIdsRemovePostBody extends \ArrayObject
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
     * @var list<string>
     */
    protected $externalIds;

    /**
     * @return list<string>
     */
    public function getExternalIds(): array
    {
        return $this->externalIds;
    }

    /**
     * @param list<string> $externalIds
     */
    public function setExternalIds(array $externalIds): self
    {
        $this->initialized['externalIds'] = true;
        $this->externalIds = $externalIds;

        return $this;
    }
}
