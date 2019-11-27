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
            "encodingFormat" => "encodingFormat",
            "embedUrl" => "embedUrl",
            "startTime" => "startTime",
            "width" => "width",
            "playerType" => "playerType",
            "contentUrl" => "contentUrl",
            "bitrate" => "bitrate",
            "regionsAllowed" => "regionsAllowed",
            "encodesCreativeWork" => "encodesCreativeWork",
            "duration" => "duration",
            "productionCompany" => "productionCompany",
            "associatedArticle" => "associatedArticle",
            "endTime" => "endTime",
            "requiresSubscription" => "requiresSubscription",
            "height" => "height",
            "uploadDate" => "uploadDate",
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
     * Media type typically expressed using a MIME format (see <a href="http://www.iana.org/assignments/media-types/media-types.xhtml">IANA site</a> and <a href="https://developer.mozilla.org/en-US/docs/Web/HTTP/Basics_of_HTTP/MIME_types">MDN reference</a>) e.g. application/zip for a SoftwareApplication binary, audio/mpeg for .mp3 etc.).<br/><br/>
     * 
     * In cases where a <a class="localLink" href="https://schema.org/CreativeWork">CreativeWork</a> has several media type representations, <a class="localLink" href="https://schema.org/encoding">encoding</a> can be used to indicate each <a class="localLink" href="https://schema.org/MediaObject">MediaObject</a> alongside particular <a class="localLink" href="https://schema.org/encodingFormat">encodingFormat</a> information.<br/><br/>
     * 
     * Unregistered or niche encoding and file formats can be indicated instead via the most appropriate URL, e.g. defining Web page or a Wikipedia/Wikidata entry.
     *
     *
     * @var string
     */
    protected $encodingFormat;

    /**
     * A URL pointing to a player for a specific video. In general, this is the information in the <code>src</code> element of an <code>embed</code> tag and should not be the same as the content of the <code>loc</code> tag.
     *
     *
     * @var string
     */
    protected $embedUrl;

    /**
     * The startTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to start. For actions that span a period of time, when the action was performed. e.g. John wrote a book from <em>January</em> to December. For media, including audio and video, it's the time offset of the start of a clip within a larger file.<br/><br/>
     * 
     * Note that Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
     *
     *
     * @var string|DateTime|null
     */
    protected $startTime;

    /**
     * The width of the item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Distance|\OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    protected $width;

    /**
     * Player type required&#x2014;for example, Flash or Silverlight.
     *
     *
     * @var string
     */
    protected $playerType;

    /**
     * Actual bytes of the media object, for example the image file or video file.
     *
     *
     * @var string
     */
    protected $contentUrl;

    /**
     * The bitrate of the media object.
     *
     *
     * @var string
     */
    protected $bitrate;

    /**
     * The regions where the media is allowed. If not specified, then it's assumed to be allowed everywhere. Specify the countries in <a href="http://en.wikipedia.org/wiki/ISO_3166">ISO 3166 format</a>.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place
     */
    protected $regionsAllowed;

    /**
     * The CreativeWork encoded by this media object.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWork
     */
    protected $encodesCreativeWork;

    /**
     * The duration of the item (movie, audio recording, event, etc.) in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 date format</a>.
     *
     *
     * @var DateInterval|null
     */
    protected $duration;

    /**
     * The production company or studio responsible for the item e.g. series, video game, episode etc.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization
     */
    protected $productionCompany;

    /**
     * A NewsArticle associated with the Media Object.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\NewsArticle
     */
    protected $associatedArticle;

    /**
     * The endTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to end. For actions that span a period of time, when the action was performed. e.g. John wrote a book from January to <em>December</em>. For media, including audio and video, it's the time offset of the end of a clip within a larger file.<br/><br/>
     * 
     * Note that Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
     *
     *
     * @var string|DateTime|null
     */
    protected $endTime;

    /**
     * Indicates if use of the media require a subscription  (either paid or free). Allowed values are <code>true</code> or <code>false</code> (note that an earlier version had 'yes', 'no').
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MediaSubscription|bool|null
     */
    protected $requiresSubscription;

    /**
     * The height of the item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|\OpenActive\Models\SchemaOrg\Distance
     */
    protected $height;

    /**
     * Date when this media object was uploaded to this site.
     *
     *
     * @var DateTime|null
     */
    protected $uploadDate;

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
        $types = array(
            "string",
        );

        $contentSize = self::checkTypes($contentSize, $types);

        $this->contentSize = $contentSize;
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
        $types = array(
            "string",
        );

        $encodingFormat = self::checkTypes($encodingFormat, $types);

        $this->encodingFormat = $encodingFormat;
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
        $types = array(
            "string",
        );

        $embedUrl = self::checkTypes($embedUrl, $types);

        $this->embedUrl = $embedUrl;
    }

    /**
     * @return string|DateTime|null
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * @param string|DateTime|null $startTime
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setStartTime($startTime)
    {
        $types = array(
            "Time",
            "DateTime",
            "null",
        );

        $startTime = self::checkTypes($startTime, $types);

        $this->startTime = $startTime;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Distance|\OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Distance|\OpenActive\Models\SchemaOrg\QuantitativeValue $width
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setWidth($width)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Distance",
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
        );

        $width = self::checkTypes($width, $types);

        $this->width = $width;
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
        $types = array(
            "string",
        );

        $playerType = self::checkTypes($playerType, $types);

        $this->playerType = $playerType;
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
        $types = array(
            "string",
        );

        $contentUrl = self::checkTypes($contentUrl, $types);

        $this->contentUrl = $contentUrl;
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
        $types = array(
            "string",
        );

        $bitrate = self::checkTypes($bitrate, $types);

        $this->bitrate = $bitrate;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Place
     */
    public function getRegionsAllowed()
    {
        return $this->regionsAllowed;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Place $regionsAllowed
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRegionsAllowed($regionsAllowed)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Place",
        );

        $regionsAllowed = self::checkTypes($regionsAllowed, $types);

        $this->regionsAllowed = $regionsAllowed;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\CreativeWork
     */
    public function getEncodesCreativeWork()
    {
        return $this->encodesCreativeWork;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CreativeWork $encodesCreativeWork
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEncodesCreativeWork($encodesCreativeWork)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\CreativeWork",
        );

        $encodesCreativeWork = self::checkTypes($encodesCreativeWork, $types);

        $this->encodesCreativeWork = $encodesCreativeWork;
    }

    /**
     * @return DateInterval|null
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param DateInterval|null $duration
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDuration($duration)
    {
        $types = array(
            "DateInterval",
            "null",
        );

        $duration = self::checkTypes($duration, $types);

        $this->duration = $duration;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization
     */
    public function getProductionCompany()
    {
        return $this->productionCompany;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization $productionCompany
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setProductionCompany($productionCompany)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Organization",
        );

        $productionCompany = self::checkTypes($productionCompany, $types);

        $this->productionCompany = $productionCompany;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\NewsArticle
     */
    public function getAssociatedArticle()
    {
        return $this->associatedArticle;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\NewsArticle $associatedArticle
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAssociatedArticle($associatedArticle)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\NewsArticle",
        );

        $associatedArticle = self::checkTypes($associatedArticle, $types);

        $this->associatedArticle = $associatedArticle;
    }

    /**
     * @return string|DateTime|null
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * @param string|DateTime|null $endTime
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEndTime($endTime)
    {
        $types = array(
            "Time",
            "DateTime",
            "null",
        );

        $endTime = self::checkTypes($endTime, $types);

        $this->endTime = $endTime;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MediaSubscription|bool|null
     */
    public function getRequiresSubscription()
    {
        return $this->requiresSubscription;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MediaSubscription|bool|null $requiresSubscription
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRequiresSubscription($requiresSubscription)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\MediaSubscription",
            "bool",
            "null",
        );

        $requiresSubscription = self::checkTypes($requiresSubscription, $types);

        $this->requiresSubscription = $requiresSubscription;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|\OpenActive\Models\SchemaOrg\Distance
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|\OpenActive\Models\SchemaOrg\Distance $height
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHeight($height)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "\OpenActive\Models\SchemaOrg\Distance",
        );

        $height = self::checkTypes($height, $types);

        $this->height = $height;
    }

    /**
     * @return DateTime|null
     */
    public function getUploadDate()
    {
        return $this->uploadDate;
    }

    /**
     * @param DateTime|null $uploadDate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setUploadDate($uploadDate)
    {
        $types = array(
            "DateTime",
            "null",
        );

        $uploadDate = self::checkTypes($uploadDate, $types);

        $this->uploadDate = $uploadDate;
    }

}
