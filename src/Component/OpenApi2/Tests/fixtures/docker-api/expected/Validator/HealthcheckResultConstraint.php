<?php

namespace Docker\Api\Validator;

class HealthcheckResultConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options): array
    {
        return [new \Symfony\Component\Validator\Constraints\Collection(['fields' => ['Start' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(['0' => 'string'])]), 'End' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(['0' => 'string'])]), 'ExitCode' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(['0' => 'integer'])]), 'Output' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(['0' => 'string'])])], 'allowExtraFields' => true])];
    }
}