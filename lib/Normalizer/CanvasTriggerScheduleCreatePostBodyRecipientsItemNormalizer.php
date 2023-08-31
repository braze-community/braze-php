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

class CanvasTriggerScheduleCreatePostBodyRecipientsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === 'Braze\\Model\\CanvasTriggerScheduleCreatePostBodyRecipientsItem';
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === 'Braze\\Model\\CanvasTriggerScheduleCreatePostBodyRecipientsItem';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Braze\Model\CanvasTriggerScheduleCreatePostBodyRecipientsItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('user_alias', $data)) {
            $object->setUserAlias($data['user_alias']);
            unset($data['user_alias']);
        }
        if (\array_key_exists('external_user_id', $data)) {
            $object->setExternalUserId($data['external_user_id']);
            unset($data['external_user_id']);
        }
        if (\array_key_exists('trigger_properties', $data)) {
            $object->setTriggerProperties($data['trigger_properties']);
            unset($data['trigger_properties']);
        }
        if (\array_key_exists('canvas_entry_properties', $data)) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['canvas_entry_properties'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setCanvasEntryProperties($values);
            unset($data['canvas_entry_properties']);
        }
        foreach ($data as $key_1 => $value_1) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_1;
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
        if ($object->isInitialized('userAlias') && null !== $object->getUserAlias()) {
            $data['user_alias'] = $object->getUserAlias();
        }
        if ($object->isInitialized('externalUserId') && null !== $object->getExternalUserId()) {
            $data['external_user_id'] = $object->getExternalUserId();
        }
        if ($object->isInitialized('triggerProperties') && null !== $object->getTriggerProperties()) {
            $data['trigger_properties'] = $object->getTriggerProperties();
        }
        if ($object->isInitialized('canvasEntryProperties') && null !== $object->getCanvasEntryProperties()) {
            $values = [];
            foreach ($object->getCanvasEntryProperties() as $key => $value) {
                $values[$key] = $value;
            }
            $data['canvas_entry_properties'] = $values;
        }
        foreach ($object as $key_1 => $value_1) {
            if (preg_match('/.*/', (string) $key_1)) {
                $data[$key_1] = $value_1;
            }
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['Braze\\Model\\CanvasTriggerScheduleCreatePostBodyRecipientsItem' => false];
    }
}
