<?php

namespace OpenActive\Models\OA;

/**
 * 
 * ## **EARLY RELEASE NOTICE**
 * In order to expedite the OpenActive tooling work, this class has been added to the model for the purposes of testing.
 * IT IS SUBJECT TO CHANGE, as the [Dataset API Discovery specification](https://www.openactive.io/dataset-api-discovery/EditorsDraft/) evolves.
 * 
 * This type is derived from [DataDownload](https://schema.org/DataDownload), which means that any of this type's properties within schema.org may also be used. Note however the properties on this page must be used in preference if a relevant property is available.
 *
 */
class DataDownload extends \OpenActive\Models\SchemaOrg\DataDownload
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "DataDownload";
    }

    public static function fieldList() {
        $fields = [
            "name" => "name",
            "additionalType" => "additionalType",
            "contentUrl" => "contentUrl",
            "encodingFormat" => "encodingFormat",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The name of the type of feed
     *
     * ```json
     * "name": "SessionSeries"
     * ```
     *
     * @var string
     */
    protected $name;

    /**
     * A fully qualified reference to the class that is at the root of the items in the RPDE feed.
     *
     * ```json
     * "additionalType": "https://openactive.io/SessionSeries"
     * ```
     *
     * @var string
     */
    protected $additionalType;

    /**
     * The URL of the RPDE data feed.
     *
     * ```json
     * "contentUrl": "https://opendata.leisurecloud.live/api/feeds/fusion-lifestyle-fl-live-session-series"
     * ```
     *
     * @var string
     */
    protected $contentUrl;

    /**
     * Must always be present and set to ```json
     * "encodingFormat": "application/vnd.openactive.rpde+json; version=1"
     * ```
     *
     * ```json
     * "encodingFormat": "application/vnd.openactive.rpde+json; version=1"
     * ```
     *
     * @var string
     */
    protected $encodingFormat;

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
    public function getAdditionalType()
    {
        return $this->additionalType;
    }

    /**
     * @param string $additionalType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAdditionalType($additionalType)
    {
        $types = [
            "string",
        ];

        $additionalType = self::checkTypes($additionalType, $types);

        $this->additionalType = $additionalType;
    }

    /**
     * @return string
     */
    public function getContentUrl()
    {
        return $this->contentUrl;
    }

    /**
     * @param string $contentUrl
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setContentUrl($contentUrl)
    {
        $types = [
            "string",
        ];

        $contentUrl = self::checkTypes($contentUrl, $types);

        $this->contentUrl = $contentUrl;
    }

    /**
     * @return string
     */
    public function getEncodingFormat()
    {
        return $this->encodingFormat;
    }

    /**
     * @param string $encodingFormat
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEncodingFormat($encodingFormat)
    {
        $types = [
            "string",
        ];

        $encodingFormat = self::checkTypes($encodingFormat, $types);

        $this->encodingFormat = $encodingFormat;
    }

}
