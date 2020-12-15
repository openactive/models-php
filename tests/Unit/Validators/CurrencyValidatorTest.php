<?php

namespace OpenActive\Models\Tests\Unit\Validators;

use OpenActive\Validators\CurrencyValidator;
use PHPUnit\Framework\TestCase;

class CurrencyValidatorTest extends TestCase
{
    private $validator;

    /**
     * @dataProvider provideCurrencyValues
     */
    public function testValidatesValues($isValid, $value)
    {
        $this->validator = new CurrencyValidator();
        $this->assertEquals($isValid, $this->validator->run($value));
    }

    /**
     * @dataProvider provideCoercedCurrencyValues
     */
    public function testCoercesValues($value, $coerced)
    {
        $this->validator = new CurrencyValidator();
        $this->assertSame($coerced, $this->validator->coerce($value));
    }

    public function provideCurrencyValues()
    {
        return [
            [true, 12.84],
            [true, 150],
            [true, '12.54'],
            [false, true],
            [false, false],
            [false, 'foo'],
            [false, []],
            [false, new \stdClass()]
        ];
    }

    public function provideCoercedCurrencyValues()
    {
        return [
            [12.84, '12.84'],
            [150, '150'],
            ['12.54', '12.54'],
        ];
    }
}
