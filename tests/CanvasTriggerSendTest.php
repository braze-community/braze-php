<?php

declare(strict_types=1);

use Braze\Braze;
use Braze\Exception\ApiException;
use Braze\Exception\UnauthorizedException;
use Braze\Model\CanvasTriggerSendPostBody;
use Braze\Model\CanvasTriggerSendPostBodyRecipientsItem;

it('sends a POST to "/canvas/trigger/send"', function (): void {
    $braze = new Braze('https://rest.iad-02.braze.com', 'API_KEY');

    // https://www.braze.com/docs/api/endpoints/messaging/send_messages/post_send_triggered_canvases
    $body = new CanvasTriggerSendPostBody();
    $body->setCanvasId('abcdef12-3456-7890-abcdef12345678900');
    $recipient = new CanvasTriggerSendPostBodyRecipientsItem();
    $recipient->setExternalUserId('123');
    $recipient->setCanvasEntryProperties(['anything' => 'Anything']);
    $body->setRecipients([$recipient]);

    try {
        $braze->client->postCanvasTriggerSend($body)->getBody();
    } catch (Throwable $throwable) {
        expect($throwable)->toBeInstanceOf(UnauthorizedException::class);
        expect($throwable)->toBeInstanceOf(ApiException::class);
        expect($throwable->getMessage())->toBe('401 Unauthorized');
        expect($throwable->getCode())->toBe(401);
    }
});
