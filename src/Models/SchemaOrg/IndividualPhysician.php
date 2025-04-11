<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class IndividualPhysician extends \OpenActive\Models\SchemaOrg\Physician
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:IndividualPhysician";
    }

    public static function fieldList() {
        $fields = [
            "practicesAt" => "practicesAt",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A [[MedicalOrganization]] where the [[IndividualPhysician]] practices.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MedicalOrganization|string
     */
    protected $practicesAt;

    /**
     * @return \OpenActive\Models\SchemaOrg\MedicalOrganization|string
     */
    public function getPracticesAt()
    {
        return $this->practicesAt;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MedicalOrganization|string $practicesAt
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPracticesAt($practicesAt)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MedicalOrganization",
            "string",
        ];

        $practicesAt = self::checkTypes($practicesAt, $types);

        $this->practicesAt = $practicesAt;
    }

}
