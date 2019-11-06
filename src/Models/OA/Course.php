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

    /**
     * A local non-URI identifier for the resource
     *
     * ```json
     * "identifier": "BR1234"
     * ```
     *
     * @var int|string|PropertyValue|PropertyValue[]|null
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
     *     "id": "https://openactive.io/activity-list#fbdc35a8-3dd0-40ee-a7ca-6ff40b3e5f90",
     *     "type": "Concept",
     *     "prefLabel": "Netball",
     *     "inScheme": "https://openactive.io/activity-list"
     *   }
     * ]
     * ```
     *
     * @var Concept[]
     */
    protected $activity;

    /**
     * The person or organization who have created the Course. An author might be an schema:Organization or a schema:Person.
     *
     * ```json
     * "author": {
     *   "name": "Central Speedball Association",
     *   "type": "Organization",
     *   "url": "http://www.speedball-world.com"
     * }
     * ```
     *
     * @var Person|Organization
     */
    protected $author;

    /**
     * A logo for the Course.
     *
     * ```json
     * "logo": {
     *   "@type": "ImageObject",
     *   "url": "http://example.com/static/image/speedball_large.jpg"
     * }
     * ```
     *
     * @var ImageObject
     */
    protected $logo;

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
     * @return int|string|PropertyValue|PropertyValue[]|null
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * @param int|string|PropertyValue|PropertyValue[]|null $identifier
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIdentifier($identifier)
    {
        $types = array(
            "int",
            "string",
            "PropertyValue",
            "PropertyValue[]",
            "null",
        );

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
     * @return Concept[]
     */
    public function getActivity()
    {
        return $this->activity;
    }

    /**
     * @param Concept[] $activity
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setActivity($activity)
    {
        $types = array(
            "Concept[]",
        );

        $activity = self::checkTypes($activity, $types);

        $this->activity = $activity;
    }

    /**
     * @return Person|Organization
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param Person|Organization $author
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAuthor($author)
    {
        $types = array(
            "Person",
            "Organization",
        );

        $author = self::checkTypes($author, $types);

        $this->author = $author;
    }

    /**
     * @return ImageObject
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * @param ImageObject $logo
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLogo($logo)
    {
        $types = array(
            "ImageObject",
        );

        $logo = self::checkTypes($logo, $types);

        $this->logo = $logo;
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
