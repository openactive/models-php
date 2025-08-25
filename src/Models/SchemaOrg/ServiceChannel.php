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
            "serviceLocation" => "serviceLocation",
            "servicePhone" => "servicePhone",
            "serviceSmsNumber" => "serviceSmsNumber",
            "serviceUrl" => "serviceUrl",
            "processingTime" => "processingTime",
            "servicePostalAddress" => "servicePostalAddress",
            "providesService" => "providesService",
            "availableLanguage" => "availableLanguage",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The location (e.g. civic structure, local business, etc.) where a person can go to access the service.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place|string
     */
    protected $serviceLocation;

    /**
     * The phone number to use to access the service.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ContactPoint|string
     */
    protected $servicePhone;

    /**
     * The number to access the service by text message.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ContactPoint|string
     */
    protected $serviceSmsNumber;

    /**
     * The website to access the service.
     *
     *
     * @var string
     */
    protected $serviceUrl;

    /**
     * Estimated processing time for the service using this channel.
     *
     *
     * @var DateInterval|string|null
     */
    protected $processingTime;

    /**
     * The address for accessing the service by mail.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\PostalAddress|string
     */
    protected $servicePostalAddress;

    /**
     * The service provided by this channel.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Service|string
     */
    protected $providesService;

    /**
     * A language someone may use with or at the item, service or place. Please use one of the language codes from the [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[inLanguage]].
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\Language
     */
    protected $availableLanguage;

    /**
     * @return \OpenActive\Models\SchemaOrg\Place|string
     */
    public function getServiceLocation()
    {
        return $this->serviceLocation;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Place|string $serviceLocation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setServiceLocation($serviceLocation)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Place",
            "string",
        ];

        $serviceLocation = self::checkTypes($serviceLocation, $types);

        $this->serviceLocation = $serviceLocation;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\ContactPoint|string
     */
    public function getServicePhone()
    {
        return $this->servicePhone;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ContactPoint|string $servicePhone
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setServicePhone($servicePhone)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\ContactPoint",
            "string",
        ];

        $servicePhone = self::checkTypes($servicePhone, $types);

        $this->servicePhone = $servicePhone;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\ContactPoint|string
     */
    public function getServiceSmsNumber()
    {
        return $this->serviceSmsNumber;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ContactPoint|string $serviceSmsNumber
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setServiceSmsNumber($serviceSmsNumber)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\ContactPoint",
            "string",
        ];

        $serviceSmsNumber = self::checkTypes($serviceSmsNumber, $types);

        $this->serviceSmsNumber = $serviceSmsNumber;
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
        $types = [
            "string",
        ];

        $serviceUrl = self::checkTypes($serviceUrl, $types);

        $this->serviceUrl = $serviceUrl;
    }

    /**
     * @return DateInterval|string|null
     */
    public function getProcessingTime()
    {
        return $this->processingTime;
    }

    /**
     * @param DateInterval|string|null $processingTime
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setProcessingTime($processingTime)
    {
        $types = [
            "DateInterval",
            "string",
            "null",
        ];

        $processingTime = self::checkTypes($processingTime, $types);

        $this->processingTime = $processingTime;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\PostalAddress|string
     */
    public function getServicePostalAddress()
    {
        return $this->servicePostalAddress;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\PostalAddress|string $servicePostalAddress
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setServicePostalAddress($servicePostalAddress)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\PostalAddress",
            "string",
        ];

        $servicePostalAddress = self::checkTypes($servicePostalAddress, $types);

        $this->servicePostalAddress = $servicePostalAddress;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Service|string
     */
    public function getProvidesService()
    {
        return $this->providesService;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Service|string $providesService
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setProvidesService($providesService)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Service",
            "string",
        ];

        $providesService = self::checkTypes($providesService, $types);

        $this->providesService = $providesService;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\Language
     */
    public function getAvailableLanguage()
    {
        return $this->availableLanguage;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\Language $availableLanguage
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAvailableLanguage($availableLanguage)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\Language",
        ];

        $availableLanguage = self::checkTypes($availableLanguage, $types);

        $this->availableLanguage = $availableLanguage;
    }

}
