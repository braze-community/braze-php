# braze-php

[![packagist](https://img.shields.io/packagist/v/braze/sdk)](https://packagist.org/packages/braze/sdk)
[![build](https://github.com/braze-community/braze-php/actions/workflows/build.yml/badge.svg)](https://github.com/braze-community/braze-php/actions/workflows/build.yml)
[![test](https://github.com/braze-community/braze-php/actions/workflows/test.yml/badge.svg)](https://github.com/braze-community/braze-php/actions/workflows/test.yml)

PHP library for [Braze](https://www.braze.com/). Code is generated using the [OpenAPI spec](https://github.com/braze-community/braze-specification).

## Requirements

### Version

PHP >=8.0

### API URL

Use the [REST endpoint](https://www.braze.com/docs/api/basics#endpoints) provisioned to your account when you log in to the dashboard:

| Instance | REST Endpoint                 |
| -------- | ----------------------------- |
| US-01    | https://rest.iad-01.braze.com |
| US-02    | https://rest.iad-02.braze.com |
| US-03    | https://rest.iad-03.braze.com |
| US-04    | https://rest.iad-04.braze.com |
| US-05    | https://rest.iad-05.braze.com |
| US-06    | https://rest.iad-06.braze.com |
| US-08    | https://rest.iad-08.braze.com |
| EU-01    | https://rest.fra-01.braze.eu  |
| EU-02    | https://rest.fra-02.braze.eu  |

### API Key

The [API key](https://www.braze.com/docs/api/basics#creating-and-managing-rest-api-keys) can be created in your Braze dashboard.

## Install

Install the package with [Composer](http://getcomposer.org/):

```sh
composer require braze/sdk
```

If you're missing a package providing `psr/http-client-implementation`:

```sh
composer require php-http/guzzle7-adapter
```

Add [autoloading](https://getcomposer.org/doc/01-basic-usage.md#autoloading):

```php
require_once 'vendor/autoload.php';
```

## Usage

Instantiate the SDK:

```php
use Braze\Braze;

$braze = new Braze('YOUR_API_URL', 'YOUR_API_KEY');

$client = $braze->client;
```

Send a message to your user:

```php
use Braze\Braze;
use Braze\Model\MessagesSendPostBody;

$braze = new Braze('YOUR_API_URL', 'YOUR_API_KEY');

$braze->client->postMessagesSend(new MessagesSendPostBody([
    'external_user_ids' => ['your_external_user_id'],
    'messages' => [
        'email' => [
            'app_id' => 'your_app_id',
            'from' => 'Company <company@example.com>',
            'email_template_id' => 'your_email_template_id',
        ],
    ],
]));
```

Handle an API error:

```php
use Braze\Braze;

$braze = new Braze('YOUR_API_URL', 'YOUR_API_KEY');

try {
    $braze->client->getCatalog();
} catch (Throwable $exception) {
    echo $exception->getMessage();
    echo $exception->getCode();
}
```

## Scripts

### `composer build`

Generate the code:

```sh
composer build
```

### `composer clean`

Delete the `lib/` directory:

```sh
composer clean
```

### `composer test`

Run the tests:

```sh
composer test
```

## About This Package

This package is automatically generated by [Jane](https://github.com/janephp/janephp).
