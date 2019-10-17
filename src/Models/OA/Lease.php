<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from [Thing](https://schema.org/Thing), which means that any of this type's properties within schema.org may also be used. Note however the properties on this page must be used in preference if a relevant property is available.
 *
 */
class Lease extends \OpenActive\Models\SchemaOrg\Thing
{
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
     * @throws \Exception If the provided argument is not of a supported type.
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
     * @throws \Exception If the provided argument is not of a supported type.
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
