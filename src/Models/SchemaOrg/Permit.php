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
            "validFrom" => "validFrom",
            "permitAudience" => "permitAudience",
            "validIn" => "validIn",
            "issuedThrough" => "issuedThrough",
            "issuedBy" => "issuedBy",
            "validUntil" => "validUntil",
            "validFor" => "validFor",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The date when the item becomes valid.
     *
     *
     * @var Date|DateTime|null
     */
    protected $validFrom;

    /**
     * The target audience for this permit.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Audience
     */
    protected $permitAudience;

    /**
     * The geographic area where a permit or similar thing is valid.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\AdministrativeArea
     */
    protected $validIn;

    /**
     * The service through with the permit was granted.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Service
     */
    protected $issuedThrough;

    /**
     * The organization issuing the ticket or permit.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization
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
     * The duration of validity of a permit or similar thing.
     *
     *
     * @var DateInterval|null
     */
    protected $validFor;

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
     * @return \OpenActive\Models\SchemaOrg\Audience
     */
    public function getPermitAudience()
    {
        return $this->permitAudience;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Audience $permitAudience
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPermitAudience($permitAudience)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Audience",
        ];

        $permitAudience = self::checkTypes($permitAudience, $types);

        $this->permitAudience = $permitAudience;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\AdministrativeArea
     */
    public function getValidIn()
    {
        return $this->validIn;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\AdministrativeArea $validIn
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setValidIn($validIn)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\AdministrativeArea",
        ];

        $validIn = self::checkTypes($validIn, $types);

        $this->validIn = $validIn;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Service
     */
    public function getIssuedThrough()
    {
        return $this->issuedThrough;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Service $issuedThrough
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIssuedThrough($issuedThrough)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Service",
        ];

        $issuedThrough = self::checkTypes($issuedThrough, $types);

        $this->issuedThrough = $issuedThrough;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization
     */
    public function getIssuedBy()
    {
        return $this->issuedBy;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization $issuedBy
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIssuedBy($issuedBy)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
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
     * @return DateInterval|null
     */
    public function getValidFor()
    {
        return $this->validFor;
    }

    /**
     * @param DateInterval|null $validFor
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setValidFor($validFor)
    {
        $types = [
            "DateInterval",
            "null",
        ];

        $validFor = self::checkTypes($validFor, $types);

        $this->validFor = $validFor;
    }

}
