<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Braze\Model;

class EmailBlacklistPostBody extends \ArrayObject
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
    protected $email;

    /**
     * @return list<string>
     */
    public function getEmail(): array
    {
        return $this->email;
    }

    /**
     * @param list<string> $email
     */
    public function setEmail(array $email): self
    {
        $this->initialized['email'] = true;
        $this->email = $email;

        return $this;
    }
}
