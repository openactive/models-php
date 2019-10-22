<?php

namespace OpenActive\Rpde\Exceptions;

use Exception;

/**
 *
 */
class ModifiedIdItemsOrderException extends Exception
{
    /**
     * The default message for the exception.
     *
     * @var string
     */
    protected static $defaultMessage = "Items must be ordered first by 'modified', then by 'id'. Please check the RPDE specification and ensure you are using the correct query for your ordering strategy.";

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
