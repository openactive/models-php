<?php

namespace OpenActive\Rpde\Exceptions;

use Exception;

/**
 *
 */
class NextChangeNumbersItemsOrderException extends Exception
{
    /**
     * The default message for the exception.
     *
     * @var string
     */
    protected static $defaultMessage = "Items must be ordered by 'modified'. Please check the RPDE specification and ensure you are using the correct query for your ordering strategy.";

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
