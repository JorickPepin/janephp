<?php

namespace CreditSafe\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use CreditSafe\API\Runtime\Normalizer\CheckArray;
use CreditSafe\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class PeopleSearchSuccessResultDirectorsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \CreditSafe\API\Model\PeopleSearchSuccessResultDirectorsItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \CreditSafe\API\Model\PeopleSearchSuccessResultDirectorsItem::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CreditSafe\API\Model\PeopleSearchSuccessResultDirectorsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('peopleId', $data)) {
                $object->setPeopleId($data['peopleId']);
                unset($data['peopleId']);
            }
            if (\array_key_exists('firstName', $data)) {
                $object->setFirstName($data['firstName']);
                unset($data['firstName']);
            }
            if (\array_key_exists('lastName', $data)) {
                $object->setLastName($data['lastName']);
                unset($data['lastName']);
            }
            if (\array_key_exists('country', $data)) {
                $object->setCountry($data['country']);
                unset($data['country']);
            }
            if (\array_key_exists('company', $data)) {
                $object->setCompany($this->denormalizer->denormalize($data['company'], \CreditSafe\API\Model\PeopleSearchSuccessResultDirectorsItemCompany::class, 'json', $context));
                unset($data['company']);
            }
            if (\array_key_exists('address', $data)) {
                $object->setAddress($this->denormalizer->denormalize($data['address'], \CreditSafe\API\Model\PeopleSearchSuccessResultDirectorsItemAddress::class, 'json', $context));
                unset($data['address']);
            }
            if (\array_key_exists('status', $data)) {
                $object->setStatus($data['status']);
                unset($data['status']);
            }
            if (\array_key_exists('dateOfLatestChange', $data)) {
                $object->setDateOfLatestChange($data['dateOfLatestChange']);
                unset($data['dateOfLatestChange']);
            }
            if (\array_key_exists('dateOfBirth', $data)) {
                $object->setDateOfBirth($data['dateOfBirth']);
                unset($data['dateOfBirth']);
            }
            if (\array_key_exists('localDirectorNumber', $data)) {
                $object->setLocalDirectorNumber($data['localDirectorNumber']);
                unset($data['localDirectorNumber']);
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
            if ($object->isInitialized('peopleId') && null !== $object->getPeopleId()) {
                $data['peopleId'] = $object->getPeopleId();
            }
            if ($object->isInitialized('firstName') && null !== $object->getFirstName()) {
                $data['firstName'] = $object->getFirstName();
            }
            if ($object->isInitialized('lastName') && null !== $object->getLastName()) {
                $data['lastName'] = $object->getLastName();
            }
            if ($object->isInitialized('country') && null !== $object->getCountry()) {
                $data['country'] = $object->getCountry();
            }
            if ($object->isInitialized('company') && null !== $object->getCompany()) {
                $data['company'] = $this->normalizer->normalize($object->getCompany(), 'json', $context);
            }
            if ($object->isInitialized('address') && null !== $object->getAddress()) {
                $data['address'] = $this->normalizer->normalize($object->getAddress(), 'json', $context);
            }
            if ($object->isInitialized('status') && null !== $object->getStatus()) {
                $data['status'] = $object->getStatus();
            }
            if ($object->isInitialized('dateOfLatestChange') && null !== $object->getDateOfLatestChange()) {
                $data['dateOfLatestChange'] = $object->getDateOfLatestChange();
            }
            if ($object->isInitialized('dateOfBirth') && null !== $object->getDateOfBirth()) {
                $data['dateOfBirth'] = $object->getDateOfBirth();
            }
            if ($object->isInitialized('localDirectorNumber') && null !== $object->getLocalDirectorNumber()) {
                $data['localDirectorNumber'] = $object->getLocalDirectorNumber();
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
            return [\CreditSafe\API\Model\PeopleSearchSuccessResultDirectorsItem::class => false];
        }
    }
} else {
    class PeopleSearchSuccessResultDirectorsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \CreditSafe\API\Model\PeopleSearchSuccessResultDirectorsItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \CreditSafe\API\Model\PeopleSearchSuccessResultDirectorsItem::class;
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
            $object = new \CreditSafe\API\Model\PeopleSearchSuccessResultDirectorsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('peopleId', $data)) {
                $object->setPeopleId($data['peopleId']);
                unset($data['peopleId']);
            }
            if (\array_key_exists('firstName', $data)) {
                $object->setFirstName($data['firstName']);
                unset($data['firstName']);
            }
            if (\array_key_exists('lastName', $data)) {
                $object->setLastName($data['lastName']);
                unset($data['lastName']);
            }
            if (\array_key_exists('country', $data)) {
                $object->setCountry($data['country']);
                unset($data['country']);
            }
            if (\array_key_exists('company', $data)) {
                $object->setCompany($this->denormalizer->denormalize($data['company'], \CreditSafe\API\Model\PeopleSearchSuccessResultDirectorsItemCompany::class, 'json', $context));
                unset($data['company']);
            }
            if (\array_key_exists('address', $data)) {
                $object->setAddress($this->denormalizer->denormalize($data['address'], \CreditSafe\API\Model\PeopleSearchSuccessResultDirectorsItemAddress::class, 'json', $context));
                unset($data['address']);
            }
            if (\array_key_exists('status', $data)) {
                $object->setStatus($data['status']);
                unset($data['status']);
            }
            if (\array_key_exists('dateOfLatestChange', $data)) {
                $object->setDateOfLatestChange($data['dateOfLatestChange']);
                unset($data['dateOfLatestChange']);
            }
            if (\array_key_exists('dateOfBirth', $data)) {
                $object->setDateOfBirth($data['dateOfBirth']);
                unset($data['dateOfBirth']);
            }
            if (\array_key_exists('localDirectorNumber', $data)) {
                $object->setLocalDirectorNumber($data['localDirectorNumber']);
                unset($data['localDirectorNumber']);
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
            if ($object->isInitialized('peopleId') && null !== $object->getPeopleId()) {
                $data['peopleId'] = $object->getPeopleId();
            }
            if ($object->isInitialized('firstName') && null !== $object->getFirstName()) {
                $data['firstName'] = $object->getFirstName();
            }
            if ($object->isInitialized('lastName') && null !== $object->getLastName()) {
                $data['lastName'] = $object->getLastName();
            }
            if ($object->isInitialized('country') && null !== $object->getCountry()) {
                $data['country'] = $object->getCountry();
            }
            if ($object->isInitialized('company') && null !== $object->getCompany()) {
                $data['company'] = $this->normalizer->normalize($object->getCompany(), 'json', $context);
            }
            if ($object->isInitialized('address') && null !== $object->getAddress()) {
                $data['address'] = $this->normalizer->normalize($object->getAddress(), 'json', $context);
            }
            if ($object->isInitialized('status') && null !== $object->getStatus()) {
                $data['status'] = $object->getStatus();
            }
            if ($object->isInitialized('dateOfLatestChange') && null !== $object->getDateOfLatestChange()) {
                $data['dateOfLatestChange'] = $object->getDateOfLatestChange();
            }
            if ($object->isInitialized('dateOfBirth') && null !== $object->getDateOfBirth()) {
                $data['dateOfBirth'] = $object->getDateOfBirth();
            }
            if ($object->isInitialized('localDirectorNumber') && null !== $object->getLocalDirectorNumber()) {
                $data['localDirectorNumber'] = $object->getLocalDirectorNumber();
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
            return [\CreditSafe\API\Model\PeopleSearchSuccessResultDirectorsItem::class => false];
        }
    }
}