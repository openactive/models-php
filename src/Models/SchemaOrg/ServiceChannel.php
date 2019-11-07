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

    /**
     * Estimated processing time for the service using this channel.
     *
     *
     * @var DateInterval|null
     */
    protected $processingTime;

    /**
     * The number to access the service by text message.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ContactPoint
     */
    protected $serviceSmsNumber;

    /**
     * The phone number to use to access the service.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ContactPoint
     */
    protected $servicePhone;

    /**
     * The website to access the service.
     *
     *
     * @var string
     */
    protected $serviceUrl;

    /**
     * A language someone may use with or at the item, service or place. Please use one of the language codes from the <a href="http://tools.ietf.org/html/bcp47">IETF BCP 47 standard</a>. See also <a class="localLink" href="https://schema.org/inLanguage">inLanguage</a>
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Language|string
     */
    protected $availableLanguage;

    /**
     * The address for accessing the service by mail.
     *
     *
     * @var PostalAddress
     */
    protected $servicePostalAddress;

    /**
     * The location (e.g. civic structure, local business, etc.) where a person can go to access the service.
     *
     *
     * @var Place
     */
    protected $serviceLocation;

    /**
     * The service provided by this channel.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Service
     */
    protected $providesService;

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
     * @return PostalAddress
     */
    public function getServicePostalAddress()
    {
        return $this->servicePostalAddress;
    }

    /**
     * @param PostalAddress $servicePostalAddress
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setServicePostalAddress($servicePostalAddress)
    {
        $types = array(
            "PostalAddress",
        );

        $servicePostalAddress = self::checkTypes($servicePostalAddress, $types);

        $this->servicePostalAddress = $servicePostalAddress;
    }

    /**
     * @return Place
     */
    public function getServiceLocation()
    {
        return $this->serviceLocation;
    }

    /**
     * @param Place $serviceLocation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setServiceLocation($serviceLocation)
    {
        $types = array(
            "Place",
        );

        $serviceLocation = self::checkTypes($serviceLocation, $types);

        $this->serviceLocation = $serviceLocation;
    }

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

}
