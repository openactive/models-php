<?php

namespace OpenActive\Rpde\Exceptions;

use Exception;

/**
 *
 */
class FirstTimeAfterChangeNumberException extends Exception
{
    /**
     * The default message for the exception.
     *
     * @var string
     */
    protected static $defaultMessage = "First item in the feed must never have same 'modified' as afterChangeNumber query parameter. Please check the RPDE specification and ensure you are using the correct query for your ordering strategy.";

    /**
     * Create a new exception instance.
     *
     * @param string $message
     * @return void
     */
    function __construct($message = null)
    {
        parent::__construct($message ? $message : static::$defaultMessage);
    }
}
