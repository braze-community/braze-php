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

class CanvasTriggerScheduleUpdatePostBodyScheduleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === 'Braze\\Model\\CanvasTriggerScheduleUpdatePostBodySchedule';
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === 'Braze\\Model\\CanvasTriggerScheduleUpdatePostBodySchedule';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Braze\Model\CanvasTriggerScheduleUpdatePostBodySchedule();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('time', $data)) {
            $object->setTime(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['time']));
            unset($data['time']);
        }
        if (\array_key_exists('in_local_time', $data)) {
            $object->setInLocalTime($data['in_local_time']);
            unset($data['in_local_time']);
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
        if ($object->isInitialized('time') && null !== $object->getTime()) {
            $data['time'] = $object->getTime()->format('Y-m-d\\TH:i:sP');
        }
        if ($object->isInitialized('inLocalTime') && null !== $object->getInLocalTime()) {
            $data['in_local_time'] = $object->getInLocalTime();
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
        return ['Braze\\Model\\CanvasTriggerScheduleUpdatePostBodySchedule' => false];
    }
}
