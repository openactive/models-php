<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from [EntryPoint](https://schema.org/EntryPoint), which means that any of this type's properties within schema.org may also be used. Note however the properties on this page must be used in preference if a relevant property is available.
 *
 */
class EntryPoint extends \OpenActive\Models\SchemaOrg\EntryPoint
{
    /**
     * Must always be present and set to ```json
"encodingType": "application/vnd.openactive.v1.0+json"
```
     *
     * ```json
     * "encodingType": "application/vnd.openactive.v1.0+json"
     * ```
     *
     * @var string
     */
    protected $encodingType;

    /**
     * An HTTP method that specifies the appropriate HTTP method for a request to an HTTP EntryPoint. Values are capitalized strings as used in HTTP.
     *
     * ```json
     * "httpMethod": "POST"
     * ```
     *
     * @var string
     */
    protected $httpMethod;

    /**
     * URL of the item
     *
     * ```json
     * "urlTemplate": "https://example.com/orders{/var}"
     * ```
     *
     * @var string
     */
    protected $urlTemplate;

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
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setEncodingType($encodingType)
    {
        $types = array(
            "string",
        );

        $encodingType = self::checkTypes($encodingType, $types);

        $this->encodingType = $encodingType;
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
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setHttpMethod($httpMethod)
    {
        $types = array(
            "string",
        );

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
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setUrlTemplate($urlTemplate)
    {
        $types = array(
            "string",
        );

        $urlTemplate = self::checkTypes($urlTemplate, $types);

        $this->urlTemplate = $urlTemplate;
    }

}
