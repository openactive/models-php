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
     * @var \OpenActive\Models\SchemaOrg\CreativeWork|string
     */
    protected $documentation;

    /**
     * @return \OpenActive\Models\SchemaOrg\CreativeWork|string
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CreativeWork|string $documentation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDocumentation($documentation)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\CreativeWork",
            "string",
        );

        $documentation = self::checkTypes($documentation, $types);

        $this->documentation = $documentation;
    }

}
