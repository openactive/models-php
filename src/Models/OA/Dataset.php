<?php

namespace OpenActive\Models\OA;

/**
 * 
 * ## **EARLY RELEASE NOTICE**
 * In order to expedite the OpenActive tooling work, this class has been added to the model for the purposes of testing.
 * IT IS SUBJECT TO CHANGE, as the [Dataset API Discovery specification](https://www.openactive.io/dataset-api-discovery/EditorsDraft/) evolves.
 * 
 * This type is derived from [Dataset](https://schema.org/Dataset), which means that any of this type's properties within schema.org may also be used. Note however the properties on this page must be used in preference if a relevant property is available.
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
     * The name of the Dataset
     *
     * ```json
     * "name": "Acme Leisure Sessions and Facilities"
     * ```
     *
     * @var string
     */
    protected $name;

    /**
     * The description of the Dataset
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
     * A background image for the Dataset.
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
     * The date this Dataset was last updated. For RPDE feeds this may simply be the date and time that the Dataset Site was rendered, which may be cached.
     *
     * ```json
     * "dateModified": "2018-01-27T12:00:00Z"
     * ```
     *
     * @var DateTime|null
     */
    protected $dateModified;

    /**
     * The date this Dataset was first published. Can be specified as a schema:Date or schema:DateTime.
     *
     * ```json
     * "datePublished": "2018-01-27T12:00:00Z"
     * ```
     *
     * @var DateTime|null
     */
    protected $datePublished;

    /**
     * A URL that can be used to raise issues related to the Dataset via a public forum.
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
     * A link to documentation related to the Dataset, or a link to the OpenActive developer documentation if no Dataset-specific documentation is available.
     *
     * ```json
     * "documentation": "https://developer.openactive.io"
     * ```
     *
     * @var string
     */
    protected $documentation;

    /**
     * An array of languages included in the Dataset content. Please use one of the language codes from the IETF BCP 47 standard.
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
     * The organization ultimately responsible for this Dataset.
     *
     * ```json
     * "publisher": {
     *   "name": "Central Speedball Association",
     *   "type": "Organization",
     *   "url": "http://www.speedball-world.com"
     * }
     * ```
     *
     * @var \OpenActive\Models\OA\Organization
     */
    protected $publisher;

    /**
     * Indicates the version of OpenActive Modelling Opportunity Data Specification with which this Dataset conforms, by specifying its URL.
     *
     * ```json
     * "schemaVersion": "https://www.openactive.io/modelling-opportunity-data/2.0/"
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
        $types = array(
            "string",
        );

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
        $types = array(
            "string",
        );

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
        $types = array(
            "\OpenActive\Models\OA\WebAPI",
        );

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
        $types = array(
            "\OpenActive\Models\OA\ImageObject",
        );

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
        $types = array(
            "\OpenActive\Models\OA\BookingService",
        );

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
        $types = array(
            "DateTime",
            "null",
        );

        $dateModified = self::checkTypes($dateModified, $types);

        $this->dateModified = $dateModified;
    }

    /**
     * @return DateTime|null
     */
    public function getDatePublished()
    {
        return $this->datePublished;
    }

    /**
     * @param DateTime|null $datePublished
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDatePublished($datePublished)
    {
        $types = array(
            "DateTime",
            "null",
        );

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
        $types = array(
            "string",
        );

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
        $types = array(
            "\OpenActive\Models\OA\DataDownload[]",
        );

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
        $types = array(
            "string",
        );

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
        $types = array(
            "string[]",
        );

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
        $types = array(
            "string[]",
        );

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
        $types = array(
            "string",
        );

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
        $types = array(
            "\OpenActive\Models\OA\Organization",
        );

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
        $types = array(
            "string",
        );

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
        $types = array(
            "string",
        );

        $url = self::checkTypes($url, $types);

        $this->url = $url;
    }

}
