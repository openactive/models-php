<?php

namespace OpenActive\Rpde\Exceptions;

/**
 *
 */
class ModifiedIdItemsOrderException extends RpdeException
{
    /**
     * The default message for the exception.
     *
     * @var string
     */
    protected static $defaultMessage = "Items must be ordered first by 'modified', then by 'id'. Please check the RPDE specification and ensure you are using the correct query for your ordering strategy.";
}
