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
    class ScimV2UsersPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Braze\Model\ScimV2UsersPostBody::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Braze\Model\ScimV2UsersPostBody::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Braze\Model\ScimV2UsersPostBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('schemas', $data)) {
                $values = [];
                foreach ($data['schemas'] as $value) {
                    $values[] = $value;
                }
                $object->setSchemas($values);
                unset($data['schemas']);
            }
            if (\array_key_exists('userName', $data)) {
                $object->setUserName($data['userName']);
                unset($data['userName']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($this->denormalizer->denormalize($data['name'], \Braze\Model\ScimV2UsersPostBodyName::class, 'json', $context));
                unset($data['name']);
            }
            if (\array_key_exists('department', $data)) {
                $object->setDepartment($data['department']);
                unset($data['department']);
            }
            if (\array_key_exists('permissions', $data)) {
                $object->setPermissions($this->denormalizer->denormalize($data['permissions'], \Braze\Model\ScimV2UsersPostBodyPermissions::class, 'json', $context));
                unset($data['permissions']);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('schemas') && null !== $object->getSchemas()) {
                $values = [];
                foreach ($object->getSchemas() as $value) {
                    $values[] = $value;
                }
                $data['schemas'] = $values;
            }
            if ($object->isInitialized('userName') && null !== $object->getUserName()) {
                $data['userName'] = $object->getUserName();
            }
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $this->normalizer->normalize($object->getName(), 'json', $context);
            }
            if ($object->isInitialized('department') && null !== $object->getDepartment()) {
                $data['department'] = $object->getDepartment();
            }
            if ($object->isInitialized('permissions') && null !== $object->getPermissions()) {
                $data['permissions'] = $this->normalizer->normalize($object->getPermissions(), 'json', $context);
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\Braze\Model\ScimV2UsersPostBody::class => false];
        }
    }
} else {
    class ScimV2UsersPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Braze\Model\ScimV2UsersPostBody::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Braze\Model\ScimV2UsersPostBody::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Braze\Model\ScimV2UsersPostBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('schemas', $data)) {
                $values = [];
                foreach ($data['schemas'] as $value) {
                    $values[] = $value;
                }
                $object->setSchemas($values);
                unset($data['schemas']);
            }
            if (\array_key_exists('userName', $data)) {
                $object->setUserName($data['userName']);
                unset($data['userName']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($this->denormalizer->denormalize($data['name'], \Braze\Model\ScimV2UsersPostBodyName::class, 'json', $context));
                unset($data['name']);
            }
            if (\array_key_exists('department', $data)) {
                $object->setDepartment($data['department']);
                unset($data['department']);
            }
            if (\array_key_exists('permissions', $data)) {
                $object->setPermissions($this->denormalizer->denormalize($data['permissions'], \Braze\Model\ScimV2UsersPostBodyPermissions::class, 'json', $context));
                unset($data['permissions']);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
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
            if ($object->isInitialized('schemas') && null !== $object->getSchemas()) {
                $values = [];
                foreach ($object->getSchemas() as $value) {
                    $values[] = $value;
                }
                $data['schemas'] = $values;
            }
            if ($object->isInitialized('userName') && null !== $object->getUserName()) {
                $data['userName'] = $object->getUserName();
            }
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $this->normalizer->normalize($object->getName(), 'json', $context);
            }
            if ($object->isInitialized('department') && null !== $object->getDepartment()) {
                $data['department'] = $object->getDepartment();
            }
            if ($object->isInitialized('permissions') && null !== $object->getPermissions()) {
                $data['permissions'] = $this->normalizer->normalize($object->getPermissions(), 'json', $context);
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\Braze\Model\ScimV2UsersPostBody::class => false];
        }
    }
}
