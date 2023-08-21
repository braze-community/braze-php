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

class TransactionalV1CampaignsCampaignIdSendPostBodyTriggerPropertiesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === 'Braze\\Model\\TransactionalV1CampaignsCampaignIdSendPostBodyTriggerProperties';
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === 'Braze\\Model\\TransactionalV1CampaignsCampaignIdSendPostBodyTriggerProperties';
    }

    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Braze\Model\TransactionalV1CampaignsCampaignIdSendPostBodyTriggerProperties();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('example_string_property', $data)) {
            $object->setExampleStringProperty($data['example_string_property']);
            unset($data['example_string_property']);
        }
        if (\array_key_exists('example_integer_property', $data)) {
            $object->setExampleIntegerProperty($data['example_integer_property']);
            unset($data['example_integer_property']);
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
        if ($object->isInitialized('exampleStringProperty') && null !== $object->getExampleStringProperty()) {
            $data['example_string_property'] = $object->getExampleStringProperty();
        }
        if ($object->isInitialized('exampleIntegerProperty') && null !== $object->getExampleIntegerProperty()) {
            $data['example_integer_property'] = $object->getExampleIntegerProperty();
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
        return ['Braze\\Model\\TransactionalV1CampaignsCampaignIdSendPostBodyTriggerProperties' => false];
    }
}