<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class EducationalOrganization extends \OpenActive\Models\SchemaOrg\Organization
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:EducationalOrganization";
    }

    public static function fieldList() {
        $fields = [
            "alumni" => "alumni",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Alumni of an organization.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person
     */
    protected $alumni;

    /**
     * @return \OpenActive\Models\SchemaOrg\Person
     */
    public function getAlumni()
    {
        return $this->alumni;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person $alumni
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAlumni($alumni)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
        ];

        $alumni = self::checkTypes($alumni, $types);

        $this->alumni = $alumni;
    }

}
