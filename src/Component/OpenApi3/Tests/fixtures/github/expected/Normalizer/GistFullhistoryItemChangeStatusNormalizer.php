<?php

namespace Github\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Github\Runtime\Normalizer\CheckArray;
use Github\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class GistFullhistoryItemChangeStatusNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Github\Model\GistFullhistoryItemChangeStatus::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Github\Model\GistFullhistoryItemChangeStatus::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Github\Model\GistFullhistoryItemChangeStatus();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\GistFullhistoryItemChangeStatusConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('deletions', $data)) {
                $object->setDeletions($data['deletions']);
                unset($data['deletions']);
            }
            if (\array_key_exists('additions', $data)) {
                $object->setAdditions($data['additions']);
                unset($data['additions']);
            }
            if (\array_key_exists('total', $data)) {
                $object->setTotal($data['total']);
                unset($data['total']);
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
            if ($object->isInitialized('deletions') && null !== $object->getDeletions()) {
                $data['deletions'] = $object->getDeletions();
            }
            if ($object->isInitialized('additions') && null !== $object->getAdditions()) {
                $data['additions'] = $object->getAdditions();
            }
            if ($object->isInitialized('total') && null !== $object->getTotal()) {
                $data['total'] = $object->getTotal();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\GistFullhistoryItemChangeStatusConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Github\Model\GistFullhistoryItemChangeStatus::class => false];
        }
    }
} else {
    class GistFullhistoryItemChangeStatusNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Github\Model\GistFullhistoryItemChangeStatus::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Github\Model\GistFullhistoryItemChangeStatus::class;
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
            $object = new \Github\Model\GistFullhistoryItemChangeStatus();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\GistFullhistoryItemChangeStatusConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('deletions', $data)) {
                $object->setDeletions($data['deletions']);
                unset($data['deletions']);
            }
            if (\array_key_exists('additions', $data)) {
                $object->setAdditions($data['additions']);
                unset($data['additions']);
            }
            if (\array_key_exists('total', $data)) {
                $object->setTotal($data['total']);
                unset($data['total']);
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
            if ($object->isInitialized('deletions') && null !== $object->getDeletions()) {
                $data['deletions'] = $object->getDeletions();
            }
            if ($object->isInitialized('additions') && null !== $object->getAdditions()) {
                $data['additions'] = $object->getAdditions();
            }
            if ($object->isInitialized('total') && null !== $object->getTotal()) {
                $data['total'] = $object->getTotal();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\GistFullhistoryItemChangeStatusConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Github\Model\GistFullhistoryItemChangeStatus::class => false];
        }
    }
}