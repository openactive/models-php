<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class OrganizationRole extends \OpenActive\Models\SchemaOrg\Role
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:OrganizationRole";
    }

    /**
     * A number associated with a role in an organization, for example, the number on an athlete's jersey.
     *
     *
     * @var decimal|null
     */
    protected $numberedPosition;

    /**
     * @return decimal|null
     */
    public function getNumberedPosition()
    {
        return $this->numberedPosition;
    }

    /**
     * @param decimal|null $numberedPosition
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNumberedPosition($numberedPosition)
    {
        $types = array(
            "decimal",
            "null",
        );

        $numberedPosition = self::checkTypes($numberedPosition, $types);

        $this->numberedPosition = $numberedPosition;
    }

}
