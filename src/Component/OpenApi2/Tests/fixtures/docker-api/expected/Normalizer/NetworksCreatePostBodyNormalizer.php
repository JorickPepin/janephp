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
    class NetworksCreatePostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\Api\Model\NetworksCreatePostBody::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === Docker\Api\Model\NetworksCreatePostBody::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\Api\Model\NetworksCreatePostBody();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Docker\Api\Validator\NetworksCreatePostBodyConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Name', $data)) {
                $object->setName($data['Name']);
            }
            if (\array_key_exists('CheckDuplicate', $data)) {
                $object->setCheckDuplicate($data['CheckDuplicate']);
            }
            if (\array_key_exists('Driver', $data)) {
                $object->setDriver($data['Driver']);
            }
            if (\array_key_exists('Internal', $data)) {
                $object->setInternal($data['Internal']);
            }
            if (\array_key_exists('Attachable', $data)) {
                $object->setAttachable($data['Attachable']);
            }
            if (\array_key_exists('Ingress', $data)) {
                $object->setIngress($data['Ingress']);
            }
            if (\array_key_exists('IPAM', $data)) {
                $object->setIPAM($this->denormalizer->denormalize($data['IPAM'], \Docker\Api\Model\IPAM::class, 'json', $context));
            }
            if (\array_key_exists('EnableIPv6', $data)) {
                $object->setEnableIPv6($data['EnableIPv6']);
            }
            if (\array_key_exists('Options', $data)) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Options'] as $key => $value) {
                    $values[$key] = $value;
                }
                $object->setOptions($values);
            }
            if (\array_key_exists('Labels', $data)) {
                $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Labels'] as $key_1 => $value_1) {
                    $values_1[$key_1] = $value_1;
                }
                $object->setLabels($values_1);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['Name'] = $object->getName();
            if ($object->isInitialized('checkDuplicate') && null !== $object->getCheckDuplicate()) {
                $data['CheckDuplicate'] = $object->getCheckDuplicate();
            }
            if ($object->isInitialized('driver') && null !== $object->getDriver()) {
                $data['Driver'] = $object->getDriver();
            }
            if ($object->isInitialized('internal') && null !== $object->getInternal()) {
                $data['Internal'] = $object->getInternal();
            }
            if ($object->isInitialized('attachable') && null !== $object->getAttachable()) {
                $data['Attachable'] = $object->getAttachable();
            }
            if ($object->isInitialized('ingress') && null !== $object->getIngress()) {
                $data['Ingress'] = $object->getIngress();
            }
            if ($object->isInitialized('iPAM') && null !== $object->getIPAM()) {
                $data['IPAM'] = $this->normalizer->normalize($object->getIPAM(), 'json', $context);
            }
            if ($object->isInitialized('enableIPv6') && null !== $object->getEnableIPv6()) {
                $data['EnableIPv6'] = $object->getEnableIPv6();
            }
            if ($object->isInitialized('options') && null !== $object->getOptions()) {
                $values = [];
                foreach ($object->getOptions() as $key => $value) {
                    $values[$key] = $value;
                }
                $data['Options'] = $values;
            }
            if ($object->isInitialized('labels') && null !== $object->getLabels()) {
                $values_1 = [];
                foreach ($object->getLabels() as $key_1 => $value_1) {
                    $values_1[$key_1] = $value_1;
                }
                $data['Labels'] = $values_1;
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Docker\Api\Validator\NetworksCreatePostBodyConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\Api\Model\NetworksCreatePostBody::class => false];
        }
    }
} else {
    class NetworksCreatePostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\Api\Model\NetworksCreatePostBody::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === Docker\Api\Model\NetworksCreatePostBody::class;
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
            $object = new \Docker\Api\Model\NetworksCreatePostBody();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Docker\Api\Validator\NetworksCreatePostBodyConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Name', $data)) {
                $object->setName($data['Name']);
            }
            if (\array_key_exists('CheckDuplicate', $data)) {
                $object->setCheckDuplicate($data['CheckDuplicate']);
            }
            if (\array_key_exists('Driver', $data)) {
                $object->setDriver($data['Driver']);
            }
            if (\array_key_exists('Internal', $data)) {
                $object->setInternal($data['Internal']);
            }
            if (\array_key_exists('Attachable', $data)) {
                $object->setAttachable($data['Attachable']);
            }
            if (\array_key_exists('Ingress', $data)) {
                $object->setIngress($data['Ingress']);
            }
            if (\array_key_exists('IPAM', $data)) {
                $object->setIPAM($this->denormalizer->denormalize($data['IPAM'], \Docker\Api\Model\IPAM::class, 'json', $context));
            }
            if (\array_key_exists('EnableIPv6', $data)) {
                $object->setEnableIPv6($data['EnableIPv6']);
            }
            if (\array_key_exists('Options', $data)) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Options'] as $key => $value) {
                    $values[$key] = $value;
                }
                $object->setOptions($values);
            }
            if (\array_key_exists('Labels', $data)) {
                $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Labels'] as $key_1 => $value_1) {
                    $values_1[$key_1] = $value_1;
                }
                $object->setLabels($values_1);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['Name'] = $object->getName();
            if ($object->isInitialized('checkDuplicate') && null !== $object->getCheckDuplicate()) {
                $data['CheckDuplicate'] = $object->getCheckDuplicate();
            }
            if ($object->isInitialized('driver') && null !== $object->getDriver()) {
                $data['Driver'] = $object->getDriver();
            }
            if ($object->isInitialized('internal') && null !== $object->getInternal()) {
                $data['Internal'] = $object->getInternal();
            }
            if ($object->isInitialized('attachable') && null !== $object->getAttachable()) {
                $data['Attachable'] = $object->getAttachable();
            }
            if ($object->isInitialized('ingress') && null !== $object->getIngress()) {
                $data['Ingress'] = $object->getIngress();
            }
            if ($object->isInitialized('iPAM') && null !== $object->getIPAM()) {
                $data['IPAM'] = $this->normalizer->normalize($object->getIPAM(), 'json', $context);
            }
            if ($object->isInitialized('enableIPv6') && null !== $object->getEnableIPv6()) {
                $data['EnableIPv6'] = $object->getEnableIPv6();
            }
            if ($object->isInitialized('options') && null !== $object->getOptions()) {
                $values = [];
                foreach ($object->getOptions() as $key => $value) {
                    $values[$key] = $value;
                }
                $data['Options'] = $values;
            }
            if ($object->isInitialized('labels') && null !== $object->getLabels()) {
                $values_1 = [];
                foreach ($object->getLabels() as $key_1 => $value_1) {
                    $values_1[$key_1] = $value_1;
                }
                $data['Labels'] = $values_1;
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Docker\Api\Validator\NetworksCreatePostBodyConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\Api\Model\NetworksCreatePostBody::class => false];
        }
    }
}