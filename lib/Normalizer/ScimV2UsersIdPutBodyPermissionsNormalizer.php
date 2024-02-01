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
    class ScimV2UsersIdPutBodyPermissionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === 'Braze\\Model\\ScimV2UsersIdPutBodyPermissions';
        }

        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Braze\\Model\\ScimV2UsersIdPutBodyPermissions';
        }

        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Braze\Model\ScimV2UsersIdPutBodyPermissions();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('companyPermissions', $data)) {
                $values = [];
                foreach ($data['companyPermissions'] as $value) {
                    $values[] = $value;
                }
                $object->setCompanyPermissions($values);
                unset($data['companyPermissions']);
            }
            if (\array_key_exists('appGroup', $data)) {
                $values_1 = [];
                foreach ($data['appGroup'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'Braze\\Model\\ScimV2UsersIdPutBodyPermissionsAppGroupItem', 'json', $context);
                }
                $object->setAppGroup($values_1);
                unset($data['appGroup']);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('companyPermissions') && null !== $object->getCompanyPermissions()) {
                $values = [];
                foreach ($object->getCompanyPermissions() as $value) {
                    $values[] = $value;
                }
                $data['companyPermissions'] = $values;
            }
            if ($object->isInitialized('appGroup') && null !== $object->getAppGroup()) {
                $values_1 = [];
                foreach ($object->getAppGroup() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['appGroup'] = $values_1;
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }

            return $data;
        }

        public function getSupportedTypes(string $format = null): array
        {
            return ['Braze\\Model\\ScimV2UsersIdPutBodyPermissions' => false];
        }
    }
} else {
    class ScimV2UsersIdPutBodyPermissionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === 'Braze\\Model\\ScimV2UsersIdPutBodyPermissions';
        }

        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Braze\\Model\\ScimV2UsersIdPutBodyPermissions';
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Braze\Model\ScimV2UsersIdPutBodyPermissions();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('companyPermissions', $data)) {
                $values = [];
                foreach ($data['companyPermissions'] as $value) {
                    $values[] = $value;
                }
                $object->setCompanyPermissions($values);
                unset($data['companyPermissions']);
            }
            if (\array_key_exists('appGroup', $data)) {
                $values_1 = [];
                foreach ($data['appGroup'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'Braze\\Model\\ScimV2UsersIdPutBodyPermissionsAppGroupItem', 'json', $context);
                }
                $object->setAppGroup($values_1);
                unset($data['appGroup']);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
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
            if ($object->isInitialized('companyPermissions') && null !== $object->getCompanyPermissions()) {
                $values = [];
                foreach ($object->getCompanyPermissions() as $value) {
                    $values[] = $value;
                }
                $data['companyPermissions'] = $values;
            }
            if ($object->isInitialized('appGroup') && null !== $object->getAppGroup()) {
                $values_1 = [];
                foreach ($object->getAppGroup() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['appGroup'] = $values_1;
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }

            return $data;
        }

        public function getSupportedTypes(string $format = null): array
        {
            return ['Braze\\Model\\ScimV2UsersIdPutBodyPermissions' => false];
        }
    }
}
