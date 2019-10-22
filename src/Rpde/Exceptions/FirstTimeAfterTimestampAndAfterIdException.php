<?php

namespace OpenActive\Rpde\Exceptions;

/**
 *
 */
class FirstTimeAfterTimestampAndAfterIdException extends RpdeException
{
    /**
     * The default message for the exception.
     *
     * @var string
     */
    protected static $defaultMessage = "First item in the feed must never have same 'modified' and 'id' as afterTimestamp and afterId query parameters. Please check the RPDE specification and ensure you are using the correct query for your ordering strategy.";
}
