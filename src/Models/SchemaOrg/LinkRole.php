<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class LinkRole extends \OpenActive\Models\SchemaOrg\Role
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:LinkRole";
    }

    public static function fieldList() {
        $fields = [
            "linkRelationship" => "linkRelationship",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Indicates the relationship type of a Web link.
     *
     *
     * @var string
     */
    protected $linkRelationship;

    /**
     * @return string
     */
    public function getLinkRelationship()
    {
        return $this->linkRelationship;
    }

    /**
     * @param string $linkRelationship
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLinkRelationship($linkRelationship)
    {
        $types = array(
            "string",
        );

        $linkRelationship = self::checkTypes($linkRelationship, $types);

        $this->linkRelationship = $linkRelationship;
    }

}
