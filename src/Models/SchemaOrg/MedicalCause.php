<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MedicalCause extends \OpenActive\Models\SchemaOrg\MedicalEntity
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MedicalCause";
    }

    public static function fieldList() {
        $fields = [
            "causeOf" => "causeOf",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The condition, complication, symptom, sign, etc. caused.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MedicalEntity|string
     */
    protected $causeOf;

    /**
     * @return \OpenActive\Models\SchemaOrg\MedicalEntity|string
     */
    public function getCauseOf()
    {
        return $this->causeOf;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MedicalEntity|string $causeOf
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCauseOf($causeOf)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MedicalEntity",
            "string",
        ];

        $causeOf = self::checkTypes($causeOf, $types);

        $this->causeOf = $causeOf;
    }

}
