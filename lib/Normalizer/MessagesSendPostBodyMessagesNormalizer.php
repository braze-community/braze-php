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

class MessagesSendPostBodyMessagesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Braze\Model\MessagesSendPostBodyMessages::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Braze\Model\MessagesSendPostBodyMessages::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Braze\Model\MessagesSendPostBodyMessages();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('android_push', $data)) {
            $object->setAndroidPush($data['android_push']);
            unset($data['android_push']);
        }
        if (\array_key_exists('apple_push', $data)) {
            $object->setApplePush($data['apple_push']);
            unset($data['apple_push']);
        }
        if (\array_key_exists('content_card', $data)) {
            $object->setContentCard($data['content_card']);
            unset($data['content_card']);
        }
        if (\array_key_exists('email', $data)) {
            $object->setEmail($data['email']);
            unset($data['email']);
        }
        if (\array_key_exists('kindle_push', $data)) {
            $object->setKindlePush($data['kindle_push']);
            unset($data['kindle_push']);
        }
        if (\array_key_exists('web_push', $data)) {
            $object->setWebPush($data['web_push']);
            unset($data['web_push']);
        }
        if (\array_key_exists('windows_phone8_push', $data)) {
            $object->setWindowsPhone8Push($data['windows_phone8_push']);
            unset($data['windows_phone8_push']);
        }
        if (\array_key_exists('windows_universal_push', $data)) {
            $object->setWindowsUniversalPush($data['windows_universal_push']);
            unset($data['windows_universal_push']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('androidPush') && null !== $data->getAndroidPush()) {
            $dataArray['android_push'] = $data->getAndroidPush();
        }
        if ($data->isInitialized('applePush') && null !== $data->getApplePush()) {
            $dataArray['apple_push'] = $data->getApplePush();
        }
        if ($data->isInitialized('contentCard') && null !== $data->getContentCard()) {
            $dataArray['content_card'] = $data->getContentCard();
        }
        if ($data->isInitialized('email') && null !== $data->getEmail()) {
            $dataArray['email'] = $data->getEmail();
        }
        if ($data->isInitialized('kindlePush') && null !== $data->getKindlePush()) {
            $dataArray['kindle_push'] = $data->getKindlePush();
        }
        if ($data->isInitialized('webPush') && null !== $data->getWebPush()) {
            $dataArray['web_push'] = $data->getWebPush();
        }
        if ($data->isInitialized('windowsPhone8Push') && null !== $data->getWindowsPhone8Push()) {
            $dataArray['windows_phone8_push'] = $data->getWindowsPhone8Push();
        }
        if ($data->isInitialized('windowsUniversalPush') && null !== $data->getWindowsUniversalPush()) {
            $dataArray['windows_universal_push'] = $data->getWindowsUniversalPush();
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Braze\Model\MessagesSendPostBodyMessages::class => false];
    }
}
