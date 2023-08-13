<?php

declare(strict_types=1);

namespace Braze;

use Http\Client\Common\Plugin\AddHostPlugin;
use Http\Client\Common\Plugin\AuthenticationPlugin;
use Http\Client\Common\PluginClient;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Discovery\Psr18ClientDiscovery;
use Http\Message\Authentication\Bearer;

class Braze
{
    /** @var Client */
    public $client;

    /**
     * Instantiates Braze client.
     *
     * @param string $apiUrl Braze REST endpoint (e.g., https://rest.iad-01.braze.com).
     * @param string $apiKey Braze API key.
     */
    public function __construct(string $apiUrl, string $apiKey)
    {
        $httpClient = Psr18ClientDiscovery::find();
        $uri = Psr17FactoryDiscovery::findUriFactory()->createUri($apiUrl);
        $bearer = new Bearer($apiKey);
        $plugins = [
            new AddHostPlugin($uri),
            new AuthenticationPlugin($bearer),
        ];
        $httpClient = new PluginClient($httpClient, $plugins);
        $this->client = Client::create($httpClient);
    }
}
