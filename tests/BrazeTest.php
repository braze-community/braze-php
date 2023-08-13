<?php

declare(strict_types=1);

use Braze\Braze;
use Braze\Client;
use Braze\Exception\ApiException;
use Braze\Exception\UnauthorizedException;

it('gets client from Braze class', function (): void {
    $braze = new Braze('https://rest.iad-01.braze.com', 'API_KEY');
    $client = $braze->client;
    expect($client)->toBeInstanceOf(Client::class);
    expect(method_exists($client, 'deleteCatalogByCatalogName'))->toBeTrue();
});

it('gets client from Client::create', function (): void {
    $client = Client::create();
    expect($client)->toBeInstanceOf(Client::class);
    expect(method_exists($client, 'deleteCatalogsByCatalogNameItem'))->toBeTrue();
});

it('throws error for invalid API key', function (): void {
    try {
        $braze = new Braze('https://rest.iad-02.braze.com', 'API_KEY');
        $braze->client->getContentBlocksInfo()->getBody();
    } catch (Throwable $throwable) {
        expect($throwable)->toBeInstanceOf(UnauthorizedException::class);
        expect($throwable)->toBeInstanceOf(ApiException::class);
        expect($throwable->getMessage())->toBe('401 Unauthorized');
        expect($throwable->getCode())->toBe(401);
    }
});
