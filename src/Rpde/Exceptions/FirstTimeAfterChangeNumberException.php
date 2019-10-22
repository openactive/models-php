<?php

namespace OpenActive\Rpde\Exceptions;

/**
 *
 */
class FirstTimeAfterChangeNumberException extends RpdeException
{
    /**
     * The default message for the exception.
     *
     * @var string
     */
    protected static $defaultMessage = "First item in the feed must never have same 'modified' as afterChangeNumber query parameter. Please check the RPDE specification and ensure you are using the correct query for your ordering strategy.";
}
