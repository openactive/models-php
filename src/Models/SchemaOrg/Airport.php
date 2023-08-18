<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Airport extends \OpenActive\Models\SchemaOrg\CivicStructure
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Airport";
    }

    public static function fieldList() {
        $fields = [
            "icaoCode" => "icaoCode",
            "iataCode" => "iataCode",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * ICAO identifier for an airport.
     *
     *
     * @var string
     */
    protected $icaoCode;

    /**
     * IATA identifier for an airline or airport.
     *
     *
     * @var string
     */
    protected $iataCode;

    /**
     * @return string
     */
    public function getIcaoCode()
    {
        return $this->icaoCode;
    }

    /**
     * @param string $icaoCode
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIcaoCode($icaoCode)
    {
        $types = [
            "string",
        ];

        $icaoCode = self::checkTypes($icaoCode, $types);

        $this->icaoCode = $icaoCode;
    }

    /**
     * @return string
     */
    public function getIataCode()
    {
        return $this->iataCode;
    }

    /**
     * @param string $iataCode
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIataCode($iataCode)
    {
        $types = [
            "string",
        ];

        $iataCode = self::checkTypes($iataCode, $types);

        $this->iataCode = $iataCode;
    }

}
