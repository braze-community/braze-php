<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Braze\Runtime\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ReferenceNormalizer implements NormalizerInterface
{
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $ref = [];
        $ref['$ref'] = (string) $data->getReferenceUri();

        return $ref;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return $data instanceof Reference;
    }

    public function getSupportedTypes(?string $format): array
    {
        return [Reference::class => false];
    }
}
