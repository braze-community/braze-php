<?php

declare(strict_types=1);

use Braze\Braze;
use Braze\Exception\ApiException;
use Braze\Exception\UnauthorizedException;
use Braze\Model\MessagesSendPostBody;

it('sends a POST to "/messages/send"', function (): void {
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

    try {
        $braze->client->postMessagesSend($messagesSendPostBody)->getBody();
    } catch (Throwable $throwable) {
        expect($throwable)->toBeInstanceOf(UnauthorizedException::class);
        expect($throwable)->toBeInstanceOf(ApiException::class);
        expect($throwable->getMessage())->toBe('401 Unauthorized');
        expect($throwable->getCode())->toBe(401);
    }
});
