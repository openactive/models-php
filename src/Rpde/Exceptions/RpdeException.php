<?php

namespace OpenActive\Rpde\Exceptions;

use DomainException;
use OpenActive\Contracts\OpenActiveExceptionInterface;

/**
 *
 */
class RpdeException extends DomainException implements OpenActiveExceptionInterface
{
    /**
     * Create a new exception instance.
     *
     * @param string $message
     * @return void
     */
    public function __construct($message = null)
    {
        parent::__construct($message ? $message : static::$defaultMessage);
    }
}
