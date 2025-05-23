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

class UsersExportSegmentPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Braze\Model\UsersExportSegmentPostBody::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Braze\Model\UsersExportSegmentPostBody::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Braze\Model\UsersExportSegmentPostBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('segment_id', $data)) {
            $object->setSegmentId($data['segment_id']);
            unset($data['segment_id']);
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

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('segmentId') && null !== $data->getSegmentId()) {
            $dataArray['segment_id'] = $data->getSegmentId();
        }
        if ($data->isInitialized('callbackEndpoint') && null !== $data->getCallbackEndpoint()) {
            $dataArray['callback_endpoint'] = $data->getCallbackEndpoint();
        }
        if ($data->isInitialized('fieldsToExport') && null !== $data->getFieldsToExport()) {
            $values = [];
            foreach ($data->getFieldsToExport() as $value) {
                $values[] = $value;
            }
            $dataArray['fields_to_export'] = $values;
        }
        if ($data->isInitialized('outputFormat') && null !== $data->getOutputFormat()) {
            $dataArray['output_format'] = $data->getOutputFormat();
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Braze\Model\UsersExportSegmentPostBody::class => false];
    }
}
