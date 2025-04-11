<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Certification extends \OpenActive\Models\SchemaOrg\CreativeWork
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Certification";
    }

    public static function fieldList() {
        $fields = [
            "certificationStatus" => "certificationStatus",
            "issuedBy" => "issuedBy",
            "auditDate" => "auditDate",
            "hasMeasurement" => "hasMeasurement",
            "validIn" => "validIn",
            "about" => "about",
            "certificationIdentification" => "certificationIdentification",
            "certificationRating" => "certificationRating",
            "datePublished" => "datePublished",
            "logo" => "logo",
            "validFrom" => "validFrom",
            "expires" => "expires",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Indicates the current status of a certification: active or inactive. See also  [gs1:certificationStatus](https://www.gs1.org/voc/certificationStatus).
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\CertificationStatusEnumeration|null
     */
    protected $certificationStatus;

    /**
     * The organization issuing the item, for example a [[Permit]], [[Ticket]], or [[Certification]].
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|string
     */
    protected $issuedBy;

    /**
     * Date when a certification was last audited. See also  [gs1:certificationAuditDate](https://www.gs1.org/voc/certificationAuditDate).
     *
     *
     * @var Date|DateTime|null
     */
    protected $auditDate;

    /**
     * A measurement of an item, For example, the inseam of pants, the wheel size of a bicycle, the gauge of a screw, or the carbon footprint measured for certification by an authority. Usually an exact measurement, but can also be a range of measurements for adjustable products, for example belts and ski bindings.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    protected $hasMeasurement;

    /**
     * The geographic area where the item is valid. Applies for example to a [[Permit]], a [[Certification]], or an [[EducationalOccupationalCredential]]. 
     *
     *
     * @var \OpenActive\Models\SchemaOrg\AdministrativeArea|string
     */
    protected $validIn;

    /**
     * The subject matter of the content.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Thing|string
     */
    protected $about;

    /**
     * Identifier of a certification instance (as registered with an independent certification body). Typically this identifier can be used to consult and verify the certification instance. See also [gs1:certificationIdentification](https://www.gs1.org/voc/certificationIdentification).
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\DefinedTerm
     */
    protected $certificationIdentification;

    /**
     * Rating of a certification instance (as defined by an independent certification body). Typically this rating can be used to rate the level to which the requirements of the certification instance are fulfilled. See also [gs1:certificationValue](https://www.gs1.org/voc/certificationValue).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Rating|string
     */
    protected $certificationRating;

    /**
     * Date of first publication or broadcast. For example the date a [[CreativeWork]] was broadcast or a [[Certification]] was issued.
     *
     *
     * @var Date|DateTime|null
     */
    protected $datePublished;

    /**
     * An associated logo.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\ImageObject
     */
    protected $logo;

    /**
     * The date when the item becomes valid.
     *
     *
     * @var Date|DateTime|null
     */
    protected $validFrom;

    /**
     * Date the content expires and is no longer useful or available. For example a [[VideoObject]] or [[NewsArticle]] whose availability or relevance is time-limited, a [[ClaimReview]] fact check whose publisher wants to indicate that it may no longer be relevant (or helpful to highlight) after some date, or a [[Certification]] the validity has expired.
     *
     *
     * @var Date|DateTime|null
     */
    protected $expires;

    /**
     * @return \OpenActive\Enums\SchemaOrg\CertificationStatusEnumeration|null
     */
    public function getCertificationStatus()
    {
        return $this->certificationStatus;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\CertificationStatusEnumeration|null $certificationStatus
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCertificationStatus($certificationStatus)
    {
        $types = [
            "\OpenActive\Enums\SchemaOrg\CertificationStatusEnumeration",
            "null",
        ];

        $certificationStatus = self::checkTypes($certificationStatus, $types);

        $this->certificationStatus = $certificationStatus;
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
     * @return Date|DateTime|null
     */
    public function getAuditDate()
    {
        return $this->auditDate;
    }

    /**
     * @param Date|DateTime|null $auditDate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAuditDate($auditDate)
    {
        $types = [
            "Date",
            "DateTime",
            "null",
        ];

        $auditDate = self::checkTypes($auditDate, $types);

        $this->auditDate = $auditDate;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    public function getHasMeasurement()
    {
        return $this->hasMeasurement;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|string $hasMeasurement
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHasMeasurement($hasMeasurement)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
        ];

        $hasMeasurement = self::checkTypes($hasMeasurement, $types);

        $this->hasMeasurement = $hasMeasurement;
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
     * @return \OpenActive\Models\SchemaOrg\Thing|string
     */
    public function getAbout()
    {
        return $this->about;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Thing|string $about
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAbout($about)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Thing",
            "string",
        ];

        $about = self::checkTypes($about, $types);

        $this->about = $about;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\DefinedTerm
     */
    public function getCertificationIdentification()
    {
        return $this->certificationIdentification;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\DefinedTerm $certificationIdentification
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCertificationIdentification($certificationIdentification)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\DefinedTerm",
        ];

        $certificationIdentification = self::checkTypes($certificationIdentification, $types);

        $this->certificationIdentification = $certificationIdentification;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Rating|string
     */
    public function getCertificationRating()
    {
        return $this->certificationRating;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Rating|string $certificationRating
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCertificationRating($certificationRating)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Rating",
            "string",
        ];

        $certificationRating = self::checkTypes($certificationRating, $types);

        $this->certificationRating = $certificationRating;
    }

    /**
     * @return Date|DateTime|null
     */
    public function getDatePublished()
    {
        return $this->datePublished;
    }

    /**
     * @param Date|DateTime|null $datePublished
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDatePublished($datePublished)
    {
        $types = [
            "Date",
            "DateTime",
            "null",
        ];

        $datePublished = self::checkTypes($datePublished, $types);

        $this->datePublished = $datePublished;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\ImageObject
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\ImageObject $logo
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLogo($logo)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\ImageObject",
        ];

        $logo = self::checkTypes($logo, $types);

        $this->logo = $logo;
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
     * @return Date|DateTime|null
     */
    public function getExpires()
    {
        return $this->expires;
    }

    /**
     * @param Date|DateTime|null $expires
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setExpires($expires)
    {
        $types = [
            "Date",
            "DateTime",
            "null",
        ];

        $expires = self::checkTypes($expires, $types);

        $this->expires = $expires;
    }

}
