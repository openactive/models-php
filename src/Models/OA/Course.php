<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from [Course](https://schema.org/Course), which means that any of this type's properties within schema.org may also be used. Note however the properties on this page must be used in preference if a relevant property is available.
 *
 */
class Course extends \OpenActive\Models\SchemaOrg\Course
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "Course";
    }

    public static function fieldList() {
        $fields = [
            "identifier" => "identifier",
            "name" => "name",
            "description" => "description",
            "activity" => "activity",
            "author" => "author",
            "url" => "url",
            "logo" => "beta:logo",
            "video" => "beta:video",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A local non-URI identifier for the resource
     *
     * ```json
     * "identifier": "BR1234"
     * ```
     *
     * @var string|int|\OpenActive\Models\OA\PropertyValue|\OpenActive\Models\OA\PropertyValue[]|null
     */
    protected $identifier;

    /**
     * The name of the Course
     *
     * ```json
     * "name": "Netball Youth Camp"
     * ```
     *
     * @var string
     */
    protected $name;

    /**
     * The description of the Course
     *
     * ```json
     * "description": "Netball Youth Camps give junior netballers the chance to get together with their friends and take to the court in the holidays!
     * 
     * The camp is a non-residential holiday camp providing ‘Nothing but Netball’; not only will there be top quality coaching and fun netball activities but there is even an opportunity to meet and be inspired by an elite player.
     * 
     * If you are a junior netball lover (or the parent of one!) these are an unmissable holiday activity."
     * ```
     *
     * @var string
     */
    protected $description;

    /**
     * Specifies the physical activity or activities that will take place during a Course.
     *
     * ```json
     * "activity": [
     *   {
     *     "@id": "https://openactive.io/activity-list#fbdc35a8-3dd0-40ee-a7ca-6ff40b3e5f90",
     *     "@type": "Concept",
     *     "prefLabel": "Netball",
     *     "inScheme": "https://openactive.io/activity-list"
     *   }
     * ]
     * ```
     *
     * @var \OpenActive\Models\OA\Concept[]
     */
    protected $activity;

    /**
     * The person or organization who have created the Course. An author might be an schema:Organization or a schema:Person.
     *
     * ```json
     * "author": {
     *   "name": "Central Speedball Association",
     *   "@type": "Organization",
     *   "url": "http://www.speedball-world.com"
     * }
     * ```
     *
     * @var \OpenActive\Models\OA\Person|\OpenActive\Models\OA\Organization
     */
    protected $author;

    /**
     * A definitive canonical URL for the Course.
     *
     * ```json
     * "url": "http://www.speedball-world.com/beginners-course"
     * ```
     *
     * @var string
     */
    protected $url;

    /**
     * [NOTICE: This is a beta field, and is highly likely to change in future versions of this library.]
     * An associated logo for a course.
     * 
     * If you are using this property, please join the discussion at proposal [#164](https://github.com/openactive/modelling-opportunity-data/issues/164).
     *
     *
     * @var \OpenActive\Models\ImageObject
     */
    protected $logo;

    /**
     * [NOTICE: This is a beta field, and is highly likely to change in future versions of this library.]
     * A related video object.
     * 
     * If you are using this property, please join the discussion at proposal [#88](https://github.com/openactive/modelling-opportunity-data/issues/88).
     *
     *
     * @var \OpenActive\Models\VideoObject[]
     */
    protected $video;

    /**
     * @return string|int|\OpenActive\Models\OA\PropertyValue|\OpenActive\Models\OA\PropertyValue[]|null
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * @param string|int|\OpenActive\Models\OA\PropertyValue|\OpenActive\Models\OA\PropertyValue[]|null $identifier
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIdentifier($identifier)
    {
        $types = [
            "string",
            "int",
            "\OpenActive\Models\OA\PropertyValue",
            "\OpenActive\Models\OA\PropertyValue[]",
            "null",
        ];

        $identifier = self::checkTypes($identifier, $types);

        $this->identifier = $identifier;
    }

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
     * @return \OpenActive\Models\OA\Concept[]
     */
    public function getActivity()
    {
        return $this->activity;
    }

    /**
     * @param \OpenActive\Models\OA\Concept[] $activity
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setActivity($activity)
    {
        $types = [
            "\OpenActive\Models\OA\Concept[]",
        ];

        $activity = self::checkTypes($activity, $types);

        $this->activity = $activity;
    }

    /**
     * @return \OpenActive\Models\OA\Person|\OpenActive\Models\OA\Organization
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param \OpenActive\Models\OA\Person|\OpenActive\Models\OA\Organization $author
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAuthor($author)
    {
        $types = [
            "\OpenActive\Models\OA\Person",
            "\OpenActive\Models\OA\Organization",
        ];

        $author = self::checkTypes($author, $types);

        $this->author = $author;
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

    /**
     * @return \OpenActive\Models\ImageObject
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * @param \OpenActive\Models\ImageObject $logo
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLogo($logo)
    {
        $types = [
            "\OpenActive\Models\ImageObject",
        ];

        $logo = self::checkTypes($logo, $types);

        $this->logo = $logo;
    }

    /**
     * @return \OpenActive\Models\VideoObject[]
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * @param \OpenActive\Models\VideoObject[] $video
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setVideo($video)
    {
        $types = [
            "\OpenActive\Models\VideoObject[]",
        ];

        $video = self::checkTypes($video, $types);

        $this->video = $video;
    }

}
