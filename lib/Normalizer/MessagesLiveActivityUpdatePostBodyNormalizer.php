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
    class MessagesLiveActivityUpdatePostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === 'Braze\\Model\\MessagesLiveActivityUpdatePostBody';
        }

        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Braze\\Model\\MessagesLiveActivityUpdatePostBody';
        }

        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Braze\Model\MessagesLiveActivityUpdatePostBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('app_id', $data)) {
                $object->setAppId($data['app_id']);
                unset($data['app_id']);
            }
            if (\array_key_exists('activity_id', $data)) {
                $object->setActivityId($data['activity_id']);
                unset($data['activity_id']);
            }
            if (\array_key_exists('content_state', $data)) {
                $object->setContentState($this->denormalizer->denormalize($data['content_state'], 'Braze\\Model\\MessagesLiveActivityUpdatePostBodyContentState', 'json', $context));
                unset($data['content_state']);
            }
            if (\array_key_exists('end_activity', $data)) {
                $object->setEndActivity($data['end_activity']);
                unset($data['end_activity']);
            }
            if (\array_key_exists('dismissal_date', $data)) {
                $object->setDismissalDate(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['dismissal_date']));
                unset($data['dismissal_date']);
            }
            if (\array_key_exists('stale_date', $data)) {
                $object->setStaleDate(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['stale_date']));
                unset($data['stale_date']);
            }
            if (\array_key_exists('notification', $data)) {
                $object->setNotification($this->denormalizer->denormalize($data['notification'], 'Braze\\Model\\MessagesLiveActivityUpdatePostBodyNotification', 'json', $context));
                unset($data['notification']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('appId') && null !== $object->getAppId()) {
                $data['app_id'] = $object->getAppId();
            }
            if ($object->isInitialized('activityId') && null !== $object->getActivityId()) {
                $data['activity_id'] = $object->getActivityId();
            }
            if ($object->isInitialized('contentState') && null !== $object->getContentState()) {
                $data['content_state'] = $this->normalizer->normalize($object->getContentState(), 'json', $context);
            }
            if ($object->isInitialized('endActivity') && null !== $object->getEndActivity()) {
                $data['end_activity'] = $object->getEndActivity();
            }
            if ($object->isInitialized('dismissalDate') && null !== $object->getDismissalDate()) {
                $data['dismissal_date'] = $object->getDismissalDate()->format('Y-m-d\\TH:i:sP');
            }
            if ($object->isInitialized('staleDate') && null !== $object->getStaleDate()) {
                $data['stale_date'] = $object->getStaleDate()->format('Y-m-d\\TH:i:sP');
            }
            if ($object->isInitialized('notification') && null !== $object->getNotification()) {
                $data['notification'] = $this->normalizer->normalize($object->getNotification(), 'json', $context);
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(string $format = null): array
        {
            return ['Braze\\Model\\MessagesLiveActivityUpdatePostBody' => false];
        }
    }
} else {
    class MessagesLiveActivityUpdatePostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === 'Braze\\Model\\MessagesLiveActivityUpdatePostBody';
        }

        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Braze\\Model\\MessagesLiveActivityUpdatePostBody';
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Braze\Model\MessagesLiveActivityUpdatePostBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('app_id', $data)) {
                $object->setAppId($data['app_id']);
                unset($data['app_id']);
            }
            if (\array_key_exists('activity_id', $data)) {
                $object->setActivityId($data['activity_id']);
                unset($data['activity_id']);
            }
            if (\array_key_exists('content_state', $data)) {
                $object->setContentState($this->denormalizer->denormalize($data['content_state'], 'Braze\\Model\\MessagesLiveActivityUpdatePostBodyContentState', 'json', $context));
                unset($data['content_state']);
            }
            if (\array_key_exists('end_activity', $data)) {
                $object->setEndActivity($data['end_activity']);
                unset($data['end_activity']);
            }
            if (\array_key_exists('dismissal_date', $data)) {
                $object->setDismissalDate(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['dismissal_date']));
                unset($data['dismissal_date']);
            }
            if (\array_key_exists('stale_date', $data)) {
                $object->setStaleDate(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['stale_date']));
                unset($data['stale_date']);
            }
            if (\array_key_exists('notification', $data)) {
                $object->setNotification($this->denormalizer->denormalize($data['notification'], 'Braze\\Model\\MessagesLiveActivityUpdatePostBodyNotification', 'json', $context));
                unset($data['notification']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
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
            if ($object->isInitialized('appId') && null !== $object->getAppId()) {
                $data['app_id'] = $object->getAppId();
            }
            if ($object->isInitialized('activityId') && null !== $object->getActivityId()) {
                $data['activity_id'] = $object->getActivityId();
            }
            if ($object->isInitialized('contentState') && null !== $object->getContentState()) {
                $data['content_state'] = $this->normalizer->normalize($object->getContentState(), 'json', $context);
            }
            if ($object->isInitialized('endActivity') && null !== $object->getEndActivity()) {
                $data['end_activity'] = $object->getEndActivity();
            }
            if ($object->isInitialized('dismissalDate') && null !== $object->getDismissalDate()) {
                $data['dismissal_date'] = $object->getDismissalDate()->format('Y-m-d\\TH:i:sP');
            }
            if ($object->isInitialized('staleDate') && null !== $object->getStaleDate()) {
                $data['stale_date'] = $object->getStaleDate()->format('Y-m-d\\TH:i:sP');
            }
            if ($object->isInitialized('notification') && null !== $object->getNotification()) {
                $data['notification'] = $this->normalizer->normalize($object->getNotification(), 'json', $context);
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(string $format = null): array
        {
            return ['Braze\\Model\\MessagesLiveActivityUpdatePostBody' => false];
        }
    }
}
