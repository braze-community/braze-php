<?php

declare(strict_types=1);

use Braze\Braze;

it('sends a GET to "/subscription/user/status"', function (): void {
    $braze = new Braze('https://rest.iad-02.braze.com', 'API_KEY');

    // https://www.braze.com/docs/api/endpoints/subscription_groups/get_list_user_subscription_groups/#request-parameters
    $params = [
        'external_id' => 'id1',
        'email' => 'braze@example.com',
        'limit' => 100,
        'offset' => 0,
        'phone' => '+12345678901',
    ];

    try {
        $braze->client->getSubscriptionUserStatus($params);
    } catch (Throwable $throwable) {
        expect($throwable->getMessage())->toBe('401 Unauthorized');
    }
});
