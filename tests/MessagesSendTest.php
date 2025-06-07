<?php

declare(strict_types=1);

use Braze\Braze;
use Braze\Exception\ApiException;
use Braze\Exception\UnauthorizedException;
use Braze\Model\MessagesSendPostBody;
use Braze\Model\MessagesSendPostBodyMessages;

it('sends a POST to "/messages/send"', function (): void {
    $braze = new Braze('https://rest.iad-02.braze.com', 'API_KEY');

    // https://www.braze.com/docs/api/endpoints/messaging/send_messages/post_send_messages/#request-body
    $body = new MessagesSendPostBody();

    $body->setExternalUserIds(['your_external_user_id']);
    expect($body->getExternalUserIds())->toHaveCount(1);

    $messages = new MessagesSendPostBodyMessages();
    $messages->setEmail([
        'app_id' => 'your_app_id',
        'from' => 'Company <company@example.com>',
        'email_template_id' => 'your_email_template_id',
    ]);

    $body->setMessages($messages);
    expect($body->getMessages())->toBeTruthy();

    try {
        $braze->client->postMessagesSend($body)->getBody();
    } catch (Throwable $throwable) {
        expect($throwable)->toBeInstanceOf(UnauthorizedException::class);
        expect($throwable)->toBeInstanceOf(ApiException::class);
        expect($throwable->getMessage())->toBe('401 Unauthorized');
        expect($throwable->getCode())->toBe(401);
    }
});
