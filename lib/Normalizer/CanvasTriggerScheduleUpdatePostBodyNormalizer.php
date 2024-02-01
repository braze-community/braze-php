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
    class CanvasTriggerScheduleUpdatePostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === 'Braze\\Model\\CanvasTriggerScheduleUpdatePostBody';
        }

        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Braze\\Model\\CanvasTriggerScheduleUpdatePostBody';
        }

        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Braze\Model\CanvasTriggerScheduleUpdatePostBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('canvas_id', $data)) {
                $object->setCanvasId($data['canvas_id']);
                unset($data['canvas_id']);
            }
            if (\array_key_exists('schedule_id', $data)) {
                $object->setScheduleId($data['schedule_id']);
                unset($data['schedule_id']);
            }
            if (\array_key_exists('schedule', $data)) {
                $object->setSchedule($this->denormalizer->denormalize($data['schedule'], 'Braze\\Model\\CanvasTriggerScheduleUpdatePostBodySchedule', 'json', $context));
                unset($data['schedule']);
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
            if ($object->isInitialized('canvasId') && null !== $object->getCanvasId()) {
                $data['canvas_id'] = $object->getCanvasId();
            }
            if ($object->isInitialized('scheduleId') && null !== $object->getScheduleId()) {
                $data['schedule_id'] = $object->getScheduleId();
            }
            if ($object->isInitialized('schedule') && null !== $object->getSchedule()) {
                $data['schedule'] = $this->normalizer->normalize($object->getSchedule(), 'json', $context);
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
            return ['Braze\\Model\\CanvasTriggerScheduleUpdatePostBody' => false];
        }
    }
} else {
    class CanvasTriggerScheduleUpdatePostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === 'Braze\\Model\\CanvasTriggerScheduleUpdatePostBody';
        }

        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Braze\\Model\\CanvasTriggerScheduleUpdatePostBody';
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Braze\Model\CanvasTriggerScheduleUpdatePostBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('canvas_id', $data)) {
                $object->setCanvasId($data['canvas_id']);
                unset($data['canvas_id']);
            }
            if (\array_key_exists('schedule_id', $data)) {
                $object->setScheduleId($data['schedule_id']);
                unset($data['schedule_id']);
            }
            if (\array_key_exists('schedule', $data)) {
                $object->setSchedule($this->denormalizer->denormalize($data['schedule'], 'Braze\\Model\\CanvasTriggerScheduleUpdatePostBodySchedule', 'json', $context));
                unset($data['schedule']);
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
            if ($object->isInitialized('canvasId') && null !== $object->getCanvasId()) {
                $data['canvas_id'] = $object->getCanvasId();
            }
            if ($object->isInitialized('scheduleId') && null !== $object->getScheduleId()) {
                $data['schedule_id'] = $object->getScheduleId();
            }
            if ($object->isInitialized('schedule') && null !== $object->getSchedule()) {
                $data['schedule'] = $this->normalizer->normalize($object->getSchedule(), 'json', $context);
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
            return ['Braze\\Model\\CanvasTriggerScheduleUpdatePostBody' => false];
        }
    }
}
