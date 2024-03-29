<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Braze\Model;

class ScimV2UsersIdPutBodyPermissionsAppGroupItem extends \ArrayObject
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
    protected $appGroupName;
    /**
     * @var list<string>
     */
    protected $appGroupPermissions;
    /**
     * @var list<ScimV2UsersIdPutBodyPermissionsAppGroupItemTeamItem>
     */
    protected $team;

    public function getAppGroupName(): string
    {
        return $this->appGroupName;
    }

    public function setAppGroupName(string $appGroupName): self
    {
        $this->initialized['appGroupName'] = true;
        $this->appGroupName = $appGroupName;

        return $this;
    }

    /**
     * @return list<string>
     */
    public function getAppGroupPermissions(): array
    {
        return $this->appGroupPermissions;
    }

    /**
     * @param list<string> $appGroupPermissions
     */
    public function setAppGroupPermissions(array $appGroupPermissions): self
    {
        $this->initialized['appGroupPermissions'] = true;
        $this->appGroupPermissions = $appGroupPermissions;

        return $this;
    }

    /**
     * @return list<ScimV2UsersIdPutBodyPermissionsAppGroupItemTeamItem>
     */
    public function getTeam(): array
    {
        return $this->team;
    }

    /**
     * @param list<ScimV2UsersIdPutBodyPermissionsAppGroupItemTeamItem> $team
     */
    public function setTeam(array $team): self
    {
        $this->initialized['team'] = true;
        $this->team = $team;

        return $this;
    }
}
