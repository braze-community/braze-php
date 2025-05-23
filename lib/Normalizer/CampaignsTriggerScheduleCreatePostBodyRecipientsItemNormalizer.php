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

class CampaignsTriggerScheduleCreatePostBodyRecipientsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Braze\Model\CampaignsTriggerScheduleCreatePostBodyRecipientsItem::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Braze\Model\CampaignsTriggerScheduleCreatePostBodyRecipientsItem::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Braze\Model\CampaignsTriggerScheduleCreatePostBodyRecipientsItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('user_alias', $data)) {
            $object->setUserAlias($data['user_alias']);
            unset($data['user_alias']);
        }
        if (\array_key_exists('external_user_id', $data)) {
            $object->setExternalUserId($data['external_user_id']);
            unset($data['external_user_id']);
        }
        if (\array_key_exists('trigger_properties', $data)) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['trigger_properties'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setTriggerProperties($values);
            unset($data['trigger_properties']);
        }
        foreach ($data as $key_1 => $value_1) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_1;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('userAlias') && null !== $data->getUserAlias()) {
            $dataArray['user_alias'] = $data->getUserAlias();
        }
        if ($data->isInitialized('externalUserId') && null !== $data->getExternalUserId()) {
            $dataArray['external_user_id'] = $data->getExternalUserId();
        }
        if ($data->isInitialized('triggerProperties') && null !== $data->getTriggerProperties()) {
            $values = [];
            foreach ($data->getTriggerProperties() as $key => $value) {
                $values[$key] = $value;
            }
            $dataArray['trigger_properties'] = $values;
        }
        foreach ($data as $key_1 => $value_1) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_1;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Braze\Model\CampaignsTriggerScheduleCreatePostBodyRecipientsItem::class => false];
    }
}
