<?php

namespace Github\Validator;

class ProtectedBranchRequiredPullRequestReviewsConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options): array
    {
        return [new \Symfony\Component\Validator\Constraints\Count(['min' => 0, 'minMessage' => 'This array has not enough properties. It should have {{ limit }} properties or more.']), new \Symfony\Component\Validator\Constraints\NotNull(['message' => 'This value should not be null.']), new \Symfony\Component\Validator\Constraints\Collection(['fields' => ['url' => new \Symfony\Component\Validator\Constraints\Required([new \Symfony\Component\Validator\Constraints\Length(['min' => 0, 'minMessage' => 'This value is too short. It should have {{ limit }} characters or more.']), new \Symfony\Component\Validator\Constraints\Type(['0' => 'string']), new \Symfony\Component\Validator\Constraints\NotNull(['message' => 'This value should not be null.'])]), 'dismiss_stale_reviews' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(['0' => 'bool']), new \Symfony\Component\Validator\Constraints\NotNull(['message' => 'This value should not be null.'])]), 'require_code_owner_reviews' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(['0' => 'bool']), new \Symfony\Component\Validator\Constraints\NotNull(['message' => 'This value should not be null.'])]), 'required_approving_review_count' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(['0' => 'integer']), new \Symfony\Component\Validator\Constraints\NotNull(['message' => 'This value should not be null.'])]), 'dismissal_restrictions' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Count(['min' => 0, 'minMessage' => 'This array has not enough properties. It should have {{ limit }} properties or more.']), new \Symfony\Component\Validator\Constraints\NotNull(['message' => 'This value should not be null.'])])], 'allowExtraFields' => true])];
    }
}