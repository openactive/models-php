<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class WebAPI extends \OpenActive\Models\SchemaOrg\Service
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:WebAPI";
    }

    public static function fieldList() {
        $fields = [
            "documentation" => "documentation",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Further documentation describing the Web API in more detail.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    protected $documentation;

    /**
     * @return string|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\CreativeWork $documentation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDocumentation($documentation)
    {
        $types = array(
            "string",
            "\OpenActive\Models\SchemaOrg\CreativeWork",
        );

        $documentation = self::checkTypes($documentation, $types);

        $this->documentation = $documentation;
    }

}
