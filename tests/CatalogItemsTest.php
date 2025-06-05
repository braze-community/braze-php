<?php

declare(strict_types=1);

use Braze\Braze;
use Braze\Model\CatalogsCatalogNameItemsDeleteBody;
use Braze\Model\CatalogsCatalogNameItemsDeleteBodyItemsItem;

it('sends a DELETE to "/catalogs/{catalog_name}/items"', function (): void {
    $braze = new Braze('https://rest.iad-02.braze.com', 'API_KEY');

    // https://www.braze.com/docs/api/endpoints/catalogs/catalog_items/asynchronous/delete_catalog_items_bulk/#request-parameters
    $body = new CatalogsCatalogNameItemsDeleteBody([['id' => 'restaurant1']]);
    $item = new CatalogsCatalogNameItemsDeleteBodyItemsItem(['id' => 'restaurant2']);
    $item->setId('restaurant3');
    $body->append($item);

    try {
        $braze->client->deleteCatalogsByCatalogNameItem('catalog', $body);
    } catch (Throwable $throwable) {
        expect($throwable->getMessage())->toBe('401 Unauthorized');
    }
});
