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
    class XmpMappingTargetsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \PicturePark\API\Model\XmpMappingTargets::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \PicturePark\API\Model\XmpMappingTargets::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\XmpMappingTargets();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('xmpFields', $data)) {
                $values = [];
                foreach ($data['xmpFields'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \PicturePark\API\Model\XmpField::class, 'json', $context);
                }
                $object->setXmpFields($values);
            }
            if (\array_key_exists('metadataFields', $data)) {
                $values_1 = [];
                foreach ($data['metadataFields'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \PicturePark\API\Model\MetadataField::class, 'json', $context);
                }
                $object->setMetadataFields($values_1);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $values = [];
            foreach ($object->getXmpFields() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['xmpFields'] = $values;
            $values_1 = [];
            foreach ($object->getMetadataFields() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['metadataFields'] = $values_1;
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\PicturePark\API\Model\XmpMappingTargets::class => false];
        }
    }
} else {
    class XmpMappingTargetsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \PicturePark\API\Model\XmpMappingTargets::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \PicturePark\API\Model\XmpMappingTargets::class;
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
            $object = new \PicturePark\API\Model\XmpMappingTargets();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('xmpFields', $data)) {
                $values = [];
                foreach ($data['xmpFields'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \PicturePark\API\Model\XmpField::class, 'json', $context);
                }
                $object->setXmpFields($values);
            }
            if (\array_key_exists('metadataFields', $data)) {
                $values_1 = [];
                foreach ($data['metadataFields'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \PicturePark\API\Model\MetadataField::class, 'json', $context);
                }
                $object->setMetadataFields($values_1);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $values = [];
            foreach ($object->getXmpFields() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['xmpFields'] = $values;
            $values_1 = [];
            foreach ($object->getMetadataFields() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['metadataFields'] = $values_1;
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\PicturePark\API\Model\XmpMappingTargets::class => false];
        }
    }
}