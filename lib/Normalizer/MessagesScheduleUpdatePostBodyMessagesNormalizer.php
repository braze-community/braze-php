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
    class MessagesScheduleUpdatePostBodyMessagesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Braze\Model\MessagesScheduleUpdatePostBodyMessages::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === Braze\Model\MessagesScheduleUpdatePostBodyMessages::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Braze\Model\MessagesScheduleUpdatePostBodyMessages();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('apple_push', $data)) {
                $object->setApplePush($this->denormalizer->denormalize($data['apple_push'], \Braze\Model\MessagesScheduleUpdatePostBodyMessagesApplePush::class, 'json', $context));
                unset($data['apple_push']);
            }
            if (\array_key_exists('android_push', $data)) {
                $object->setAndroidPush($this->denormalizer->denormalize($data['android_push'], \Braze\Model\MessagesScheduleUpdatePostBodyMessagesAndroidPush::class, 'json', $context));
                unset($data['android_push']);
            }
            if (\array_key_exists('sms', $data)) {
                $object->setSms($this->denormalizer->denormalize($data['sms'], \Braze\Model\MessagesScheduleUpdatePostBodyMessagesSms::class, 'json', $context));
                unset($data['sms']);
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
            if ($object->isInitialized('applePush') && null !== $object->getApplePush()) {
                $data['apple_push'] = $this->normalizer->normalize($object->getApplePush(), 'json', $context);
            }
            if ($object->isInitialized('androidPush') && null !== $object->getAndroidPush()) {
                $data['android_push'] = $this->normalizer->normalize($object->getAndroidPush(), 'json', $context);
            }
            if ($object->isInitialized('sms') && null !== $object->getSms()) {
                $data['sms'] = $this->normalizer->normalize($object->getSms(), 'json', $context);
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
            return [\Braze\Model\MessagesScheduleUpdatePostBodyMessages::class => false];
        }
    }
} else {
    class MessagesScheduleUpdatePostBodyMessagesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Braze\Model\MessagesScheduleUpdatePostBodyMessages::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === Braze\Model\MessagesScheduleUpdatePostBodyMessages::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Braze\Model\MessagesScheduleUpdatePostBodyMessages();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('apple_push', $data)) {
                $object->setApplePush($this->denormalizer->denormalize($data['apple_push'], \Braze\Model\MessagesScheduleUpdatePostBodyMessagesApplePush::class, 'json', $context));
                unset($data['apple_push']);
            }
            if (\array_key_exists('android_push', $data)) {
                $object->setAndroidPush($this->denormalizer->denormalize($data['android_push'], \Braze\Model\MessagesScheduleUpdatePostBodyMessagesAndroidPush::class, 'json', $context));
                unset($data['android_push']);
            }
            if (\array_key_exists('sms', $data)) {
                $object->setSms($this->denormalizer->denormalize($data['sms'], \Braze\Model\MessagesScheduleUpdatePostBodyMessagesSms::class, 'json', $context));
                unset($data['sms']);
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
            if ($object->isInitialized('applePush') && null !== $object->getApplePush()) {
                $data['apple_push'] = $this->normalizer->normalize($object->getApplePush(), 'json', $context);
            }
            if ($object->isInitialized('androidPush') && null !== $object->getAndroidPush()) {
                $data['android_push'] = $this->normalizer->normalize($object->getAndroidPush(), 'json', $context);
            }
            if ($object->isInitialized('sms') && null !== $object->getSms()) {
                $data['sms'] = $this->normalizer->normalize($object->getSms(), 'json', $context);
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
            return [\Braze\Model\MessagesScheduleUpdatePostBodyMessages::class => false];
        }
    }
}
