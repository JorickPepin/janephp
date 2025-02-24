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
    class ReposOwnerRepoBranchesBranchProtectionRequiredPullRequestReviewsPatchBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Github\Model\ReposOwnerRepoBranchesBranchProtectionRequiredPullRequestReviewsPatchBody::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Github\Model\ReposOwnerRepoBranchesBranchProtectionRequiredPullRequestReviewsPatchBody::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Github\Model\ReposOwnerRepoBranchesBranchProtectionRequiredPullRequestReviewsPatchBody();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ReposOwnerRepoBranchesBranchProtectionRequiredPullRequestReviewsPatchBodyConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('dismissal_restrictions', $data)) {
                $object->setDismissalRestrictions($this->denormalizer->denormalize($data['dismissal_restrictions'], \Github\Model\ReposOwnerRepoBranchesBranchProtectionRequiredPullRequestReviewsPatchBodyDismissalRestrictions::class, 'json', $context));
                unset($data['dismissal_restrictions']);
            }
            if (\array_key_exists('dismiss_stale_reviews', $data)) {
                $object->setDismissStaleReviews($data['dismiss_stale_reviews']);
                unset($data['dismiss_stale_reviews']);
            }
            if (\array_key_exists('require_code_owner_reviews', $data)) {
                $object->setRequireCodeOwnerReviews($data['require_code_owner_reviews']);
                unset($data['require_code_owner_reviews']);
            }
            if (\array_key_exists('required_approving_review_count', $data)) {
                $object->setRequiredApprovingReviewCount($data['required_approving_review_count']);
                unset($data['required_approving_review_count']);
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
            if ($object->isInitialized('dismissalRestrictions') && null !== $object->getDismissalRestrictions()) {
                $data['dismissal_restrictions'] = $this->normalizer->normalize($object->getDismissalRestrictions(), 'json', $context);
            }
            if ($object->isInitialized('dismissStaleReviews') && null !== $object->getDismissStaleReviews()) {
                $data['dismiss_stale_reviews'] = $object->getDismissStaleReviews();
            }
            if ($object->isInitialized('requireCodeOwnerReviews') && null !== $object->getRequireCodeOwnerReviews()) {
                $data['require_code_owner_reviews'] = $object->getRequireCodeOwnerReviews();
            }
            if ($object->isInitialized('requiredApprovingReviewCount') && null !== $object->getRequiredApprovingReviewCount()) {
                $data['required_approving_review_count'] = $object->getRequiredApprovingReviewCount();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ReposOwnerRepoBranchesBranchProtectionRequiredPullRequestReviewsPatchBodyConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Github\Model\ReposOwnerRepoBranchesBranchProtectionRequiredPullRequestReviewsPatchBody::class => false];
        }
    }
} else {
    class ReposOwnerRepoBranchesBranchProtectionRequiredPullRequestReviewsPatchBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Github\Model\ReposOwnerRepoBranchesBranchProtectionRequiredPullRequestReviewsPatchBody::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Github\Model\ReposOwnerRepoBranchesBranchProtectionRequiredPullRequestReviewsPatchBody::class;
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
            $object = new \Github\Model\ReposOwnerRepoBranchesBranchProtectionRequiredPullRequestReviewsPatchBody();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ReposOwnerRepoBranchesBranchProtectionRequiredPullRequestReviewsPatchBodyConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('dismissal_restrictions', $data)) {
                $object->setDismissalRestrictions($this->denormalizer->denormalize($data['dismissal_restrictions'], \Github\Model\ReposOwnerRepoBranchesBranchProtectionRequiredPullRequestReviewsPatchBodyDismissalRestrictions::class, 'json', $context));
                unset($data['dismissal_restrictions']);
            }
            if (\array_key_exists('dismiss_stale_reviews', $data)) {
                $object->setDismissStaleReviews($data['dismiss_stale_reviews']);
                unset($data['dismiss_stale_reviews']);
            }
            if (\array_key_exists('require_code_owner_reviews', $data)) {
                $object->setRequireCodeOwnerReviews($data['require_code_owner_reviews']);
                unset($data['require_code_owner_reviews']);
            }
            if (\array_key_exists('required_approving_review_count', $data)) {
                $object->setRequiredApprovingReviewCount($data['required_approving_review_count']);
                unset($data['required_approving_review_count']);
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
            if ($object->isInitialized('dismissalRestrictions') && null !== $object->getDismissalRestrictions()) {
                $data['dismissal_restrictions'] = $this->normalizer->normalize($object->getDismissalRestrictions(), 'json', $context);
            }
            if ($object->isInitialized('dismissStaleReviews') && null !== $object->getDismissStaleReviews()) {
                $data['dismiss_stale_reviews'] = $object->getDismissStaleReviews();
            }
            if ($object->isInitialized('requireCodeOwnerReviews') && null !== $object->getRequireCodeOwnerReviews()) {
                $data['require_code_owner_reviews'] = $object->getRequireCodeOwnerReviews();
            }
            if ($object->isInitialized('requiredApprovingReviewCount') && null !== $object->getRequiredApprovingReviewCount()) {
                $data['required_approving_review_count'] = $object->getRequiredApprovingReviewCount();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ReposOwnerRepoBranchesBranchProtectionRequiredPullRequestReviewsPatchBodyConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Github\Model\ReposOwnerRepoBranchesBranchProtectionRequiredPullRequestReviewsPatchBody::class => false];
        }
    }
}