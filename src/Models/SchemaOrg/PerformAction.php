<?php

namespace OpenActive\Models\SchemaOrg;

/**
 * [NOTICE: This is a beta class, and is highly likely to change in future versions of this library.].
 *
 */
class PerformAction extends \OpenActive\Models\SchemaOrg\PlayAction
{
    /**
     * A sub property of location. The entertainment business where the action occurred.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\EntertainmentBusiness
     */
    protected $entertainmentBusiness;

    /**
     * @return \OpenActive\Models\SchemaOrg\EntertainmentBusiness
     */
    public function getEntertainmentBusiness()
    {
        return $this->entertainmentBusiness;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\EntertainmentBusiness $entertainmentBusiness
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setEntertainmentBusiness($entertainmentBusiness)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\EntertainmentBusiness",
        );

        $entertainmentBusiness = self::checkTypes($entertainmentBusiness, $types);

        $this->entertainmentBusiness = $entertainmentBusiness;
    }

}
