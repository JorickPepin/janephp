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
    class UserSearchAndAggregationBaseRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \PicturePark\API\Model\UserSearchAndAggregationBaseRequest::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === PicturePark\API\Model\UserSearchAndAggregationBaseRequest::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\UserSearchAndAggregationBaseRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('searchString', $data) && $data['searchString'] !== null) {
                $object->setSearchString($data['searchString']);
            }
            elseif (\array_key_exists('searchString', $data) && $data['searchString'] === null) {
                $object->setSearchString(null);
            }
            if (\array_key_exists('searchBehaviors', $data) && $data['searchBehaviors'] !== null) {
                $values = [];
                foreach ($data['searchBehaviors'] as $value) {
                    $values[] = $value;
                }
                $object->setSearchBehaviors($values);
            }
            elseif (\array_key_exists('searchBehaviors', $data) && $data['searchBehaviors'] === null) {
                $object->setSearchBehaviors(null);
            }
            if (\array_key_exists('filter', $data) && $data['filter'] !== null) {
                $object->setFilter($data['filter']);
            }
            elseif (\array_key_exists('filter', $data) && $data['filter'] === null) {
                $object->setFilter(null);
            }
            if (\array_key_exists('lifeCycleFilter', $data)) {
                $object->setLifeCycleFilter($data['lifeCycleFilter']);
            }
            if (\array_key_exists('userRightsFilter', $data) && $data['userRightsFilter'] !== null) {
                $values_1 = [];
                foreach ($data['userRightsFilter'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setUserRightsFilter($values_1);
            }
            elseif (\array_key_exists('userRightsFilter', $data) && $data['userRightsFilter'] === null) {
                $object->setUserRightsFilter(null);
            }
            if (\array_key_exists('aggregationFilters', $data) && $data['aggregationFilters'] !== null) {
                $values_2 = [];
                foreach ($data['aggregationFilters'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \PicturePark\API\Model\AggregationFilter::class, 'json', $context);
                }
                $object->setAggregationFilters($values_2);
            }
            elseif (\array_key_exists('aggregationFilters', $data) && $data['aggregationFilters'] === null) {
                $object->setAggregationFilters(null);
            }
            if (\array_key_exists('includeServiceUser', $data)) {
                $object->setIncludeServiceUser($data['includeServiceUser']);
            }
            if (\array_key_exists('editableOnly', $data)) {
                $object->setEditableOnly($data['editableOnly']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('searchString') && null !== $object->getSearchString()) {
                $data['searchString'] = $object->getSearchString();
            }
            if ($object->isInitialized('searchBehaviors') && null !== $object->getSearchBehaviors()) {
                $values = [];
                foreach ($object->getSearchBehaviors() as $value) {
                    $values[] = $value;
                }
                $data['searchBehaviors'] = $values;
            }
            if ($object->isInitialized('filter') && null !== $object->getFilter()) {
                $data['filter'] = $object->getFilter();
            }
            $data['lifeCycleFilter'] = $object->getLifeCycleFilter();
            if ($object->isInitialized('userRightsFilter') && null !== $object->getUserRightsFilter()) {
                $values_1 = [];
                foreach ($object->getUserRightsFilter() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['userRightsFilter'] = $values_1;
            }
            if ($object->isInitialized('aggregationFilters') && null !== $object->getAggregationFilters()) {
                $values_2 = [];
                foreach ($object->getAggregationFilters() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['aggregationFilters'] = $values_2;
            }
            $data['includeServiceUser'] = $object->getIncludeServiceUser();
            $data['editableOnly'] = $object->getEditableOnly();
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\PicturePark\API\Model\UserSearchAndAggregationBaseRequest::class => false];
        }
    }
} else {
    class UserSearchAndAggregationBaseRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \PicturePark\API\Model\UserSearchAndAggregationBaseRequest::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === PicturePark\API\Model\UserSearchAndAggregationBaseRequest::class;
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
            $object = new \PicturePark\API\Model\UserSearchAndAggregationBaseRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('searchString', $data) && $data['searchString'] !== null) {
                $object->setSearchString($data['searchString']);
            }
            elseif (\array_key_exists('searchString', $data) && $data['searchString'] === null) {
                $object->setSearchString(null);
            }
            if (\array_key_exists('searchBehaviors', $data) && $data['searchBehaviors'] !== null) {
                $values = [];
                foreach ($data['searchBehaviors'] as $value) {
                    $values[] = $value;
                }
                $object->setSearchBehaviors($values);
            }
            elseif (\array_key_exists('searchBehaviors', $data) && $data['searchBehaviors'] === null) {
                $object->setSearchBehaviors(null);
            }
            if (\array_key_exists('filter', $data) && $data['filter'] !== null) {
                $object->setFilter($data['filter']);
            }
            elseif (\array_key_exists('filter', $data) && $data['filter'] === null) {
                $object->setFilter(null);
            }
            if (\array_key_exists('lifeCycleFilter', $data)) {
                $object->setLifeCycleFilter($data['lifeCycleFilter']);
            }
            if (\array_key_exists('userRightsFilter', $data) && $data['userRightsFilter'] !== null) {
                $values_1 = [];
                foreach ($data['userRightsFilter'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setUserRightsFilter($values_1);
            }
            elseif (\array_key_exists('userRightsFilter', $data) && $data['userRightsFilter'] === null) {
                $object->setUserRightsFilter(null);
            }
            if (\array_key_exists('aggregationFilters', $data) && $data['aggregationFilters'] !== null) {
                $values_2 = [];
                foreach ($data['aggregationFilters'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \PicturePark\API\Model\AggregationFilter::class, 'json', $context);
                }
                $object->setAggregationFilters($values_2);
            }
            elseif (\array_key_exists('aggregationFilters', $data) && $data['aggregationFilters'] === null) {
                $object->setAggregationFilters(null);
            }
            if (\array_key_exists('includeServiceUser', $data)) {
                $object->setIncludeServiceUser($data['includeServiceUser']);
            }
            if (\array_key_exists('editableOnly', $data)) {
                $object->setEditableOnly($data['editableOnly']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('searchString') && null !== $object->getSearchString()) {
                $data['searchString'] = $object->getSearchString();
            }
            if ($object->isInitialized('searchBehaviors') && null !== $object->getSearchBehaviors()) {
                $values = [];
                foreach ($object->getSearchBehaviors() as $value) {
                    $values[] = $value;
                }
                $data['searchBehaviors'] = $values;
            }
            if ($object->isInitialized('filter') && null !== $object->getFilter()) {
                $data['filter'] = $object->getFilter();
            }
            $data['lifeCycleFilter'] = $object->getLifeCycleFilter();
            if ($object->isInitialized('userRightsFilter') && null !== $object->getUserRightsFilter()) {
                $values_1 = [];
                foreach ($object->getUserRightsFilter() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['userRightsFilter'] = $values_1;
            }
            if ($object->isInitialized('aggregationFilters') && null !== $object->getAggregationFilters()) {
                $values_2 = [];
                foreach ($object->getAggregationFilters() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['aggregationFilters'] = $values_2;
            }
            $data['includeServiceUser'] = $object->getIncludeServiceUser();
            $data['editableOnly'] = $object->getEditableOnly();
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\PicturePark\API\Model\UserSearchAndAggregationBaseRequest::class => false];
        }
    }
}