<?php

declare(strict_types=1);

use Braze\Braze;
use Braze\Client;

use function Spatie\Snapshots\assertMatchesSnapshot;

it('gets client from Braze class', function (): void {
    $braze = new Braze('https://rest.iad-01.braze.com', 'API_KEY');
    $client = $braze->client;
    expect($client)->toBeInstanceOf(Client::class);
});

it('gets client from Client::create', function (): void {
    $client = Client::create();
    expect($client)->toBeInstanceOf(Client::class);
});

it('has client methods', function (): void {
    $braze = new Braze('https://rest.iad-01.braze.com', 'API_KEY');
    assertMatchesSnapshot(get_class_methods($braze->client));
});
