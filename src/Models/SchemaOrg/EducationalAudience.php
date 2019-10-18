<?php

namespace OpenActive\Models\SchemaOrg;

/**
 * [NOTICE: This is a beta class, and is highly likely to change in future versions of this library.].
 *
 */
class EducationalAudience extends \OpenActive\Models\SchemaOrg\Audience
{
    /**
     * An educationalRole of an EducationalAudience.
     *
     *
     * @var string
     */
    protected $educationalRole;

    /**
     * @return string
     */
    public function getEducationalRole()
    {
        return $this->educationalRole;
    }

    /**
     * @param string $educationalRole
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setEducationalRole($educationalRole)
    {
        $types = array(
            "string",
        );

        $educationalRole = self::checkTypes($educationalRole, $types);

        $this->educationalRole = $educationalRole;
    }

}
