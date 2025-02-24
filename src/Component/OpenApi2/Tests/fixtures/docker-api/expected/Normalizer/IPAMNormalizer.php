<?php

namespace Docker\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Docker\Api\Runtime\Normalizer\CheckArray;
use Docker\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class IPAMNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\Api\Model\IPAM::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\Api\Model\IPAM::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\Api\Model\IPAM();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Docker\Api\Validator\IPAMConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Driver', $data)) {
                $object->setDriver($data['Driver']);
            }
            if (\array_key_exists('Config', $data)) {
                $values = [];
                foreach ($data['Config'] as $value) {
                    $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                    foreach ($value as $key => $value_1) {
                        $values_1[$key] = $value_1;
                    }
                    $values[] = $values_1;
                }
                $object->setConfig($values);
            }
            if (\array_key_exists('Options', $data)) {
                $values_2 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Options'] as $key_1 => $value_2) {
                    $values_2[$key_1] = $value_2;
                }
                $object->setOptions($values_2);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('driver') && null !== $object->getDriver()) {
                $data['Driver'] = $object->getDriver();
            }
            if ($object->isInitialized('config') && null !== $object->getConfig()) {
                $values = [];
                foreach ($object->getConfig() as $value) {
                    $values_1 = [];
                    foreach ($value as $key => $value_1) {
                        $values_1[$key] = $value_1;
                    }
                    $values[] = $values_1;
                }
                $data['Config'] = $values;
            }
            if ($object->isInitialized('options') && null !== $object->getOptions()) {
                $values_2 = [];
                foreach ($object->getOptions() as $key_1 => $value_2) {
                    $values_2[$key_1] = $value_2;
                }
                $data['Options'] = $values_2;
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Docker\Api\Validator\IPAMConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\Api\Model\IPAM::class => false];
        }
    }
} else {
    class IPAMNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\Api\Model\IPAM::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\Api\Model\IPAM::class;
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
            $object = new \Docker\Api\Model\IPAM();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Docker\Api\Validator\IPAMConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Driver', $data)) {
                $object->setDriver($data['Driver']);
            }
            if (\array_key_exists('Config', $data)) {
                $values = [];
                foreach ($data['Config'] as $value) {
                    $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                    foreach ($value as $key => $value_1) {
                        $values_1[$key] = $value_1;
                    }
                    $values[] = $values_1;
                }
                $object->setConfig($values);
            }
            if (\array_key_exists('Options', $data)) {
                $values_2 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Options'] as $key_1 => $value_2) {
                    $values_2[$key_1] = $value_2;
                }
                $object->setOptions($values_2);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('driver') && null !== $object->getDriver()) {
                $data['Driver'] = $object->getDriver();
            }
            if ($object->isInitialized('config') && null !== $object->getConfig()) {
                $values = [];
                foreach ($object->getConfig() as $value) {
                    $values_1 = [];
                    foreach ($value as $key => $value_1) {
                        $values_1[$key] = $value_1;
                    }
                    $values[] = $values_1;
                }
                $data['Config'] = $values;
            }
            if ($object->isInitialized('options') && null !== $object->getOptions()) {
                $values_2 = [];
                foreach ($object->getOptions() as $key_1 => $value_2) {
                    $values_2[$key_1] = $value_2;
                }
                $data['Options'] = $values_2;
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Docker\Api\Validator\IPAMConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\Api\Model\IPAM::class => false];
        }
    }
}