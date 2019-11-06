<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MobileApplication extends \OpenActive\Models\SchemaOrg\SoftwareApplication
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MobileApplication";
    }

    /**
     * Specifies specific carrier(s) requirements for the application (e.g. an application may only work on a specific carrier network).
     *
     *
     * @var string
     */
    protected $carrierRequirements;

    /**
     * @return string
     */
    public function getCarrierRequirements()
    {
        return $this->carrierRequirements;
    }

    /**
     * @param string $carrierRequirements
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCarrierRequirements($carrierRequirements)
    {
        $types = array(
            "string",
        );

        $carrierRequirements = self::checkTypes($carrierRequirements, $types);

        $this->carrierRequirements = $carrierRequirements;
    }

}
