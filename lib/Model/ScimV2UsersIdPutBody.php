<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Braze\Model;

class ScimV2UsersIdPutBody extends \ArrayObject
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
    protected $schemas;
    /**
     * @var ScimV2UsersIdPutBodyName
     */
    protected $name;
    /**
     * @var string
     */
    protected $department;
    /**
     * @var ScimV2UsersIdPutBodyPermissions
     */
    protected $permissions;

    /**
     * @return list<string>
     */
    public function getSchemas(): array
    {
        return $this->schemas;
    }

    /**
     * @param list<string> $schemas
     */
    public function setSchemas(array $schemas): self
    {
        $this->initialized['schemas'] = true;
        $this->schemas = $schemas;

        return $this;
    }

    public function getName(): ScimV2UsersIdPutBodyName
    {
        return $this->name;
    }

    public function setName(ScimV2UsersIdPutBodyName $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    public function getDepartment(): string
    {
        return $this->department;
    }

    public function setDepartment(string $department): self
    {
        $this->initialized['department'] = true;
        $this->department = $department;

        return $this;
    }

    public function getPermissions(): ScimV2UsersIdPutBodyPermissions
    {
        return $this->permissions;
    }

    public function setPermissions(ScimV2UsersIdPutBodyPermissions $permissions): self
    {
        $this->initialized['permissions'] = true;
        $this->permissions = $permissions;

        return $this;
    }
}
