<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Error extends \OpenActive\Models\SchemaOrg\InstantaneousEvent
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Error";
    }

    public static function fieldList() {
        $fields = [
            "errorCode" => "errorCode",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Application or platform dependant error code.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DefinedTerm|int|\OpenActive\Enums\SchemaOrg\StatusEnumeration|string|null
     */
    protected $errorCode;

    /**
     * @return \OpenActive\Models\SchemaOrg\DefinedTerm|int|\OpenActive\Enums\SchemaOrg\StatusEnumeration|string|null
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\DefinedTerm|int|\OpenActive\Enums\SchemaOrg\StatusEnumeration|string|null $errorCode
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setErrorCode($errorCode)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\DefinedTerm",
            "int",
            "\OpenActive\Enums\SchemaOrg\StatusEnumeration",
            "string",
            "null",
        ];

        $errorCode = self::checkTypes($errorCode, $types);

        $this->errorCode = $errorCode;
    }

}
