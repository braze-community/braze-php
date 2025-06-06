<?php

declare(strict_types=1);

use Braze\Braze;
use Braze\Model\V2SubscriptionStatusSetPostBody;

it('sends a POST to "/v2/subscription/status/set"', function (): void {
    $braze = new Braze('https://rest.iad-02.braze.com', 'API_KEY');

    // https://www.braze.com/docs/api/endpoints/subscription_groups/post_update_user_subscription_group_status_v2/#request-body
    $body = new V2SubscriptionStatusSetPostBody();

    $body->setSubscriptionGroups([
        'subscription_group_id' => 'restaurant1',
        'subscription_state' => 'subscribed',
        'external_ids' => ['id1'],
        'id' => 'restaurant1',
        'emails' => ['john@example.com'],
        'phones' => ['1234567890'],
    ]);
    expect($body->getSubscriptionGroups())->toBeTruthy();

    try {
        $braze->client->postV2SubscriptionStatusSet($body);
    } catch (Throwable $throwable) {
        expect($throwable->getMessage())->toBe('401 Unauthorized');
    }
});
