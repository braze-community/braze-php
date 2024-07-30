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
    class MessagesScheduleCreatePostBodyUserAliasesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Braze\Model\MessagesScheduleCreatePostBodyUserAliases::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Braze\Model\MessagesScheduleCreatePostBodyUserAliases::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Braze\Model\MessagesScheduleCreatePostBodyUserAliases();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('alias_name', $data)) {
                $object->setAliasName($data['alias_name']);
                unset($data['alias_name']);
            }
            if (\array_key_exists('alias_label', $data)) {
                $object->setAliasLabel($data['alias_label']);
                unset($data['alias_label']);
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
            if ($object->isInitialized('aliasName') && null !== $object->getAliasName()) {
                $data['alias_name'] = $object->getAliasName();
            }
            if ($object->isInitialized('aliasLabel') && null !== $object->getAliasLabel()) {
                $data['alias_label'] = $object->getAliasLabel();
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
            return [\Braze\Model\MessagesScheduleCreatePostBodyUserAliases::class => false];
        }
    }
} else {
    class MessagesScheduleCreatePostBodyUserAliasesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Braze\Model\MessagesScheduleCreatePostBodyUserAliases::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Braze\Model\MessagesScheduleCreatePostBodyUserAliases::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Braze\Model\MessagesScheduleCreatePostBodyUserAliases();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('alias_name', $data)) {
                $object->setAliasName($data['alias_name']);
                unset($data['alias_name']);
            }
            if (\array_key_exists('alias_label', $data)) {
                $object->setAliasLabel($data['alias_label']);
                unset($data['alias_label']);
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
            if ($object->isInitialized('aliasName') && null !== $object->getAliasName()) {
                $data['alias_name'] = $object->getAliasName();
            }
            if ($object->isInitialized('aliasLabel') && null !== $object->getAliasLabel()) {
                $data['alias_label'] = $object->getAliasLabel();
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
            return [\Braze\Model\MessagesScheduleCreatePostBodyUserAliases::class => false];
        }
    }
}
