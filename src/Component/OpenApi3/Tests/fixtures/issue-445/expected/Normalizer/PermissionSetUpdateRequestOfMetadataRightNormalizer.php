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
    class PermissionSetUpdateRequestOfMetadataRightNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \PicturePark\API\Model\PermissionSetUpdateRequestOfMetadataRight::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \PicturePark\API\Model\PermissionSetUpdateRequestOfMetadataRight::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\PermissionSetUpdateRequestOfMetadataRight();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('names', $data)) {
                $object->setNames($data['names']);
            }
            if (\array_key_exists('userRolesRights', $data) && $data['userRolesRights'] !== null) {
                $values = [];
                foreach ($data['userRolesRights'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \PicturePark\API\Model\UserRoleRightsOfMetadataRight::class, 'json', $context);
                }
                $object->setUserRolesRights($values);
            }
            elseif (\array_key_exists('userRolesRights', $data) && $data['userRolesRights'] === null) {
                $object->setUserRolesRights(null);
            }
            if (\array_key_exists('userRolesPermissionSetRights', $data) && $data['userRolesPermissionSetRights'] !== null) {
                $values_1 = [];
                foreach ($data['userRolesPermissionSetRights'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \PicturePark\API\Model\UserRoleRightsOfPermissionSetRight::class, 'json', $context);
                }
                $object->setUserRolesPermissionSetRights($values_1);
            }
            elseif (\array_key_exists('userRolesPermissionSetRights', $data) && $data['userRolesPermissionSetRights'] === null) {
                $object->setUserRolesPermissionSetRights(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['names'] = $object->getNames();
            if ($object->isInitialized('userRolesRights') && null !== $object->getUserRolesRights()) {
                $values = [];
                foreach ($object->getUserRolesRights() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['userRolesRights'] = $values;
            }
            if ($object->isInitialized('userRolesPermissionSetRights') && null !== $object->getUserRolesPermissionSetRights()) {
                $values_1 = [];
                foreach ($object->getUserRolesPermissionSetRights() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['userRolesPermissionSetRights'] = $values_1;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\PicturePark\API\Model\PermissionSetUpdateRequestOfMetadataRight::class => false];
        }
    }
} else {
    class PermissionSetUpdateRequestOfMetadataRightNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \PicturePark\API\Model\PermissionSetUpdateRequestOfMetadataRight::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \PicturePark\API\Model\PermissionSetUpdateRequestOfMetadataRight::class;
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
            $object = new \PicturePark\API\Model\PermissionSetUpdateRequestOfMetadataRight();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('names', $data)) {
                $object->setNames($data['names']);
            }
            if (\array_key_exists('userRolesRights', $data) && $data['userRolesRights'] !== null) {
                $values = [];
                foreach ($data['userRolesRights'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \PicturePark\API\Model\UserRoleRightsOfMetadataRight::class, 'json', $context);
                }
                $object->setUserRolesRights($values);
            }
            elseif (\array_key_exists('userRolesRights', $data) && $data['userRolesRights'] === null) {
                $object->setUserRolesRights(null);
            }
            if (\array_key_exists('userRolesPermissionSetRights', $data) && $data['userRolesPermissionSetRights'] !== null) {
                $values_1 = [];
                foreach ($data['userRolesPermissionSetRights'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \PicturePark\API\Model\UserRoleRightsOfPermissionSetRight::class, 'json', $context);
                }
                $object->setUserRolesPermissionSetRights($values_1);
            }
            elseif (\array_key_exists('userRolesPermissionSetRights', $data) && $data['userRolesPermissionSetRights'] === null) {
                $object->setUserRolesPermissionSetRights(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['names'] = $object->getNames();
            if ($object->isInitialized('userRolesRights') && null !== $object->getUserRolesRights()) {
                $values = [];
                foreach ($object->getUserRolesRights() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['userRolesRights'] = $values;
            }
            if ($object->isInitialized('userRolesPermissionSetRights') && null !== $object->getUserRolesPermissionSetRights()) {
                $values_1 = [];
                foreach ($object->getUserRolesPermissionSetRights() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['userRolesPermissionSetRights'] = $values_1;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\PicturePark\API\Model\PermissionSetUpdateRequestOfMetadataRight::class => false];
        }
    }
}