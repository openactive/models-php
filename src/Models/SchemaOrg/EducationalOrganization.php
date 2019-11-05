<?php

namespace OpenActive\Models\SchemaOrg;

/**
 * This type is derived from [Organization](https://schema.org/Organization), which means that any of this type's properties within schema.org may also be used. Note however the properties on this page must be used in preference if a relevant property is available.
 *
 */
class EducationalOrganization extends \OpenActive\Models\SchemaOrg\Organization
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:EducationalOrganization";
    }

    /**
     * Alumni of an organization.
     *
     *
     * @var Person
     */
    protected $alumni;

    /**
     * @return Person
     */
    public function getAlumni()
    {
        return $this->alumni;
    }

    /**
     * @param Person $alumni
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAlumni($alumni)
    {
        $types = array(
            "Person",
        );

        $alumni = self::checkTypes($alumni, $types);

        $this->alumni = $alumni;
    }

}
