<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MediaObject extends \OpenActive\Models\SchemaOrg\CreativeWork
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MediaObject";
    }

    public static function fieldList() {
        $fields = [
            "contentSize" => "contentSize",
            "contentUrl" => "contentUrl",
            "width" => "width",
            "height" => "height",
            "regionsAllowed" => "regionsAllowed",
            "startTime" => "startTime",
            "associatedArticle" => "associatedArticle",
            "ineligibleRegion" => "ineligibleRegion",
            "requiresSubscription" => "requiresSubscription",
            "playerType" => "playerType",
            "encodesCreativeWork" => "encodesCreativeWork",
            "duration" => "duration",
            "encodingFormat" => "encodingFormat",
            "uploadDate" => "uploadDate",
            "embedUrl" => "embedUrl",
            "bitrate" => "bitrate",
            "endTime" => "endTime",
            "productionCompany" => "productionCompany",
            "sha256" => "sha256",
            "interpretedAsClaim" => "interpretedAsClaim",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * File size in (mega/kilo) bytes.
     *
     *
     * @var string
     */
    protected $contentSize;

    /**
     * Actual bytes of the media object, for example the image file or video file.
     *
     *
     * @var string
     */
    protected $contentUrl;

    /**
     * The width of the item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|\OpenActive\Models\SchemaOrg\Distance|string
     */
    protected $width;

    /**
     * The height of the item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Distance|\OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    protected $height;

    /**
     * The regions where the media is allowed. If not specified, then it's assumed to be allowed everywhere. Specify the countries in [ISO 3166 format](http://en.wikipedia.org/wiki/ISO_3166).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place|string
     */
    protected $regionsAllowed;

    /**
     * The startTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to start. For actions that span a period of time, when the action was performed. e.g. John wrote a book from *January* to December. For media, including audio and video, it's the time offset of the start of a clip within a larger file.\n\nNote that Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
     *
     *
     * @var DateTime|string|null
     */
    protected $startTime;

    /**
     * A NewsArticle associated with the Media Object.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\NewsArticle|string
     */
    protected $associatedArticle;

    /**
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which the offer or delivery charge specification is not valid, e.g. a region where the transaction is not allowed.\n\nSee also [[eligibleRegion]].
     *       
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place|string|\OpenActive\Models\SchemaOrg\GeoShape
     */
    protected $ineligibleRegion;

    /**
     * Indicates if use of the media require a subscription  (either paid or free). Allowed values are ```true``` or ```false``` (note that an earlier version had 'yes', 'no').
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MediaSubscription|bool|string|null
     */
    protected $requiresSubscription;

    /**
     * Player type required&#x2014;for example, Flash or Silverlight.
     *
     *
     * @var string
     */
    protected $playerType;

    /**
     * The CreativeWork encoded by this media object.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWork|string
     */
    protected $encodesCreativeWork;

    /**
     * The duration of the item (movie, audio recording, event, etc.) in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601).
     *
     *
     * @var DateInterval|string|null
     */
    protected $duration;

    /**
     * Media type typically expressed using a MIME format (see [IANA site](http://www.iana.org/assignments/media-types/media-types.xhtml) and [MDN reference](https://developer.mozilla.org/en-US/docs/Web/HTTP/Basics_of_HTTP/MIME_types)) e.g. application/zip for a SoftwareApplication binary, audio/mpeg for .mp3 etc.).
     * 
     * In cases where a [[CreativeWork]] has several media type representations, [[encoding]] can be used to indicate each [[MediaObject]] alongside particular [[encodingFormat]] information.
     * 
     * Unregistered or niche encoding and file formats can be indicated instead via the most appropriate URL, e.g. defining Web page or a Wikipedia/Wikidata entry.
     *
     *
     * @var string
     */
    protected $encodingFormat;

    /**
     * Date when this media object was uploaded to this site.
     *
     *
     * @var Date|null
     */
    protected $uploadDate;

    /**
     * A URL pointing to a player for a specific video. In general, this is the information in the ```src``` element of an ```embed``` tag and should not be the same as the content of the ```loc``` tag.
     *
     *
     * @var string
     */
    protected $embedUrl;

    /**
     * The bitrate of the media object.
     *
     *
     * @var string
     */
    protected $bitrate;

    /**
     * The endTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to end. For actions that span a period of time, when the action was performed. e.g. John wrote a book from January to *December*. For media, including audio and video, it's the time offset of the end of a clip within a larger file.\n\nNote that Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
     *
     *
     * @var DateTime|string|null
     */
    protected $endTime;

    /**
     * The production company or studio responsible for the item e.g. series, video game, episode etc.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|string
     */
    protected $productionCompany;

    /**
     * The [SHA-2](https://en.wikipedia.org/wiki/SHA-2) SHA256 hash of the content of the item. For example, a zero-length input has value 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'
     *
     *
     * @var string
     */
    protected $sha256;

    /**
     * Used to indicate a specific claim contained, implied, translated or refined from the content of a [[MediaObject]] or other [[CreativeWork]]. The interpreting party can be indicated using [[claimInterpreter]].
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Claim|string
     */
    protected $interpretedAsClaim;

    /**
     * @return string
     */
    public function getContentSize()
    {
        return $this->contentSize;
    }

    /**
     * @param string $contentSize
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setContentSize($contentSize)
    {
        $types = [
            "string",
        ];

        $contentSize = self::checkTypes($contentSize, $types);

        $this->contentSize = $contentSize;
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
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|\OpenActive\Models\SchemaOrg\Distance|string
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|\OpenActive\Models\SchemaOrg\Distance|string $width
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setWidth($width)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "\OpenActive\Models\SchemaOrg\Distance",
            "string",
        ];

        $width = self::checkTypes($width, $types);

        $this->width = $width;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Distance|\OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Distance|\OpenActive\Models\SchemaOrg\QuantitativeValue|string $height
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHeight($height)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Distance",
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
        ];

        $height = self::checkTypes($height, $types);

        $this->height = $height;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Place|string
     */
    public function getRegionsAllowed()
    {
        return $this->regionsAllowed;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Place|string $regionsAllowed
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRegionsAllowed($regionsAllowed)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Place",
            "string",
        ];

        $regionsAllowed = self::checkTypes($regionsAllowed, $types);

        $this->regionsAllowed = $regionsAllowed;
    }

    /**
     * @return DateTime|string|null
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * @param DateTime|string|null $startTime
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setStartTime($startTime)
    {
        $types = [
            "DateTime",
            "Time",
            "null",
        ];

        $startTime = self::checkTypes($startTime, $types);

        $this->startTime = $startTime;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\NewsArticle|string
     */
    public function getAssociatedArticle()
    {
        return $this->associatedArticle;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\NewsArticle|string $associatedArticle
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAssociatedArticle($associatedArticle)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\NewsArticle",
            "string",
        ];

        $associatedArticle = self::checkTypes($associatedArticle, $types);

        $this->associatedArticle = $associatedArticle;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Place|string|\OpenActive\Models\SchemaOrg\GeoShape
     */
    public function getIneligibleRegion()
    {
        return $this->ineligibleRegion;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Place|string|\OpenActive\Models\SchemaOrg\GeoShape $ineligibleRegion
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIneligibleRegion($ineligibleRegion)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Place",
            "string",
            "\OpenActive\Models\SchemaOrg\GeoShape",
        ];

        $ineligibleRegion = self::checkTypes($ineligibleRegion, $types);

        $this->ineligibleRegion = $ineligibleRegion;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MediaSubscription|bool|string|null
     */
    public function getRequiresSubscription()
    {
        return $this->requiresSubscription;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MediaSubscription|bool|string|null $requiresSubscription
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRequiresSubscription($requiresSubscription)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MediaSubscription",
            "bool",
            "string",
            "null",
        ];

        $requiresSubscription = self::checkTypes($requiresSubscription, $types);

        $this->requiresSubscription = $requiresSubscription;
    }

    /**
     * @return string
     */
    public function getPlayerType()
    {
        return $this->playerType;
    }

    /**
     * @param string $playerType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPlayerType($playerType)
    {
        $types = [
            "string",
        ];

        $playerType = self::checkTypes($playerType, $types);

        $this->playerType = $playerType;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\CreativeWork|string
     */
    public function getEncodesCreativeWork()
    {
        return $this->encodesCreativeWork;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CreativeWork|string $encodesCreativeWork
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEncodesCreativeWork($encodesCreativeWork)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\CreativeWork",
            "string",
        ];

        $encodesCreativeWork = self::checkTypes($encodesCreativeWork, $types);

        $this->encodesCreativeWork = $encodesCreativeWork;
    }

    /**
     * @return DateInterval|string|null
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param DateInterval|string|null $duration
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDuration($duration)
    {
        $types = [
            "DateInterval",
            "string",
            "null",
        ];

        $duration = self::checkTypes($duration, $types);

        $this->duration = $duration;
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

    /**
     * @return Date|null
     */
    public function getUploadDate()
    {
        return $this->uploadDate;
    }

    /**
     * @param Date|null $uploadDate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setUploadDate($uploadDate)
    {
        $types = [
            "Date",
            "null",
        ];

        $uploadDate = self::checkTypes($uploadDate, $types);

        $this->uploadDate = $uploadDate;
    }

    /**
     * @return string
     */
    public function getEmbedUrl()
    {
        return $this->embedUrl;
    }

    /**
     * @param string $embedUrl
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEmbedUrl($embedUrl)
    {
        $types = [
            "string",
        ];

        $embedUrl = self::checkTypes($embedUrl, $types);

        $this->embedUrl = $embedUrl;
    }

    /**
     * @return string
     */
    public function getBitrate()
    {
        return $this->bitrate;
    }

    /**
     * @param string $bitrate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBitrate($bitrate)
    {
        $types = [
            "string",
        ];

        $bitrate = self::checkTypes($bitrate, $types);

        $this->bitrate = $bitrate;
    }

    /**
     * @return DateTime|string|null
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * @param DateTime|string|null $endTime
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEndTime($endTime)
    {
        $types = [
            "DateTime",
            "Time",
            "null",
        ];

        $endTime = self::checkTypes($endTime, $types);

        $this->endTime = $endTime;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|string
     */
    public function getProductionCompany()
    {
        return $this->productionCompany;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|string $productionCompany
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setProductionCompany($productionCompany)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "string",
        ];

        $productionCompany = self::checkTypes($productionCompany, $types);

        $this->productionCompany = $productionCompany;
    }

    /**
     * @return string
     */
    public function getSha256()
    {
        return $this->sha256;
    }

    /**
     * @param string $sha256
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSha256($sha256)
    {
        $types = [
            "string",
        ];

        $sha256 = self::checkTypes($sha256, $types);

        $this->sha256 = $sha256;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Claim|string
     */
    public function getInterpretedAsClaim()
    {
        return $this->interpretedAsClaim;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Claim|string $interpretedAsClaim
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setInterpretedAsClaim($interpretedAsClaim)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Claim",
            "string",
        ];

        $interpretedAsClaim = self::checkTypes($interpretedAsClaim, $types);

        $this->interpretedAsClaim = $interpretedAsClaim;
    }

}
