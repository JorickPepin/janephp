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
    class ReposOwnerRepoActionsRunsRunIdJobsGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Github\Model\ReposOwnerRepoActionsRunsRunIdJobsGetResponse200::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Github\Model\ReposOwnerRepoActionsRunsRunIdJobsGetResponse200::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Github\Model\ReposOwnerRepoActionsRunsRunIdJobsGetResponse200();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ReposOwnerRepoActionsRunsRunIdJobsGetResponse200Constraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('total_count', $data)) {
                $object->setTotalCount($data['total_count']);
                unset($data['total_count']);
            }
            if (\array_key_exists('jobs', $data)) {
                $values = [];
                foreach ($data['jobs'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Github\Model\Job::class, 'json', $context);
                }
                $object->setJobs($values);
                unset($data['jobs']);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('totalCount') && null !== $object->getTotalCount()) {
                $data['total_count'] = $object->getTotalCount();
            }
            if ($object->isInitialized('jobs') && null !== $object->getJobs()) {
                $values = [];
                foreach ($object->getJobs() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['jobs'] = $values;
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ReposOwnerRepoActionsRunsRunIdJobsGetResponse200Constraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Github\Model\ReposOwnerRepoActionsRunsRunIdJobsGetResponse200::class => false];
        }
    }
} else {
    class ReposOwnerRepoActionsRunsRunIdJobsGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Github\Model\ReposOwnerRepoActionsRunsRunIdJobsGetResponse200::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Github\Model\ReposOwnerRepoActionsRunsRunIdJobsGetResponse200::class;
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
            $object = new \Github\Model\ReposOwnerRepoActionsRunsRunIdJobsGetResponse200();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ReposOwnerRepoActionsRunsRunIdJobsGetResponse200Constraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('total_count', $data)) {
                $object->setTotalCount($data['total_count']);
                unset($data['total_count']);
            }
            if (\array_key_exists('jobs', $data)) {
                $values = [];
                foreach ($data['jobs'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Github\Model\Job::class, 'json', $context);
                }
                $object->setJobs($values);
                unset($data['jobs']);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
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
            if ($object->isInitialized('totalCount') && null !== $object->getTotalCount()) {
                $data['total_count'] = $object->getTotalCount();
            }
            if ($object->isInitialized('jobs') && null !== $object->getJobs()) {
                $values = [];
                foreach ($object->getJobs() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['jobs'] = $values;
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ReposOwnerRepoActionsRunsRunIdJobsGetResponse200Constraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Github\Model\ReposOwnerRepoActionsRunsRunIdJobsGetResponse200::class => false];
        }
    }
}