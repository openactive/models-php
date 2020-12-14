<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class DrugLegalStatus extends \OpenActive\Models\SchemaOrg\MedicalIntangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:DrugLegalStatus";
    }

    public static function fieldList() {
        $fields = [
            "applicableLocation" => "applicableLocation",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The location in which the status applies.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\AdministrativeArea
     */
    protected $applicableLocation;

    /**
     * @return \OpenActive\Models\SchemaOrg\AdministrativeArea
     */
    public function getApplicableLocation()
    {
        return $this->applicableLocation;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\AdministrativeArea $applicableLocation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setApplicableLocation($applicableLocation)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\AdministrativeArea",
        ];

        $applicableLocation = self::checkTypes($applicableLocation, $types);

        $this->applicableLocation = $applicableLocation;
    }

}
