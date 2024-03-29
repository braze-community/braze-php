<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Braze\Model;

class UsersDeletePostBody extends \ArrayObject
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
     * @var list<string>
     */
    protected $brazeIds;
    /**
     * @var list<UsersDeletePostBodyUserAliasesItem>
     */
    protected $userAliases;

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

    /**
     * @return list<string>
     */
    public function getBrazeIds(): array
    {
        return $this->brazeIds;
    }

    /**
     * @param list<string> $brazeIds
     */
    public function setBrazeIds(array $brazeIds): self
    {
        $this->initialized['brazeIds'] = true;
        $this->brazeIds = $brazeIds;

        return $this;
    }

    /**
     * @return list<UsersDeletePostBodyUserAliasesItem>
     */
    public function getUserAliases(): array
    {
        return $this->userAliases;
    }

    /**
     * @param list<UsersDeletePostBodyUserAliasesItem> $userAliases
     */
    public function setUserAliases(array $userAliases): self
    {
        $this->initialized['userAliases'] = true;
        $this->userAliases = $userAliases;

        return $this;
    }
}
