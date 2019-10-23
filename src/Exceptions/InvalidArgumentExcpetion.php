<?php

namespace OpenActive\Exceptions;

use OpenActive\Contracts\OpenActiveExceptionInterface;
use InvalidArgumentException as BaseInvalidArgumentException;

class InvalidArgumentException extends BaseInvalidArgumentException implements OpenActiveExceptionInterface
{
    //
}
