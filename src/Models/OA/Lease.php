<?php

namespace OpenActive\Models\OA;

/**
 *
 */
class Lease extends \OpenActive\Models\SchemaOrg\Thing
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "Lease";
    }

    /**
     * Optional identifier of the Lease if useful for audit or debugging purposes.
     *
     * ```json
     * "identifier": "SB1234"
     * ```
     *
     * @var int|string|PropertyValue|PropertyValue[]|null
     */
    protected $identifier;

    /**
     * Expiry DateTime of the Lease in ISO 8601 format
     *
     *
     * @var DateTime|null
     */
    protected $leaseExpires;

    /**
     * @return int|string|PropertyValue|PropertyValue[]|null
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * @param int|string|PropertyValue|PropertyValue[]|null $identifier
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIdentifier($identifier)
    {
        $types = array(
            "int",
            "string",
            "PropertyValue",
            "PropertyValue[]",
            "null",
        );

        $identifier = self::checkTypes($identifier, $types);

        $this->identifier = $identifier;
    }

    /**
     * @return DateTime|null
     */
    public function getLeaseExpires()
    {
        return $this->leaseExpires;
    }

    /**
     * @param DateTime|null $leaseExpires
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLeaseExpires($leaseExpires)
    {
        $types = array(
            "DateTime",
            "null",
        );

        $leaseExpires = self::checkTypes($leaseExpires, $types);

        $this->leaseExpires = $leaseExpires;
    }

}
