<?php

namespace OpenActive\Rpde\Exceptions;

use Exception;

/**
 *
 */
class DeletedItemsDataException extends Exception
{
    /**
     * The default message for the exception.
     *
     * @var string
     */
    protected static $defaultMessage = "Deleted items must not contain data.";

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
