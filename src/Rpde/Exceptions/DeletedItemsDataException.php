<?php

namespace OpenActive\Rpde\Exceptions;

/**
 *
 */
class DeletedItemsDataException extends RpdeException
{
    /**
     * The default message for the exception.
     *
     * @var string
     */
    protected static $defaultMessage = "Deleted items must not contain data.";
}
