<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class LocationFeatureSpecification extends \OpenActive\Models\SchemaOrg\PropertyValue
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:LocationFeatureSpecification";
    }

    public static function fieldList() {
        $fields = [
            "hoursAvailable" => "hoursAvailable",
            "validFrom" => "validFrom",
            "validThrough" => "validThrough",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The hours during which this service or contact is available.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\OpeningHoursSpecification
     */
    protected $hoursAvailable;

    /**
     * The date when the item becomes valid.
     *
     *
     * @var null|DateTime|Date
     */
    protected $validFrom;

    /**
     * The date after when the item is not valid. For example the end of an offer, salary period, or a period of opening hours.
     *
     *
     * @var null|DateTime|Date
     */
    protected $validThrough;

    /**
     * @return \OpenActive\Models\SchemaOrg\OpeningHoursSpecification
     */
    public function getHoursAvailable()
    {
        return $this->hoursAvailable;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\OpeningHoursSpecification $hoursAvailable
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHoursAvailable($hoursAvailable)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\OpeningHoursSpecification",
        );

        $hoursAvailable = self::checkTypes($hoursAvailable, $types);

        $this->hoursAvailable = $hoursAvailable;
    }

    /**
     * @return null|DateTime|Date
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * @param null|DateTime|Date $validFrom
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setValidFrom($validFrom)
    {
        $types = array(
            "null",
            "DateTime",
            "Date",
        );

        $validFrom = self::checkTypes($validFrom, $types);

        $this->validFrom = $validFrom;
    }

    /**
     * @return null|DateTime|Date
     */
    public function getValidThrough()
    {
        return $this->validThrough;
    }

    /**
     * @param null|DateTime|Date $validThrough
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setValidThrough($validThrough)
    {
        $types = array(
            "null",
            "DateTime",
            "Date",
        );

        $validThrough = self::checkTypes($validThrough, $types);

        $this->validThrough = $validThrough;
    }

}
