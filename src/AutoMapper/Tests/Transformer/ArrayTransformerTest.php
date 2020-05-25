<?php

namespace Jane\AutoMapper\Tests\Transformer;

use PHPUnit\Framework\TestCase;
use Jane\AutoMapper\Transformer\ArrayTransformer;
use Jane\AutoMapper\Transformer\BuiltinTransformer;
use Symfony\Component\PropertyInfo\Type;

class ArrayTransformerTest extends TestCase
{
    use EvalTransformerTrait;

    public function testArrayToArray(): void
    {
        $transformer = new ArrayTransformer(new BuiltinTransformer(new Type('string'), [new Type('string')]));
        $output = $this->evalTransformer($transformer, ['test']);

        self::assertEquals(['test'], $output);
    }
}
