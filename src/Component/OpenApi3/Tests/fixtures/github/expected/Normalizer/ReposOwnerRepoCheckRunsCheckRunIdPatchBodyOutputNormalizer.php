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
    class ReposOwnerRepoCheckRunsCheckRunIdPatchBodyOutputNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Github\Model\ReposOwnerRepoCheckRunsCheckRunIdPatchBodyOutput::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Github\Model\ReposOwnerRepoCheckRunsCheckRunIdPatchBodyOutput::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Github\Model\ReposOwnerRepoCheckRunsCheckRunIdPatchBodyOutput();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ReposOwnerRepoCheckRunsCheckRunIdPatchBodyOutputConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('title', $data)) {
                $object->setTitle($data['title']);
                unset($data['title']);
            }
            if (\array_key_exists('summary', $data)) {
                $object->setSummary($data['summary']);
                unset($data['summary']);
            }
            if (\array_key_exists('text', $data)) {
                $object->setText($data['text']);
                unset($data['text']);
            }
            if (\array_key_exists('annotations', $data)) {
                $values = [];
                foreach ($data['annotations'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Github\Model\ReposOwnerRepoCheckRunsCheckRunIdPatchBodyOutputAnnotationsItem::class, 'json', $context);
                }
                $object->setAnnotations($values);
                unset($data['annotations']);
            }
            if (\array_key_exists('images', $data)) {
                $values_1 = [];
                foreach ($data['images'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \Github\Model\ReposOwnerRepoCheckRunsCheckRunIdPatchBodyOutputImagesItem::class, 'json', $context);
                }
                $object->setImages($values_1);
                unset($data['images']);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('title') && null !== $object->getTitle()) {
                $data['title'] = $object->getTitle();
            }
            $data['summary'] = $object->getSummary();
            if ($object->isInitialized('text') && null !== $object->getText()) {
                $data['text'] = $object->getText();
            }
            if ($object->isInitialized('annotations') && null !== $object->getAnnotations()) {
                $values = [];
                foreach ($object->getAnnotations() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['annotations'] = $values;
            }
            if ($object->isInitialized('images') && null !== $object->getImages()) {
                $values_1 = [];
                foreach ($object->getImages() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['images'] = $values_1;
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ReposOwnerRepoCheckRunsCheckRunIdPatchBodyOutputConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Github\Model\ReposOwnerRepoCheckRunsCheckRunIdPatchBodyOutput::class => false];
        }
    }
} else {
    class ReposOwnerRepoCheckRunsCheckRunIdPatchBodyOutputNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Github\Model\ReposOwnerRepoCheckRunsCheckRunIdPatchBodyOutput::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Github\Model\ReposOwnerRepoCheckRunsCheckRunIdPatchBodyOutput::class;
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
            $object = new \Github\Model\ReposOwnerRepoCheckRunsCheckRunIdPatchBodyOutput();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ReposOwnerRepoCheckRunsCheckRunIdPatchBodyOutputConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('title', $data)) {
                $object->setTitle($data['title']);
                unset($data['title']);
            }
            if (\array_key_exists('summary', $data)) {
                $object->setSummary($data['summary']);
                unset($data['summary']);
            }
            if (\array_key_exists('text', $data)) {
                $object->setText($data['text']);
                unset($data['text']);
            }
            if (\array_key_exists('annotations', $data)) {
                $values = [];
                foreach ($data['annotations'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Github\Model\ReposOwnerRepoCheckRunsCheckRunIdPatchBodyOutputAnnotationsItem::class, 'json', $context);
                }
                $object->setAnnotations($values);
                unset($data['annotations']);
            }
            if (\array_key_exists('images', $data)) {
                $values_1 = [];
                foreach ($data['images'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \Github\Model\ReposOwnerRepoCheckRunsCheckRunIdPatchBodyOutputImagesItem::class, 'json', $context);
                }
                $object->setImages($values_1);
                unset($data['images']);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
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
            if ($object->isInitialized('title') && null !== $object->getTitle()) {
                $data['title'] = $object->getTitle();
            }
            $data['summary'] = $object->getSummary();
            if ($object->isInitialized('text') && null !== $object->getText()) {
                $data['text'] = $object->getText();
            }
            if ($object->isInitialized('annotations') && null !== $object->getAnnotations()) {
                $values = [];
                foreach ($object->getAnnotations() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['annotations'] = $values;
            }
            if ($object->isInitialized('images') && null !== $object->getImages()) {
                $values_1 = [];
                foreach ($object->getImages() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['images'] = $values_1;
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ReposOwnerRepoCheckRunsCheckRunIdPatchBodyOutputConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Github\Model\ReposOwnerRepoCheckRunsCheckRunIdPatchBodyOutput::class => false];
        }
    }
}