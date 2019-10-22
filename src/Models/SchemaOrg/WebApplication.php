<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class WebApplication extends \OpenActive\Models\SchemaOrg\SoftwareApplication
{
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
     * @throws \Exception If the provided argument is not of a supported type.
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
