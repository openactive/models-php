<?php

namespace OpenActive\Rpde\Exceptions;

use Exception;

/**
 *
 */
class IncompleteItemsDataException extends Exception
{
    /**
     * The default message for the exception.
     *
     * @var string
     */
    protected static $defaultMessage = "All RPDE feed items must include id, modified, state, and kind.";

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
