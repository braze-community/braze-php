<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Braze\Model;

class ScimV2UsersIdPutBodyPermissionsAppGroupItemTeamItem extends \ArrayObject
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
    protected $teamName;
    /**
     * @var list<string>
     */
    protected $teamPermissions;

    public function getTeamName(): string
    {
        return $this->teamName;
    }

    public function setTeamName(string $teamName): self
    {
        $this->initialized['teamName'] = true;
        $this->teamName = $teamName;

        return $this;
    }

    /**
     * @return list<string>
     */
    public function getTeamPermissions(): array
    {
        return $this->teamPermissions;
    }

    /**
     * @param list<string> $teamPermissions
     */
    public function setTeamPermissions(array $teamPermissions): self
    {
        $this->initialized['teamPermissions'] = true;
        $this->teamPermissions = $teamPermissions;

        return $this;
    }
}
