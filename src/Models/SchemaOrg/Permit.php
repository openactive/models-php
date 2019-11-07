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

    /**
     * The geographic area where a permit or similar thing is valid.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\AdministrativeArea
     */
    protected $validIn;

    /**
     * The target audience for this permit.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Audience
     */
    protected $permitAudience;

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
     * @var Organization
     */
    protected $issuedBy;

    /**
     * The date when the item becomes valid.
     *
     *
     * @var DateTime|null
     */
    protected $validFrom;

    /**
     * The date when the item is no longer valid.
     *
     *
     * @var DateTime|null
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
     * @return Organization
     */
    public function getIssuedBy()
    {
        return $this->issuedBy;
    }

    /**
     * @param Organization $issuedBy
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIssuedBy($issuedBy)
    {
        $types = array(
            "Organization",
        );

        $issuedBy = self::checkTypes($issuedBy, $types);

        $this->issuedBy = $issuedBy;
    }

    /**
     * @return DateTime|null
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * @param DateTime|null $validFrom
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setValidFrom($validFrom)
    {
        $types = array(
            "DateTime",
            "null",
        );

        $validFrom = self::checkTypes($validFrom, $types);

        $this->validFrom = $validFrom;
    }

    /**
     * @return DateTime|null
     */
    public function getValidUntil()
    {
        return $this->validUntil;
    }

    /**
     * @param DateTime|null $validUntil
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setValidUntil($validUntil)
    {
        $types = array(
            "DateTime",
            "null",
        );

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
        $types = array(
            "DateInterval",
            "null",
        );

        $validFor = self::checkTypes($validFor, $types);

        $this->validFor = $validFor;
    }

}
