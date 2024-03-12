<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Braze\Model;

class UsersIdentifyPostBody extends \ArrayObject
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
     * @var list<UsersIdentifyPostBodyAliasesToIdentifyItem>
     */
    protected $aliasesToIdentify;

    /**
     * @return list<UsersIdentifyPostBodyAliasesToIdentifyItem>
     */
    public function getAliasesToIdentify(): array
    {
        return $this->aliasesToIdentify;
    }

    /**
     * @param list<UsersIdentifyPostBodyAliasesToIdentifyItem> $aliasesToIdentify
     */
    public function setAliasesToIdentify(array $aliasesToIdentify): self
    {
        $this->initialized['aliasesToIdentify'] = true;
        $this->aliasesToIdentify = $aliasesToIdentify;

        return $this;
    }
}
