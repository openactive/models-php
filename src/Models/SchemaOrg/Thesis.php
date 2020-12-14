<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Thesis extends \OpenActive\Models\SchemaOrg\CreativeWork
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Thesis";
    }

    public static function fieldList() {
        $fields = [
            "inSupportOf" => "inSupportOf",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Qualification, candidature, degree, application that Thesis supports.
     *
     *
     * @var string
     */
    protected $inSupportOf;

    /**
     * @return string
     */
    public function getInSupportOf()
    {
        return $this->inSupportOf;
    }

    /**
     * @param string $inSupportOf
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setInSupportOf($inSupportOf)
    {
        $types = [
            "string",
        ];

        $inSupportOf = self::checkTypes($inSupportOf, $types);

        $this->inSupportOf = $inSupportOf;
    }

}
