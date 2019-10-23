<?php

namespace OpenActive\Rpde\Exceptions;

/**
 *
 */
class IncompleteItemsDataException extends RpdeException
{
    /**
     * The default message for the exception.
     *
     * @var string
     */
    protected static $defaultMessage = "All RPDE feed items must include id, modified, state, and kind.";
}
