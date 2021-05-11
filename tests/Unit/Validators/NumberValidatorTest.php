<?php

namespace OpenActive\Models\Tests\Unit\Validators;

use OpenActive\Validators\NumberValidator;
use PHPUnit\Framework\TestCase;

class NumberValidatorTest extends TestCase
{
    /**
     * @dataProvider provideValidNumbers
     */
    public function testHandlesNumbers($number, $coerced)
    {
        $validator = new NumberValidator();
        $this->assertTrue($validator->run($number));
        $this->assertSame($coerced, $validator->coerce($number));
    }

    public function provideValidNumbers()
    {
        return [
            [13.64, 13.64],
            ["13.64", 13.64],
            [13, 13],
            ["13", 13],
            ["-1.982986176", -1.982986176],
        ];
    }

    /**
     * @dataProvider provideInvalidNumbers
     */
    public function testRefusesNonNumerics($nan)
    {
        $validator = new NumberValidator();
        $this->assertFalse($validator->run($nan));
    }

    public function provideInvalidNumbers()
    {
        return [
            ["foo"],
            [false],
            [[]],
            [(object)[]]
        ];
    }
}
