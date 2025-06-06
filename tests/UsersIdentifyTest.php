<?php

declare(strict_types=1);

use Braze\Braze;
use Braze\Model\UsersIdentifyPostBody;

it('sends a POST to "/users/identify"', function (): void {
    $braze = new Braze('https://rest.iad-02.braze.com', 'API_KEY');

    // https://www.braze.com/docs/api/endpoints/user_data/post_user_identify/#request-body
    $body = new UsersIdentifyPostBody();

    $body->setAliasesToIdentify([
        [
            'external_id' => 'id1',
            'alias_label' => 'label1',
            'alias_name' => 'name1',
        ],
    ]);
    expect($body->getAliasesToIdentify())->toBeTruthy();

    $body->setEmailsToIdentify([
        'external_id' => 'external_identifier_2',
        'email' => 'john.smith@braze.com',
        'prioritization' => ['unidentified', 'most_recently_updated'],
    ]);
    expect($body->getEmailsToIdentify())->toBeTruthy();

    $body->setPhoneNumbersToIdentify([
        'external_id' => 'external_identifier_2',
        'phone' => '+12345678901',
        'prioritization' => ['unidentified', 'most_recently_updated'],
    ]);
    expect($body->getPhoneNumbersToIdentify())->toBeTruthy();

    $body->setMergeBehavior('none');
    expect($body->getMergeBehavior())->toBe('none');

    try {
        $braze->client->postUsersIdentify($body);
    } catch (Throwable $throwable) {
        expect($throwable->getMessage())->toBe('401 Unauthorized');
    }
});
