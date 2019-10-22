<?php

namespace OpenActive\Rpde\Exceptions;

/**
 *
 */
class NextChangeNumbersItemsOrderException extends RpdeException
{
    /**
     * The default message for the exception.
     *
     * @var string
     */
    protected static $defaultMessage = "Items must be ordered by 'modified'. Please check the RPDE specification and ensure you are using the correct query for your ordering strategy.";
}
