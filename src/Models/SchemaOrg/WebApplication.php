<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class WebApplication extends \OpenActive\Models\SchemaOrg\SoftwareApplication
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:WebApplication";
    }

    public static function fieldList() {
        $fields = [
            "browserRequirements" => "browserRequirements",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Specifies browser requirements in human-readable text. For example, 'requires HTML5 support'.
     *
     *
     * @var string
     */
    protected $browserRequirements;

    /**
     * @return string
     */
    public function getBrowserRequirements()
    {
        return $this->browserRequirements;
    }

    /**
     * @param string $browserRequirements
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBrowserRequirements($browserRequirements)
    {
        $types = array(
            "string",
        );

        $browserRequirements = self::checkTypes($browserRequirements, $types);

        $this->browserRequirements = $browserRequirements;
    }

}
