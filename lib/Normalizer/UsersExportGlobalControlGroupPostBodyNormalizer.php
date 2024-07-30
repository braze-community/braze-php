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
    class UsersExportGlobalControlGroupPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Braze\Model\UsersExportGlobalControlGroupPostBody::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Braze\Model\UsersExportGlobalControlGroupPostBody::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Braze\Model\UsersExportGlobalControlGroupPostBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('callback_endpoint', $data)) {
                $object->setCallbackEndpoint($data['callback_endpoint']);
                unset($data['callback_endpoint']);
            }
            if (\array_key_exists('fields_to_export', $data)) {
                $values = [];
                foreach ($data['fields_to_export'] as $value) {
                    $values[] = $value;
                }
                $object->setFieldsToExport($values);
                unset($data['fields_to_export']);
            }
            if (\array_key_exists('output_format', $data)) {
                $object->setOutputFormat($data['output_format']);
                unset($data['output_format']);
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
            if ($object->isInitialized('callbackEndpoint') && null !== $object->getCallbackEndpoint()) {
                $data['callback_endpoint'] = $object->getCallbackEndpoint();
            }
            if ($object->isInitialized('fieldsToExport') && null !== $object->getFieldsToExport()) {
                $values = [];
                foreach ($object->getFieldsToExport() as $value) {
                    $values[] = $value;
                }
                $data['fields_to_export'] = $values;
            }
            if ($object->isInitialized('outputFormat') && null !== $object->getOutputFormat()) {
                $data['output_format'] = $object->getOutputFormat();
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
            return [\Braze\Model\UsersExportGlobalControlGroupPostBody::class => false];
        }
    }
} else {
    class UsersExportGlobalControlGroupPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Braze\Model\UsersExportGlobalControlGroupPostBody::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Braze\Model\UsersExportGlobalControlGroupPostBody::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Braze\Model\UsersExportGlobalControlGroupPostBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('callback_endpoint', $data)) {
                $object->setCallbackEndpoint($data['callback_endpoint']);
                unset($data['callback_endpoint']);
            }
            if (\array_key_exists('fields_to_export', $data)) {
                $values = [];
                foreach ($data['fields_to_export'] as $value) {
                    $values[] = $value;
                }
                $object->setFieldsToExport($values);
                unset($data['fields_to_export']);
            }
            if (\array_key_exists('output_format', $data)) {
                $object->setOutputFormat($data['output_format']);
                unset($data['output_format']);
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
            if ($object->isInitialized('callbackEndpoint') && null !== $object->getCallbackEndpoint()) {
                $data['callback_endpoint'] = $object->getCallbackEndpoint();
            }
            if ($object->isInitialized('fieldsToExport') && null !== $object->getFieldsToExport()) {
                $values = [];
                foreach ($object->getFieldsToExport() as $value) {
                    $values[] = $value;
                }
                $data['fields_to_export'] = $values;
            }
            if ($object->isInitialized('outputFormat') && null !== $object->getOutputFormat()) {
                $data['output_format'] = $object->getOutputFormat();
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
            return [\Braze\Model\UsersExportGlobalControlGroupPostBody::class => false];
        }
    }
}
