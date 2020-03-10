<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ServiceChannel extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ServiceChannel";
    }

    public static function fieldList() {
        $fields = [
            "providesService" => "providesService",
            "serviceLocation" => "serviceLocation",
            "servicePostalAddress" => "servicePostalAddress",
            "availableLanguage" => "availableLanguage",
            "serviceUrl" => "serviceUrl",
            "servicePhone" => "servicePhone",
            "serviceSmsNumber" => "serviceSmsNumber",
            "processingTime" => "processingTime",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The service provided by this channel.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Service
     */
    protected $providesService;

    /**
     * The location (e.g. civic structure, local business, etc.) where a person can go to access the service.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place
     */
    protected $serviceLocation;

    /**
     * The address for accessing the service by mail.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\PostalAddress
     */
    protected $servicePostalAddress;

    /**
     * A language someone may use with or at the item, service or place. Please use one of the language codes from the <a href="http://tools.ietf.org/html/bcp47">IETF BCP 47 standard</a>. See also <a class="localLink" href="https://schema.org/inLanguage">inLanguage</a>
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Language|string
     */
    protected $availableLanguage;

    /**
     * The website to access the service.
     *
     *
     * @var string
     */
    protected $serviceUrl;

    /**
     * The phone number to use to access the service.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ContactPoint
     */
    protected $servicePhone;

    /**
     * The number to access the service by text message.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ContactPoint
     */
    protected $serviceSmsNumber;

    /**
     * Estimated processing time for the service using this channel.
     *
     *
     * @var DateInterval|null
     */
    protected $processingTime;

    /**
     * @return \OpenActive\Models\SchemaOrg\Service
     */
    public function getProvidesService()
    {
        return $this->providesService;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Service $providesService
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setProvidesService($providesService)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Service",
        );

        $providesService = self::checkTypes($providesService, $types);

        $this->providesService = $providesService;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Place
     */
    public function getServiceLocation()
    {
        return $this->serviceLocation;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Place $serviceLocation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setServiceLocation($serviceLocation)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Place",
        );

        $serviceLocation = self::checkTypes($serviceLocation, $types);

        $this->serviceLocation = $serviceLocation;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\PostalAddress
     */
    public function getServicePostalAddress()
    {
        return $this->servicePostalAddress;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\PostalAddress $servicePostalAddress
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setServicePostalAddress($servicePostalAddress)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\PostalAddress",
        );

        $servicePostalAddress = self::checkTypes($servicePostalAddress, $types);

        $this->servicePostalAddress = $servicePostalAddress;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Language|string
     */
    public function getAvailableLanguage()
    {
        return $this->availableLanguage;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Language|string $availableLanguage
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAvailableLanguage($availableLanguage)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Language",
            "string",
        );

        $availableLanguage = self::checkTypes($availableLanguage, $types);

        $this->availableLanguage = $availableLanguage;
    }

    /**
     * @return string
     */
    public function getServiceUrl()
    {
        return $this->serviceUrl;
    }

    /**
     * @param string $serviceUrl
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setServiceUrl($serviceUrl)
    {
        $types = array(
            "string",
        );

        $serviceUrl = self::checkTypes($serviceUrl, $types);

        $this->serviceUrl = $serviceUrl;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\ContactPoint
     */
    public function getServicePhone()
    {
        return $this->servicePhone;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ContactPoint $servicePhone
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setServicePhone($servicePhone)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\ContactPoint",
        );

        $servicePhone = self::checkTypes($servicePhone, $types);

        $this->servicePhone = $servicePhone;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\ContactPoint
     */
    public function getServiceSmsNumber()
    {
        return $this->serviceSmsNumber;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ContactPoint $serviceSmsNumber
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setServiceSmsNumber($serviceSmsNumber)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\ContactPoint",
        );

        $serviceSmsNumber = self::checkTypes($serviceSmsNumber, $types);

        $this->serviceSmsNumber = $serviceSmsNumber;
    }

    /**
     * @return DateInterval|null
     */
    public function getProcessingTime()
    {
        return $this->processingTime;
    }

    /**
     * @param DateInterval|null $processingTime
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setProcessingTime($processingTime)
    {
        $types = array(
            "DateInterval",
            "null",
        );

        $processingTime = self::checkTypes($processingTime, $types);

        $this->processingTime = $processingTime;
    }

}
