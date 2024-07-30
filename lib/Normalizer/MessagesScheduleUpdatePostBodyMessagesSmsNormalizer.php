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
    class MessagesScheduleUpdatePostBodyMessagesSmsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Braze\Model\MessagesScheduleUpdatePostBodyMessagesSms::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Braze\Model\MessagesScheduleUpdatePostBodyMessagesSms::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Braze\Model\MessagesScheduleUpdatePostBodyMessagesSms();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('subscription_group_id', $data)) {
                $object->setSubscriptionGroupId($data['subscription_group_id']);
                unset($data['subscription_group_id']);
            }
            if (\array_key_exists('message_variation_id', $data)) {
                $object->setMessageVariationId($data['message_variation_id']);
                unset($data['message_variation_id']);
            }
            if (\array_key_exists('body', $data)) {
                $object->setBody($data['body']);
                unset($data['body']);
            }
            if (\array_key_exists('app_id', $data)) {
                $object->setAppId($data['app_id']);
                unset($data['app_id']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('subscriptionGroupId') && null !== $object->getSubscriptionGroupId()) {
                $data['subscription_group_id'] = $object->getSubscriptionGroupId();
            }
            if ($object->isInitialized('messageVariationId') && null !== $object->getMessageVariationId()) {
                $data['message_variation_id'] = $object->getMessageVariationId();
            }
            if ($object->isInitialized('body') && null !== $object->getBody()) {
                $data['body'] = $object->getBody();
            }
            if ($object->isInitialized('appId') && null !== $object->getAppId()) {
                $data['app_id'] = $object->getAppId();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\Braze\Model\MessagesScheduleUpdatePostBodyMessagesSms::class => false];
        }
    }
} else {
    class MessagesScheduleUpdatePostBodyMessagesSmsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Braze\Model\MessagesScheduleUpdatePostBodyMessagesSms::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Braze\Model\MessagesScheduleUpdatePostBodyMessagesSms::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Braze\Model\MessagesScheduleUpdatePostBodyMessagesSms();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('subscription_group_id', $data)) {
                $object->setSubscriptionGroupId($data['subscription_group_id']);
                unset($data['subscription_group_id']);
            }
            if (\array_key_exists('message_variation_id', $data)) {
                $object->setMessageVariationId($data['message_variation_id']);
                unset($data['message_variation_id']);
            }
            if (\array_key_exists('body', $data)) {
                $object->setBody($data['body']);
                unset($data['body']);
            }
            if (\array_key_exists('app_id', $data)) {
                $object->setAppId($data['app_id']);
                unset($data['app_id']);
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
            if ($object->isInitialized('subscriptionGroupId') && null !== $object->getSubscriptionGroupId()) {
                $data['subscription_group_id'] = $object->getSubscriptionGroupId();
            }
            if ($object->isInitialized('messageVariationId') && null !== $object->getMessageVariationId()) {
                $data['message_variation_id'] = $object->getMessageVariationId();
            }
            if ($object->isInitialized('body') && null !== $object->getBody()) {
                $data['body'] = $object->getBody();
            }
            if ($object->isInitialized('appId') && null !== $object->getAppId()) {
                $data['app_id'] = $object->getAppId();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\Braze\Model\MessagesScheduleUpdatePostBodyMessagesSms::class => false];
        }
    }
}
