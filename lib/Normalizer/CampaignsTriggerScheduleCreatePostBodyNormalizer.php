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
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class CampaignsTriggerScheduleCreatePostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Braze\Model\CampaignsTriggerScheduleCreatePostBody::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === Braze\Model\CampaignsTriggerScheduleCreatePostBody::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Braze\Model\CampaignsTriggerScheduleCreatePostBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('campaign_id', $data)) {
                $object->setCampaignId($data['campaign_id']);
                unset($data['campaign_id']);
            }
            if (\array_key_exists('send_id', $data)) {
                $object->setSendId($data['send_id']);
                unset($data['send_id']);
            }
            if (\array_key_exists('recipients', $data)) {
                $values = [];
                foreach ($data['recipients'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Braze\Model\CampaignsTriggerScheduleCreatePostBodyRecipientsItem::class, 'json', $context);
                }
                $object->setRecipients($values);
                unset($data['recipients']);
            }
            if (\array_key_exists('audience', $data)) {
                $object->setAudience($this->denormalizer->denormalize($data['audience'], \Braze\Model\CampaignsTriggerScheduleCreatePostBodyAudience::class, 'json', $context));
                unset($data['audience']);
            }
            if (\array_key_exists('broadcast', $data)) {
                $object->setBroadcast($data['broadcast']);
                unset($data['broadcast']);
            }
            if (\array_key_exists('trigger_properties', $data)) {
                $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['trigger_properties'] as $key => $value_1) {
                    $values_1[$key] = $value_1;
                }
                $object->setTriggerProperties($values_1);
                unset($data['trigger_properties']);
            }
            if (\array_key_exists('schedule', $data)) {
                $object->setSchedule($this->denormalizer->denormalize($data['schedule'], \Braze\Model\CampaignsTriggerScheduleCreatePostBodySchedule::class, 'json', $context));
                unset($data['schedule']);
            }
            foreach ($data as $key_1 => $value_2) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $object[$key_1] = $value_2;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('campaignId') && null !== $object->getCampaignId()) {
                $data['campaign_id'] = $object->getCampaignId();
            }
            if ($object->isInitialized('sendId') && null !== $object->getSendId()) {
                $data['send_id'] = $object->getSendId();
            }
            if ($object->isInitialized('recipients') && null !== $object->getRecipients()) {
                $values = [];
                foreach ($object->getRecipients() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['recipients'] = $values;
            }
            if ($object->isInitialized('audience') && null !== $object->getAudience()) {
                $data['audience'] = $this->normalizer->normalize($object->getAudience(), 'json', $context);
            }
            if ($object->isInitialized('broadcast') && null !== $object->getBroadcast()) {
                $data['broadcast'] = $object->getBroadcast();
            }
            if ($object->isInitialized('triggerProperties') && null !== $object->getTriggerProperties()) {
                $values_1 = [];
                foreach ($object->getTriggerProperties() as $key => $value_1) {
                    $values_1[$key] = $value_1;
                }
                $data['trigger_properties'] = $values_1;
            }
            if ($object->isInitialized('schedule') && null !== $object->getSchedule()) {
                $data['schedule'] = $this->normalizer->normalize($object->getSchedule(), 'json', $context);
            }
            foreach ($object as $key_1 => $value_2) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $data[$key_1] = $value_2;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\Braze\Model\CampaignsTriggerScheduleCreatePostBody::class => false];
        }
    }
} else {
    class CampaignsTriggerScheduleCreatePostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Braze\Model\CampaignsTriggerScheduleCreatePostBody::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === Braze\Model\CampaignsTriggerScheduleCreatePostBody::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Braze\Model\CampaignsTriggerScheduleCreatePostBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('campaign_id', $data)) {
                $object->setCampaignId($data['campaign_id']);
                unset($data['campaign_id']);
            }
            if (\array_key_exists('send_id', $data)) {
                $object->setSendId($data['send_id']);
                unset($data['send_id']);
            }
            if (\array_key_exists('recipients', $data)) {
                $values = [];
                foreach ($data['recipients'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Braze\Model\CampaignsTriggerScheduleCreatePostBodyRecipientsItem::class, 'json', $context);
                }
                $object->setRecipients($values);
                unset($data['recipients']);
            }
            if (\array_key_exists('audience', $data)) {
                $object->setAudience($this->denormalizer->denormalize($data['audience'], \Braze\Model\CampaignsTriggerScheduleCreatePostBodyAudience::class, 'json', $context));
                unset($data['audience']);
            }
            if (\array_key_exists('broadcast', $data)) {
                $object->setBroadcast($data['broadcast']);
                unset($data['broadcast']);
            }
            if (\array_key_exists('trigger_properties', $data)) {
                $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['trigger_properties'] as $key => $value_1) {
                    $values_1[$key] = $value_1;
                }
                $object->setTriggerProperties($values_1);
                unset($data['trigger_properties']);
            }
            if (\array_key_exists('schedule', $data)) {
                $object->setSchedule($this->denormalizer->denormalize($data['schedule'], \Braze\Model\CampaignsTriggerScheduleCreatePostBodySchedule::class, 'json', $context));
                unset($data['schedule']);
            }
            foreach ($data as $key_1 => $value_2) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $object[$key_1] = $value_2;
                }
            }

            return $object;
        }

        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('campaignId') && null !== $object->getCampaignId()) {
                $data['campaign_id'] = $object->getCampaignId();
            }
            if ($object->isInitialized('sendId') && null !== $object->getSendId()) {
                $data['send_id'] = $object->getSendId();
            }
            if ($object->isInitialized('recipients') && null !== $object->getRecipients()) {
                $values = [];
                foreach ($object->getRecipients() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['recipients'] = $values;
            }
            if ($object->isInitialized('audience') && null !== $object->getAudience()) {
                $data['audience'] = $this->normalizer->normalize($object->getAudience(), 'json', $context);
            }
            if ($object->isInitialized('broadcast') && null !== $object->getBroadcast()) {
                $data['broadcast'] = $object->getBroadcast();
            }
            if ($object->isInitialized('triggerProperties') && null !== $object->getTriggerProperties()) {
                $values_1 = [];
                foreach ($object->getTriggerProperties() as $key => $value_1) {
                    $values_1[$key] = $value_1;
                }
                $data['trigger_properties'] = $values_1;
            }
            if ($object->isInitialized('schedule') && null !== $object->getSchedule()) {
                $data['schedule'] = $this->normalizer->normalize($object->getSchedule(), 'json', $context);
            }
            foreach ($object as $key_1 => $value_2) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $data[$key_1] = $value_2;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\Braze\Model\CampaignsTriggerScheduleCreatePostBody::class => false];
        }
    }
}
