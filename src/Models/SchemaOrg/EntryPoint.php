<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class EntryPoint extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:EntryPoint";
    }

    public static function fieldList() {
        $fields = [
            "actionApplication" => "actionApplication",
            "application" => "application",
            "actionPlatform" => "actionPlatform",
            "httpMethod" => "httpMethod",
            "urlTemplate" => "urlTemplate",
            "encodingType" => "encodingType",
            "contentType" => "contentType",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * An application that can complete the request.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\SoftwareApplication|string
     */
    protected $actionApplication;

    /**
     * An application that can complete the request.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\SoftwareApplication|string
     */
    protected $application;

    /**
     * The high level platform(s) where the Action can be performed for the given URL. To specify a specific application or operating system instance, use actionApplication.
     *
     *
     * @var string|\OpenActive\Enums\SchemaOrg\DigitalPlatformEnumeration|null
     */
    protected $actionPlatform;

    /**
     * An HTTP method that specifies the appropriate HTTP method for a request to an HTTP EntryPoint. Values are capitalized strings as used in HTTP.
     *
     *
     * @var string
     */
    protected $httpMethod;

    /**
     * An url template (RFC6570) that will be used to construct the target of the execution of the action.
     *
     *
     * @var string
     */
    protected $urlTemplate;

    /**
     * The supported encoding type(s) for an EntryPoint request.
     *
     *
     * @var string
     */
    protected $encodingType;

    /**
     * The supported content type(s) for an EntryPoint response.
     *
     *
     * @var string
     */
    protected $contentType;

    /**
     * @return \OpenActive\Models\SchemaOrg\SoftwareApplication|string
     */
    public function getActionApplication()
    {
        return $this->actionApplication;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\SoftwareApplication|string $actionApplication
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setActionApplication($actionApplication)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\SoftwareApplication",
            "string",
        ];

        $actionApplication = self::checkTypes($actionApplication, $types);

        $this->actionApplication = $actionApplication;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\SoftwareApplication|string
     */
    public function getApplication()
    {
        return $this->application;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\SoftwareApplication|string $application
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setApplication($application)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\SoftwareApplication",
            "string",
        ];

        $application = self::checkTypes($application, $types);

        $this->application = $application;
    }

    /**
     * @return string|\OpenActive\Enums\SchemaOrg\DigitalPlatformEnumeration|null
     */
    public function getActionPlatform()
    {
        return $this->actionPlatform;
    }

    /**
     * @param string|\OpenActive\Enums\SchemaOrg\DigitalPlatformEnumeration|null $actionPlatform
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setActionPlatform($actionPlatform)
    {
        $types = [
            "string",
            "\OpenActive\Enums\SchemaOrg\DigitalPlatformEnumeration",
            "null",
        ];

        $actionPlatform = self::checkTypes($actionPlatform, $types);

        $this->actionPlatform = $actionPlatform;
    }

    /**
     * @return string
     */
    public function getHttpMethod()
    {
        return $this->httpMethod;
    }

    /**
     * @param string $httpMethod
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHttpMethod($httpMethod)
    {
        $types = [
            "string",
        ];

        $httpMethod = self::checkTypes($httpMethod, $types);

        $this->httpMethod = $httpMethod;
    }

    /**
     * @return string
     */
    public function getUrlTemplate()
    {
        return $this->urlTemplate;
    }

    /**
     * @param string $urlTemplate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setUrlTemplate($urlTemplate)
    {
        $types = [
            "string",
        ];

        $urlTemplate = self::checkTypes($urlTemplate, $types);

        $this->urlTemplate = $urlTemplate;
    }

    /**
     * @return string
     */
    public function getEncodingType()
    {
        return $this->encodingType;
    }

    /**
     * @param string $encodingType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEncodingType($encodingType)
    {
        $types = [
            "string",
        ];

        $encodingType = self::checkTypes($encodingType, $types);

        $this->encodingType = $encodingType;
    }

    /**
     * @return string
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * @param string $contentType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setContentType($contentType)
    {
        $types = [
            "string",
        ];

        $contentType = self::checkTypes($contentType, $types);

        $this->contentType = $contentType;
    }

}
