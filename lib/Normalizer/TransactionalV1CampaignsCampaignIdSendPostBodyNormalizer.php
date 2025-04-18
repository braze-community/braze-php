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

class TransactionalV1CampaignsCampaignIdSendPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Braze\Model\TransactionalV1CampaignsCampaignIdSendPostBody::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Braze\Model\TransactionalV1CampaignsCampaignIdSendPostBody::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Braze\Model\TransactionalV1CampaignsCampaignIdSendPostBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('external_send_id', $data)) {
            $object->setExternalSendId($data['external_send_id']);
            unset($data['external_send_id']);
        }
        if (\array_key_exists('trigger_properties', $data)) {
            $object->setTriggerProperties($this->denormalizer->denormalize($data['trigger_properties'], \Braze\Model\TransactionalV1CampaignsCampaignIdSendPostBodyTriggerProperties::class, 'json', $context));
            unset($data['trigger_properties']);
        }
        if (\array_key_exists('recipient', $data)) {
            $values = [];
            foreach ($data['recipient'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Braze\Model\TransactionalV1CampaignsCampaignIdSendPostBodyRecipientItem::class, 'json', $context);
            }
            $object->setRecipient($values);
            unset($data['recipient']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('externalSendId') && null !== $data->getExternalSendId()) {
            $dataArray['external_send_id'] = $data->getExternalSendId();
        }
        if ($data->isInitialized('triggerProperties') && null !== $data->getTriggerProperties()) {
            $dataArray['trigger_properties'] = $this->normalizer->normalize($data->getTriggerProperties(), 'json', $context);
        }
        if ($data->isInitialized('recipient') && null !== $data->getRecipient()) {
            $values = [];
            foreach ($data->getRecipient() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['recipient'] = $values;
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Braze\Model\TransactionalV1CampaignsCampaignIdSendPostBody::class => false];
    }
}
