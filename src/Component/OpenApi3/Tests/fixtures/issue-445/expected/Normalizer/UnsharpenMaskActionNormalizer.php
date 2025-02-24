<?php

namespace PicturePark\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use PicturePark\API\Runtime\Normalizer\CheckArray;
use PicturePark\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class UnsharpenMaskActionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \PicturePark\API\Model\UnsharpenMaskAction::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \PicturePark\API\Model\UnsharpenMaskAction::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\UnsharpenMaskAction();
            if (\array_key_exists('amount', $data) && \is_int($data['amount'])) {
                $data['amount'] = (double) $data['amount'];
            }
            if (\array_key_exists('radius', $data) && \is_int($data['radius'])) {
                $data['radius'] = (double) $data['radius'];
            }
            if (\array_key_exists('threshold', $data) && \is_int($data['threshold'])) {
                $data['threshold'] = (double) $data['threshold'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('kind', $data)) {
                $object->setKind($data['kind']);
                unset($data['kind']);
            }
            if (\array_key_exists('amount', $data)) {
                $object->setAmount($data['amount']);
                unset($data['amount']);
            }
            if (\array_key_exists('radius', $data)) {
                $object->setRadius($data['radius']);
                unset($data['radius']);
            }
            if (\array_key_exists('threshold', $data)) {
                $object->setThreshold($data['threshold']);
                unset($data['threshold']);
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
            $data['kind'] = $object->getKind();
            if ($object->isInitialized('amount') && null !== $object->getAmount()) {
                $data['amount'] = $object->getAmount();
            }
            if ($object->isInitialized('radius') && null !== $object->getRadius()) {
                $data['radius'] = $object->getRadius();
            }
            if ($object->isInitialized('threshold') && null !== $object->getThreshold()) {
                $data['threshold'] = $object->getThreshold();
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
            return [\PicturePark\API\Model\UnsharpenMaskAction::class => false];
        }
    }
} else {
    class UnsharpenMaskActionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \PicturePark\API\Model\UnsharpenMaskAction::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \PicturePark\API\Model\UnsharpenMaskAction::class;
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\UnsharpenMaskAction();
            if (\array_key_exists('amount', $data) && \is_int($data['amount'])) {
                $data['amount'] = (double) $data['amount'];
            }
            if (\array_key_exists('radius', $data) && \is_int($data['radius'])) {
                $data['radius'] = (double) $data['radius'];
            }
            if (\array_key_exists('threshold', $data) && \is_int($data['threshold'])) {
                $data['threshold'] = (double) $data['threshold'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('kind', $data)) {
                $object->setKind($data['kind']);
                unset($data['kind']);
            }
            if (\array_key_exists('amount', $data)) {
                $object->setAmount($data['amount']);
                unset($data['amount']);
            }
            if (\array_key_exists('radius', $data)) {
                $object->setRadius($data['radius']);
                unset($data['radius']);
            }
            if (\array_key_exists('threshold', $data)) {
                $object->setThreshold($data['threshold']);
                unset($data['threshold']);
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
            $data['kind'] = $object->getKind();
            if ($object->isInitialized('amount') && null !== $object->getAmount()) {
                $data['amount'] = $object->getAmount();
            }
            if ($object->isInitialized('radius') && null !== $object->getRadius()) {
                $data['radius'] = $object->getRadius();
            }
            if ($object->isInitialized('threshold') && null !== $object->getThreshold()) {
                $data['threshold'] = $object->getThreshold();
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
            return [\PicturePark\API\Model\UnsharpenMaskAction::class => false];
        }
    }
}