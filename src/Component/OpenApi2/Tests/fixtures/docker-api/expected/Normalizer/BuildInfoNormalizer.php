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
    class BuildInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\Api\Model\BuildInfo::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\Api\Model\BuildInfo::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\Api\Model\BuildInfo();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Docker\Api\Validator\BuildInfoConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
            }
            if (\array_key_exists('stream', $data)) {
                $object->setStream($data['stream']);
            }
            if (\array_key_exists('error', $data)) {
                $object->setError($data['error']);
            }
            if (\array_key_exists('errorDetail', $data)) {
                $object->setErrorDetail($this->denormalizer->denormalize($data['errorDetail'], \Docker\Api\Model\ErrorDetail::class, 'json', $context));
            }
            if (\array_key_exists('status', $data)) {
                $object->setStatus($data['status']);
            }
            if (\array_key_exists('progress', $data)) {
                $object->setProgress($data['progress']);
            }
            if (\array_key_exists('progressDetail', $data)) {
                $object->setProgressDetail($this->denormalizer->denormalize($data['progressDetail'], \Docker\Api\Model\ProgressDetail::class, 'json', $context));
            }
            if (\array_key_exists('aux', $data)) {
                $object->setAux($this->denormalizer->denormalize($data['aux'], \Docker\Api\Model\ImageID::class, 'json', $context));
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('stream') && null !== $object->getStream()) {
                $data['stream'] = $object->getStream();
            }
            if ($object->isInitialized('error') && null !== $object->getError()) {
                $data['error'] = $object->getError();
            }
            if ($object->isInitialized('errorDetail') && null !== $object->getErrorDetail()) {
                $data['errorDetail'] = $this->normalizer->normalize($object->getErrorDetail(), 'json', $context);
            }
            if ($object->isInitialized('status') && null !== $object->getStatus()) {
                $data['status'] = $object->getStatus();
            }
            if ($object->isInitialized('progress') && null !== $object->getProgress()) {
                $data['progress'] = $object->getProgress();
            }
            if ($object->isInitialized('progressDetail') && null !== $object->getProgressDetail()) {
                $data['progressDetail'] = $this->normalizer->normalize($object->getProgressDetail(), 'json', $context);
            }
            if ($object->isInitialized('aux') && null !== $object->getAux()) {
                $data['aux'] = $this->normalizer->normalize($object->getAux(), 'json', $context);
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Docker\Api\Validator\BuildInfoConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\Api\Model\BuildInfo::class => false];
        }
    }
} else {
    class BuildInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\Api\Model\BuildInfo::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\Api\Model\BuildInfo::class;
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
            $object = new \Docker\Api\Model\BuildInfo();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Docker\Api\Validator\BuildInfoConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
            }
            if (\array_key_exists('stream', $data)) {
                $object->setStream($data['stream']);
            }
            if (\array_key_exists('error', $data)) {
                $object->setError($data['error']);
            }
            if (\array_key_exists('errorDetail', $data)) {
                $object->setErrorDetail($this->denormalizer->denormalize($data['errorDetail'], \Docker\Api\Model\ErrorDetail::class, 'json', $context));
            }
            if (\array_key_exists('status', $data)) {
                $object->setStatus($data['status']);
            }
            if (\array_key_exists('progress', $data)) {
                $object->setProgress($data['progress']);
            }
            if (\array_key_exists('progressDetail', $data)) {
                $object->setProgressDetail($this->denormalizer->denormalize($data['progressDetail'], \Docker\Api\Model\ProgressDetail::class, 'json', $context));
            }
            if (\array_key_exists('aux', $data)) {
                $object->setAux($this->denormalizer->denormalize($data['aux'], \Docker\Api\Model\ImageID::class, 'json', $context));
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('stream') && null !== $object->getStream()) {
                $data['stream'] = $object->getStream();
            }
            if ($object->isInitialized('error') && null !== $object->getError()) {
                $data['error'] = $object->getError();
            }
            if ($object->isInitialized('errorDetail') && null !== $object->getErrorDetail()) {
                $data['errorDetail'] = $this->normalizer->normalize($object->getErrorDetail(), 'json', $context);
            }
            if ($object->isInitialized('status') && null !== $object->getStatus()) {
                $data['status'] = $object->getStatus();
            }
            if ($object->isInitialized('progress') && null !== $object->getProgress()) {
                $data['progress'] = $object->getProgress();
            }
            if ($object->isInitialized('progressDetail') && null !== $object->getProgressDetail()) {
                $data['progressDetail'] = $this->normalizer->normalize($object->getProgressDetail(), 'json', $context);
            }
            if ($object->isInitialized('aux') && null !== $object->getAux()) {
                $data['aux'] = $this->normalizer->normalize($object->getAux(), 'json', $context);
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Docker\Api\Validator\BuildInfoConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\Api\Model\BuildInfo::class => false];
        }
    }
}