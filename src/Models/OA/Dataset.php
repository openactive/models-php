<?php

namespace OpenActive\Models\OA;

/**
 * 
 * EARLY RELEASE NOTICE: This class represents a draft that is designed to inform the OpenActive specification work with implementation feedback. It is mostly stable, as it based almost entirely on schema.org. HOWEVER, IT IS STILL SUBJECT TO CHANGE, as the [Dataset API Discovery specification](https://openactive.io/dataset-api-discovery/EditorsDraft/) evolves.
 * 
 * This type is derived from https://schema.org/Dataset, which means that any of this type's properties within schema.org may also be used.
 *
 */
class Dataset extends \OpenActive\Models\SchemaOrg\Dataset
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "Dataset";
    }

    public static function fieldList() {
        $fields = [
            "name" => "name",
            "description" => "description",
            "accessService" => "accessService",
            "backgroundImage" => "backgroundImage",
            "bookingService" => "bookingService",
            "dateModified" => "dateModified",
            "datePublished" => "datePublished",
            "discussionUrl" => "discussionUrl",
            "distribution" => "distribution",
            "documentation" => "documentation",
            "inLanguage" => "inLanguage",
            "keywords" => "keywords",
            "license" => "license",
            "publisher" => "publisher",
            "schemaVersion" => "schemaVersion",
            "url" => "url",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The name of the `Dataset`
     *
     * ```json
     * "name": "Acme Leisure Sessions and Facilities"
     * ```
     *
     * @var string
     */
    protected $name;

    /**
     * A plain text description of the `Dataset`, which must not include HTML or other markup.
     *
     * ```json
     * "description": "Near real-time availability and rich descriptions relating to the sessions and facilities available from {OrganisationName}, published using the OpenActive Modelling Specification 2.0."
     * ```
     *
     * @var string
     */
    protected $description;

    /**
     * Information about the Open Booking API. Note this property is in EARLY RELEASE AND IS SUBJECT TO CHANGE.
     *
     *
     * @var \OpenActive\Models\OA\WebAPI
     */
    protected $accessService;

    /**
     * A background image for the `Dataset`.
     *
     * ```json
     * "backgroundImage": {
     *   "@type": "ImageObject",
     *   "url": "http://example.com/static/image/speedball_large.jpg"
     * }
     * ```
     *
     * @var \OpenActive\Models\OA\ImageObject
     */
    protected $backgroundImage;

    /**
     * Information about the Booking System or publishing platform
     *
     *
     * @var \OpenActive\Models\OA\BookingService
     */
    protected $bookingService;

    /**
     * The date this `Dataset` was last updated. For RPDE feeds this may simply be the date and time that the Dataset Site was rendered, which may be cached.
     *
     * ```json
     * "dateModified": "2018-01-27T12:00:00Z"
     * ```
     *
     * @var DateTime|null
     */
    protected $dateModified;

    /**
     * The date this `Dataset` was first published. Can be specified as a schema:Date or schema:DateTime.
     *
     * ```json
     * "datePublished": "2018-01-27T12:00:00Z"
     * ```
     *
     * @var Date|DateTime|null
     */
    protected $datePublished;

    /**
     * A URL that can be used to raise issues related to the `Dataset` via a public forum.
     *
     * ```json
     * "discussionUrl": "https://github.com/gladstonemrm/FusionLifestyle/issues"
     * ```
     *
     * @var string
     */
    protected $discussionUrl;

    /**
     * An array of feeds within the dataset
     *
     * ```json
     * "distribution": [
     *   {
     *     "@type": "DataDownload",
     *     "name": "FacilityUse",
     *     "additionalType": "https://openactive.io/FacilityUse",
     *     "encodingFormat": "application/vnd.openactive.rpde+json; version=1",
     *     "contentUrl": "https://opendata.leisurecloud.live/api/feeds/fusion-lifestyle-fl-live-facility-uses"
     *   }
     * ]
     * ```
     *
     * @var \OpenActive\Models\OA\DataDownload[]
     */
    protected $distribution;

    /**
     * A link to documentation related to the `Dataset`, or a link to the OpenActive developer documentation using `https://permalink.openactive.io/dataset-site/open-data-documentation` if no Dataset-specific documentation is available.
     *
     * ```json
     * "documentation": "https://permalink.openactive.io/dataset-site/open-data-documentation"
     * ```
     *
     * @var string
     */
    protected $documentation;

    /**
     * An array of languages included in the Dataset's content. Please use one of the language codes from the IETF BCP 47 standard.
     *
     * ```json
     * "inLanguage": [
     *   "en-GB"
     * ]
     * ```
     *
     * @var string[]
     */
    protected $inLanguage;

    /**
     * Keywords for search engine optimisation
     *
     * ```json
     * "keywords": [
     *   "Sessions",
     *   "Facilities",
     *   "Activities",
     *   "Sports",
     *   "Physical Activity",
     *   "OpenActive"
     * ]
     * ```
     *
     * @var string[]
     */
    protected $keywords;

    /**
     * Must always be present and set to ```json
     * "license": "https://creativecommons.org/licenses/by/4.0/"
     * ```
     *
     * ```json
     * "license": "https://creativecommons.org/licenses/by/4.0/"
     * ```
     *
     * @var string
     */
    protected $license;

    /**
     * The organization ultimately responsible for this `Dataset`.
     *
     * ```json
     * "publisher": {
     *   "@type": "Organization",
     *   "name": "Central Speedball Association",
     *   "url": "http://www.speedball-world.com"
     * }
     * ```
     *
     * @var \OpenActive\Models\OA\Organization
     */
    protected $publisher;

    /**
     * Indicates the version of OpenActive Modelling Opportunity Data Specification with which this `Dataset` conforms, by specifying its URL.
     *
     * ```json
     * "schemaVersion": "https://openactive.io/modelling-opportunity-data/2.0/"
     * ```
     *
     * @var string
     */
    protected $schemaVersion;

    /**
     * The URL of the dataset site.
     *
     * ```json
     * "url": "https://opendata.fusion-lifestyle.com/OpenActive/"
     * ```
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
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDescription($description)
    {
        $types = [
            "string",
        ];

        $description = self::checkTypes($description, $types);

        $this->description = $description;
    }

    /**
     * @return \OpenActive\Models\OA\WebAPI
     */
    public function getAccessService()
    {
        return $this->accessService;
    }

    /**
     * @param \OpenActive\Models\OA\WebAPI $accessService
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAccessService($accessService)
    {
        $types = [
            "\OpenActive\Models\OA\WebAPI",
        ];

        $accessService = self::checkTypes($accessService, $types);

        $this->accessService = $accessService;
    }

    /**
     * @return \OpenActive\Models\OA\ImageObject
     */
    public function getBackgroundImage()
    {
        return $this->backgroundImage;
    }

    /**
     * @param \OpenActive\Models\OA\ImageObject $backgroundImage
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBackgroundImage($backgroundImage)
    {
        $types = [
            "\OpenActive\Models\OA\ImageObject",
        ];

        $backgroundImage = self::checkTypes($backgroundImage, $types);

        $this->backgroundImage = $backgroundImage;
    }

    /**
     * @return \OpenActive\Models\OA\BookingService
     */
    public function getBookingService()
    {
        return $this->bookingService;
    }

    /**
     * @param \OpenActive\Models\OA\BookingService $bookingService
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBookingService($bookingService)
    {
        $types = [
            "\OpenActive\Models\OA\BookingService",
        ];

        $bookingService = self::checkTypes($bookingService, $types);

        $this->bookingService = $bookingService;
    }

    /**
     * @return DateTime|null
     */
    public function getDateModified()
    {
        return $this->dateModified;
    }

    /**
     * @param DateTime|null $dateModified
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDateModified($dateModified)
    {
        $types = [
            "DateTime",
            "null",
        ];

        $dateModified = self::checkTypes($dateModified, $types);

        $this->dateModified = $dateModified;
    }

    /**
     * @return Date|DateTime|null
     */
    public function getDatePublished()
    {
        return $this->datePublished;
    }

    /**
     * @param Date|DateTime|null $datePublished
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDatePublished($datePublished)
    {
        $types = [
            "Date",
            "DateTime",
            "null",
        ];

        $datePublished = self::checkTypes($datePublished, $types);

        $this->datePublished = $datePublished;
    }

    /**
     * @return string
     */
    public function getDiscussionUrl()
    {
        return $this->discussionUrl;
    }

    /**
     * @param string $discussionUrl
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDiscussionUrl($discussionUrl)
    {
        $types = [
            "string",
        ];

        $discussionUrl = self::checkTypes($discussionUrl, $types);

        $this->discussionUrl = $discussionUrl;
    }

    /**
     * @return \OpenActive\Models\OA\DataDownload[]
     */
    public function getDistribution()
    {
        return $this->distribution;
    }

    /**
     * @param \OpenActive\Models\OA\DataDownload[] $distribution
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDistribution($distribution)
    {
        $types = [
            "\OpenActive\Models\OA\DataDownload[]",
        ];

        $distribution = self::checkTypes($distribution, $types);

        $this->distribution = $distribution;
    }

    /**
     * @return string
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * @param string $documentation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDocumentation($documentation)
    {
        $types = [
            "string",
        ];

        $documentation = self::checkTypes($documentation, $types);

        $this->documentation = $documentation;
    }

    /**
     * @return string[]
     */
    public function getInLanguage()
    {
        return $this->inLanguage;
    }

    /**
     * @param string[] $inLanguage
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setInLanguage($inLanguage)
    {
        $types = [
            "string[]",
        ];

        $inLanguage = self::checkTypes($inLanguage, $types);

        $this->inLanguage = $inLanguage;
    }

    /**
     * @return string[]
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * @param string[] $keywords
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setKeywords($keywords)
    {
        $types = [
            "string[]",
        ];

        $keywords = self::checkTypes($keywords, $types);

        $this->keywords = $keywords;
    }

    /**
     * @return string
     */
    public function getLicense()
    {
        return $this->license;
    }

    /**
     * @param string $license
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLicense($license)
    {
        $types = [
            "string",
        ];

        $license = self::checkTypes($license, $types);

        $this->license = $license;
    }

    /**
     * @return \OpenActive\Models\OA\Organization
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * @param \OpenActive\Models\OA\Organization $publisher
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPublisher($publisher)
    {
        $types = [
            "\OpenActive\Models\OA\Organization",
        ];

        $publisher = self::checkTypes($publisher, $types);

        $this->publisher = $publisher;
    }

    /**
     * @return string
     */
    public function getSchemaVersion()
    {
        return $this->schemaVersion;
    }

    /**
     * @param string $schemaVersion
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSchemaVersion($schemaVersion)
    {
        $types = [
            "string",
        ];

        $schemaVersion = self::checkTypes($schemaVersion, $types);

        $this->schemaVersion = $schemaVersion;
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
