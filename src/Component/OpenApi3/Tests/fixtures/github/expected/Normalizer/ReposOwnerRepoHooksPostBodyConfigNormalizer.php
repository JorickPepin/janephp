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
    class ReposOwnerRepoHooksPostBodyConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Github\Model\ReposOwnerRepoHooksPostBodyConfig::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Github\Model\ReposOwnerRepoHooksPostBodyConfig::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Github\Model\ReposOwnerRepoHooksPostBodyConfig();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ReposOwnerRepoHooksPostBodyConfigConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('url', $data)) {
                $object->setUrl($data['url']);
                unset($data['url']);
            }
            if (\array_key_exists('content_type', $data)) {
                $object->setContentType($data['content_type']);
                unset($data['content_type']);
            }
            if (\array_key_exists('secret', $data)) {
                $object->setSecret($data['secret']);
                unset($data['secret']);
            }
            if (\array_key_exists('insecure_ssl', $data)) {
                $object->setInsecureSsl($data['insecure_ssl']);
                unset($data['insecure_ssl']);
            }
            if (\array_key_exists('token', $data)) {
                $object->setToken($data['token']);
                unset($data['token']);
            }
            if (\array_key_exists('digest', $data)) {
                $object->setDigest($data['digest']);
                unset($data['digest']);
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
            $data['url'] = $object->getUrl();
            if ($object->isInitialized('contentType') && null !== $object->getContentType()) {
                $data['content_type'] = $object->getContentType();
            }
            if ($object->isInitialized('secret') && null !== $object->getSecret()) {
                $data['secret'] = $object->getSecret();
            }
            if ($object->isInitialized('insecureSsl') && null !== $object->getInsecureSsl()) {
                $data['insecure_ssl'] = $object->getInsecureSsl();
            }
            if ($object->isInitialized('token') && null !== $object->getToken()) {
                $data['token'] = $object->getToken();
            }
            if ($object->isInitialized('digest') && null !== $object->getDigest()) {
                $data['digest'] = $object->getDigest();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ReposOwnerRepoHooksPostBodyConfigConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Github\Model\ReposOwnerRepoHooksPostBodyConfig::class => false];
        }
    }
} else {
    class ReposOwnerRepoHooksPostBodyConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Github\Model\ReposOwnerRepoHooksPostBodyConfig::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Github\Model\ReposOwnerRepoHooksPostBodyConfig::class;
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
            $object = new \Github\Model\ReposOwnerRepoHooksPostBodyConfig();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ReposOwnerRepoHooksPostBodyConfigConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('url', $data)) {
                $object->setUrl($data['url']);
                unset($data['url']);
            }
            if (\array_key_exists('content_type', $data)) {
                $object->setContentType($data['content_type']);
                unset($data['content_type']);
            }
            if (\array_key_exists('secret', $data)) {
                $object->setSecret($data['secret']);
                unset($data['secret']);
            }
            if (\array_key_exists('insecure_ssl', $data)) {
                $object->setInsecureSsl($data['insecure_ssl']);
                unset($data['insecure_ssl']);
            }
            if (\array_key_exists('token', $data)) {
                $object->setToken($data['token']);
                unset($data['token']);
            }
            if (\array_key_exists('digest', $data)) {
                $object->setDigest($data['digest']);
                unset($data['digest']);
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
            $data['url'] = $object->getUrl();
            if ($object->isInitialized('contentType') && null !== $object->getContentType()) {
                $data['content_type'] = $object->getContentType();
            }
            if ($object->isInitialized('secret') && null !== $object->getSecret()) {
                $data['secret'] = $object->getSecret();
            }
            if ($object->isInitialized('insecureSsl') && null !== $object->getInsecureSsl()) {
                $data['insecure_ssl'] = $object->getInsecureSsl();
            }
            if ($object->isInitialized('token') && null !== $object->getToken()) {
                $data['token'] = $object->getToken();
            }
            if ($object->isInitialized('digest') && null !== $object->getDigest()) {
                $data['digest'] = $object->getDigest();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ReposOwnerRepoHooksPostBodyConfigConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Github\Model\ReposOwnerRepoHooksPostBodyConfig::class => false];
        }
    }
}