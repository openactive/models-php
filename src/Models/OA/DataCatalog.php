<?php

namespace OpenActive\Models\OA;

/**
 * 
 * EARLY RELEASE NOTICE: This class represents a draft that is designed to inform the OpenActive specification work with implementation feedback. It is mostly stable, as it based entirely on schema.org. HOWEVER, IT IS STILL SUBJECT TO CHANGE, as the [Dataset API Discovery specification](https://openactive.io/dataset-api-discovery/EditorsDraft/) evolves.
 * 
 * This type is derived from https://schema.org/DataCatalog, which means that any of this type's properties within schema.org may also be used.
 *
 */
class DataCatalog extends \OpenActive\Models\SchemaOrg\DataCatalog
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "DataCatalog";
    }

    public static function fieldList() {
        $fields = [
            "name" => "name",
            "dataset" => "dataset",
            "dateModified" => "dateModified",
            "datePublished" => "datePublished",
            "hasPart" => "hasPart",
            "license" => "license",
            "publisher" => "publisher",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The name of the `DataCatalog`
     *
     * ```json
     * "name": "Acme Leisure Sessions and Facilities"
     * ```
     *
     * @var string
     */
    protected $name;

    /**
     * The URLs of the dataset sites within this `DataCatalog`.
     *
     * ```json
     * "dataset": [
     *   "https://opendata.exercise-anywhere.com/",
     *   "https://www.participant.co.uk/participant/openactive/"
     * ]
     * ```
     *
     * @var string[]
     */
    protected $dataset;

    /**
     * The date this `DataCatalog` was last updated.
     *
     * ```json
     * "dateModified": "2018-01-27T12:00:00Z"
     * ```
     *
     * @var DateTime|null
     */
    protected $dateModified;

    /**
     * The date this `DataCatalog` was first published. Can be specified as a schema:Date or schema:DateTime.
     *
     * ```json
     * "datePublished": "2018-01-27T12:00:00Z"
     * ```
     *
     * @var Date|DateTime|null
     */
    protected $datePublished;

    /**
     * The URLs of each smaller `DataCatalog` within this `DataCatalog` collection.
     *
     * ```json
     * "hasPart": [
     *   "https://opendata.leisurecloud.live/api/datacatalog",
     *   "https://openactivedatacatalog.legendonlineservices.co.uk/api/DataCatalog"
     * ]
     * ```
     *
     * @var string[]
     */
    protected $hasPart;

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
     * The organization ultimately responsible for maintaining this `DataCatalog`.
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
     * @return string[]
     */
    public function getDataset()
    {
        return $this->dataset;
    }

    /**
     * @param string[] $dataset
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDataset($dataset)
    {
        $types = [
            "string[]",
        ];

        $dataset = self::checkTypes($dataset, $types);

        $this->dataset = $dataset;
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
     * @return string[]
     */
    public function getHasPart()
    {
        return $this->hasPart;
    }

    /**
     * @param string[] $hasPart
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHasPart($hasPart)
    {
        $types = [
            "string[]",
        ];

        $hasPart = self::checkTypes($hasPart, $types);

        $this->hasPart = $hasPart;
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

}
