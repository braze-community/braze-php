<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Braze\Model;

class CatalogsCatalogNameItemsPatchBody extends \ArrayObject
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
     * @var list<CatalogsCatalogNameItemsPatchBodyItemsItem>
     */
    protected $items;

    /**
     * @return list<CatalogsCatalogNameItemsPatchBodyItemsItem>
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param list<CatalogsCatalogNameItemsPatchBodyItemsItem> $items
     */
    public function setItems(array $items): self
    {
        $this->initialized['items'] = true;
        $this->items = $items;

        return $this;
    }
}
