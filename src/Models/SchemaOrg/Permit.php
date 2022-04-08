<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Permit extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Permit";
    }

    public static function fieldList() {
        $fields = [
            "validFor" => "validFor",
            "issuedBy" => "issuedBy",
            "validUntil" => "validUntil",
            "validFrom" => "validFrom",
            "issuedThrough" => "issuedThrough",
            "validIn" => "validIn",
            "permitAudience" => "permitAudience",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The duration of validity of a permit or similar thing.
     *
     *
     * @var DateInterval|string|null
     */
    protected $validFor;

    /**
     * The organization issuing the ticket or permit.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|string
     */
    protected $issuedBy;

    /**
     * The date when the item is no longer valid.
     *
     *
     * @var Date|null
     */
    protected $validUntil;

    /**
     * The date when the item becomes valid.
     *
     *
     * @var Date|DateTime|null
     */
    protected $validFrom;

    /**
     * The service through with the permit was granted.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Service|string
     */
    protected $issuedThrough;

    /**
     * The geographic area where a permit or similar thing is valid.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\AdministrativeArea|string
     */
    protected $validIn;

    /**
     * The target audience for this permit.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Audience|string
     */
    protected $permitAudience;

    /**
     * @return DateInterval|string|null
     */
    public function getValidFor()
    {
        return $this->validFor;
    }

    /**
     * @param DateInterval|string|null $validFor
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setValidFor($validFor)
    {
        $types = [
            "DateInterval",
            "string",
            "null",
        ];

        $validFor = self::checkTypes($validFor, $types);

        $this->validFor = $validFor;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|string
     */
    public function getIssuedBy()
    {
        return $this->issuedBy;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|string $issuedBy
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIssuedBy($issuedBy)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "string",
        ];

        $issuedBy = self::checkTypes($issuedBy, $types);

        $this->issuedBy = $issuedBy;
    }

    /**
     * @return Date|null
     */
    public function getValidUntil()
    {
        return $this->validUntil;
    }

    /**
     * @param Date|null $validUntil
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setValidUntil($validUntil)
    {
        $types = [
            "Date",
            "null",
        ];

        $validUntil = self::checkTypes($validUntil, $types);

        $this->validUntil = $validUntil;
    }

    /**
     * @return Date|DateTime|null
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * @param Date|DateTime|null $validFrom
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setValidFrom($validFrom)
    {
        $types = [
            "Date",
            "DateTime",
            "null",
        ];

        $validFrom = self::checkTypes($validFrom, $types);

        $this->validFrom = $validFrom;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Service|string
     */
    public function getIssuedThrough()
    {
        return $this->issuedThrough;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Service|string $issuedThrough
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIssuedThrough($issuedThrough)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Service",
            "string",
        ];

        $issuedThrough = self::checkTypes($issuedThrough, $types);

        $this->issuedThrough = $issuedThrough;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\AdministrativeArea|string
     */
    public function getValidIn()
    {
        return $this->validIn;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\AdministrativeArea|string $validIn
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setValidIn($validIn)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\AdministrativeArea",
            "string",
        ];

        $validIn = self::checkTypes($validIn, $types);

        $this->validIn = $validIn;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Audience|string
     */
    public function getPermitAudience()
    {
        return $this->permitAudience;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Audience|string $permitAudience
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPermitAudience($permitAudience)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Audience",
            "string",
        ];

        $permitAudience = self::checkTypes($permitAudience, $types);

        $this->permitAudience = $permitAudience;
    }

}
