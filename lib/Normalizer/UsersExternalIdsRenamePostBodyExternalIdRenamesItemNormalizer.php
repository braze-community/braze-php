<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Braze\Normalizer;

use Braze\Runtime\Normalizer\CheckArray;
use Braze\Runtime\Normalizer\ValidatorTrait;
use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class UsersExternalIdsRenamePostBodyExternalIdRenamesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Braze\Model\UsersExternalIdsRenamePostBodyExternalIdRenamesItem::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Braze\Model\UsersExternalIdsRenamePostBodyExternalIdRenamesItem::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Braze\Model\UsersExternalIdsRenamePostBodyExternalIdRenamesItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('current_external_id', $data)) {
            $object->setCurrentExternalId($data['current_external_id']);
            unset($data['current_external_id']);
        }
        if (\array_key_exists('new_external_id', $data)) {
            $object->setNewExternalId($data['new_external_id']);
            unset($data['new_external_id']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('currentExternalId') && null !== $data->getCurrentExternalId()) {
            $dataArray['current_external_id'] = $data->getCurrentExternalId();
        }
        if ($data->isInitialized('newExternalId') && null !== $data->getNewExternalId()) {
            $dataArray['new_external_id'] = $data->getNewExternalId();
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Braze\Model\UsersExternalIdsRenamePostBodyExternalIdRenamesItem::class => false];
    }
}
