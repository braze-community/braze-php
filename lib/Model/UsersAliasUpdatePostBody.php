<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Braze\Model;

class UsersAliasUpdatePostBody extends \ArrayObject
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
     * @var list<UsersAliasUpdatePostBodyAliasUpdatesItem>
     */
    protected $aliasUpdates;

    /**
     * @return list<UsersAliasUpdatePostBodyAliasUpdatesItem>
     */
    public function getAliasUpdates(): array
    {
        return $this->aliasUpdates;
    }

    /**
     * @param list<UsersAliasUpdatePostBodyAliasUpdatesItem> $aliasUpdates
     */
    public function setAliasUpdates(array $aliasUpdates): self
    {
        $this->initialized['aliasUpdates'] = true;
        $this->aliasUpdates = $aliasUpdates;

        return $this;
    }
}
