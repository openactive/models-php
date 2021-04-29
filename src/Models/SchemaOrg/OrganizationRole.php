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

    public static function fieldList() {
        $fields = [
            "numberedPosition" => "numberedPosition",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A number associated with a role in an organization, for example, the number on an athlete's jersey.
     *
     *
     * @var Number|null
     */
    protected $numberedPosition;

    /**
     * @return Number|null
     */
    public function getNumberedPosition()
    {
        return $this->numberedPosition;
    }

    /**
     * @param Number|null $numberedPosition
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNumberedPosition($numberedPosition)
    {
        $types = [
            "Number",
            "null",
        ];

        $numberedPosition = self::checkTypes($numberedPosition, $types);

        $this->numberedPosition = $numberedPosition;
    }

}
