<?php

namespace OpenActive\Models\OA;

/**
 *
 */
class BookingService extends \OpenActive\Models\SchemaOrg\Service
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "BookingService";
    }

    public static function fieldList() {
        $fields = [
            "name" => "name",
            "softwareVersion" => "softwareVersion",
            "termsOfService" => "termsOfService",
            "url" => "url",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The name of the Booking System.
     *
     *
     * @var string
     */
    protected $name;

    /**
     * The version of the application, useful for on-premise installations. Note this property is in EARLY RELEASE AND IS SUBJECT TO CHANGE, as the [Dataset API Discovery specification](https://www.openactive.io/dataset-api-discovery/EditorsDraft/) evolves.
     *
     *
     * @var string
     */
    protected $softwareVersion;

    /**
     * The terms of service of the Booking System.
     *
     *
     * @var \OpenActive\Models\OA\Terms[]
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
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setName($name)
    {
        $types = [
            "string",
        ];

        $name = self::checkTypes($name, $types);

        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getSoftwareVersion()
    {
        return $this->softwareVersion;
    }

    /**
     * @param string $softwareVersion
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSoftwareVersion($softwareVersion)
    {
        $types = [
            "string",
        ];

        $softwareVersion = self::checkTypes($softwareVersion, $types);

        $this->softwareVersion = $softwareVersion;
    }

    /**
     * @return \OpenActive\Models\OA\Terms[]
     */
    public function getTermsOfService()
    {
        return $this->termsOfService;
    }

    /**
     * @param \OpenActive\Models\OA\Terms[] $termsOfService
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTermsOfService($termsOfService)
    {
        $types = [
            "\OpenActive\Models\OA\Terms[]",
        ];

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
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setUrl($url)
    {
        $types = [
            "string",
        ];

        $url = self::checkTypes($url, $types);

        $this->url = $url;
    }

}
