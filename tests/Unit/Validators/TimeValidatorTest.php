<?php

namespace OpenActive\Models\Tests\Unit\Validators;

use OpenActive\Validators\TimeValidator;
use PHPUnit\Framework\TestCase;

class TimeValidatorTest extends TestCase
{
    public function testValidTimeReturnsTrue()
    {
        $this->assertTrue((new TimeValidator())->run("12:00:00"), "TimeValidator should allow valid ISO 8601 times");
    }

    public function testInvalidTimeReturnsFalse()
    {
        $this->assertFalse((new TimeValidator())->run("not a time"), "TimeValidator should disallow invalid ISO 8601 times");
    }
}

?>
