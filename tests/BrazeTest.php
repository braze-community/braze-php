<?php

declare(strict_types=1);

use Braze\Braze;
use Braze\Client;
use Braze\Exception\ApiException;
use Braze\Exception\UnauthorizedException;
use Braze\Model\MessagesSendPostBody;

use function Spatie\Snapshots\assertMatchesSnapshot;

it('gets client from Braze class', function (): void {
    $braze = new Braze('https://rest.iad-01.braze.com', 'API_KEY');
    $client = $braze->client;
    expect($client)->toBeInstanceOf(Client::class);
    expect(method_exists($client, 'postMessagesSend'))->toBeTrue();
});

it('gets client from Client::create', function (): void {
    $client = Client::create();
    expect($client)->toBeInstanceOf(Client::class);
    expect(method_exists($client, 'postMessagesSend'))->toBeTrue();
});

it('has client methods', function (): void {
    $braze = new Braze('https://rest.iad-01.braze.com', 'API_KEY');
    assertMatchesSnapshot(get_class_methods($braze->client));
});

it('throws error for invalid API key', function (): void {
    try {
        $braze = new Braze('https://rest.iad-02.braze.com', 'API_KEY');
        $messagesSendPostBody = new MessagesSendPostBody([
            'external_user_ids' => ['your_external_user_id'],
            'messages' => [
                'email' => [
                    'app_id' => 'your_app_id',
                    'from' => 'Company <company@example.com>',
                    'email_template_id' => 'your_email_template_id',
                ],
            ],
        ]);
        $braze->client->postMessagesSend($messagesSendPostBody)->getBody();
    } catch (Throwable $throwable) {
        expect($throwable)->toBeInstanceOf(UnauthorizedException::class);
        expect($throwable)->toBeInstanceOf(ApiException::class);
        expect($throwable->getMessage())->toBe('401 Unauthorized');
        expect($throwable->getCode())->toBe(401);
    }
});
