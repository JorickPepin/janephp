<?php

namespace Jane\Component\OpenApi2\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi2\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi2\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class PetNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Jane\Component\OpenApi2\Tests\Expected\Model\Pet::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Jane\Component\OpenApi2\Tests\Expected\Model\Pet::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (array_key_exists('petType', $data) and 'Cat' === $data['petType']) {
                return $this->denormalizer->denormalize($data, 'Jane\Component\OpenApi2\Tests\Expected\Model\Cat', $format, $context);
            }
            if (array_key_exists('petType', $data) and 'Dog' === $data['petType']) {
                return $this->denormalizer->denormalize($data, 'Jane\Component\OpenApi2\Tests\Expected\Model\Dog', $format, $context);
            }
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Jane\Component\OpenApi2\Tests\Expected\Model\Pet();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
            }
            if (\array_key_exists('petType', $data)) {
                $object->setPetType($data['petType']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if (null !== $object->getPetType() and 'Cat' === $object->getPetType()) {
                return $this->normalizer->normalize($object, $format, $context);
            }
            if (null !== $object->getPetType() and 'Dog' === $object->getPetType()) {
                return $this->normalizer->normalize($object, $format, $context);
            }
            $data['name'] = $object->getName();
            $data['petType'] = $object->getPetType();
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Jane\Component\OpenApi2\Tests\Expected\Model\Pet::class => false];
        }
    }
} else {
    class PetNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Jane\Component\OpenApi2\Tests\Expected\Model\Pet::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Jane\Component\OpenApi2\Tests\Expected\Model\Pet::class;
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (array_key_exists('petType', $data) and 'Cat' === $data['petType']) {
                return $this->denormalizer->denormalize($data, 'Jane\Component\OpenApi2\Tests\Expected\Model\Cat', $format, $context);
            }
            if (array_key_exists('petType', $data) and 'Dog' === $data['petType']) {
                return $this->denormalizer->denormalize($data, 'Jane\Component\OpenApi2\Tests\Expected\Model\Dog', $format, $context);
            }
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Jane\Component\OpenApi2\Tests\Expected\Model\Pet();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
            }
            if (\array_key_exists('petType', $data)) {
                $object->setPetType($data['petType']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if (null !== $object->getPetType() and 'Cat' === $object->getPetType()) {
                return $this->normalizer->normalize($object, $format, $context);
            }
            if (null !== $object->getPetType() and 'Dog' === $object->getPetType()) {
                return $this->normalizer->normalize($object, $format, $context);
            }
            $data['name'] = $object->getName();
            $data['petType'] = $object->getPetType();
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Jane\Component\OpenApi2\Tests\Expected\Model\Pet::class => false];
        }
    }
}