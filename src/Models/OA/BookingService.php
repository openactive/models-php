<?php

namespace OpenActive\Models\OA;

/**
 *
 */
class BookingService extends \OpenActive\Models\SchemaOrg\Service
{
    /**
     * The name of the Booking System.
     *
     *
     * @var string
     */
    protected $name;

    /**
     * The terms of service of the Booking System.
     *
     *
     * @var Terms[]
     */
    protected $termsOfService;

    /**
     * The URL of the website of the Booking System.
     *
     *
     * @var string
     */
    protected $url;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setName($name)
    {
        $types = array(
            "string",
        );

        $name = self::checkTypes($name, $types);

        $this->name = $name;
    }

    /**
     * @return Terms[]
     */
    public function getTermsOfService()
    {
        return $this->termsOfService;
    }

    /**
     * @param Terms[] $termsOfService
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setTermsOfService($termsOfService)
    {
        $types = array(
            "Terms[]",
        );

        $termsOfService = self::checkTypes($termsOfService, $types);

        $this->termsOfService = $termsOfService;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setUrl($url)
    {
        $types = array(
            "string",
        );

        $url = self::checkTypes($url, $types);

        $this->url = $url;
    }

}
