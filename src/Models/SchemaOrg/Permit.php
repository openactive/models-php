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
            "validUntil" => "validUntil",
            "validFrom" => "validFrom",
            "issuedBy" => "issuedBy",
            "issuedThrough" => "issuedThrough",
            "permitAudience" => "permitAudience",
            "validIn" => "validIn",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The duration of validity of a permit or similar thing.
     *
     *
     * @var null|DateInterval
     */
    protected $validFor;

    /**
     * The date when the item is no longer valid.
     *
     *
     * @var null|Date
     */
    protected $validUntil;

    /**
     * The date when the item becomes valid.
     *
     *
     * @var null|DateTime|Date
     */
    protected $validFrom;

    /**
     * The organization issuing the ticket or permit.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization
     */
    protected $issuedBy;

    /**
     * The service through with the permit was granted.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Service
     */
    protected $issuedThrough;

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
     * @return null|DateInterval
     */
    public function getValidFor()
    {
        return $this->validFor;
    }

    /**
     * @param null|DateInterval $validFor
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setValidFor($validFor)
    {
        $types = array(
            "null",
            "DateInterval",
        );

        $validFor = self::checkTypes($validFor, $types);

        $this->validFor = $validFor;
    }

    /**
     * @return null|Date
     */
    public function getValidUntil()
    {
        return $this->validUntil;
    }

    /**
     * @param null|Date $validUntil
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setValidUntil($validUntil)
    {
        $types = array(
            "null",
            "Date",
        );

        $validUntil = self::checkTypes($validUntil, $types);

        $this->validUntil = $validUntil;
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
        $types = array(
            "\OpenActive\Models\SchemaOrg\Organization",
        );

        $issuedBy = self::checkTypes($issuedBy, $types);

        $this->issuedBy = $issuedBy;
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
        $types = array(
            "\OpenActive\Models\SchemaOrg\Service",
        );

        $issuedThrough = self::checkTypes($issuedThrough, $types);

        $this->issuedThrough = $issuedThrough;
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
        $types = array(
            "\OpenActive\Models\SchemaOrg\Audience",
        );

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
        $types = array(
            "\OpenActive\Models\SchemaOrg\AdministrativeArea",
        );

        $validIn = self::checkTypes($validIn, $types);

        $this->validIn = $validIn;
    }

}
