<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class CourseInstance extends \OpenActive\Models\SchemaOrg\Event
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:CourseInstance";
    }

    /**
     * A person assigned to instruct or provide instructional assistance for the <a class="localLink" href="https://schema.org/CourseInstance">CourseInstance</a>.
     *
     *
     * @var Person
     */
    protected $instructor;

    /**
     * The medium or means of delivery of the course instance or the mode of study, either as a text label (e.g. "online", "onsite" or "blended"; "synchronous" or "asynchronous"; "full-time" or "part-time") or as a URL reference to a term from a controlled vocabulary (e.g. https://ceds.ed.gov/element/001311#Asynchronous ).
     *
     *
     * @var string
     */
    protected $courseMode;

    /**
     * [NOTICE: This is a beta field, and is highly likely to change in future versions of this library.]
     * This course for which this is an offering.
     *
     *
     * @var Course
     */
    protected $course;

    /**
     * @return Person
     */
    public function getInstructor()
    {
        return $this->instructor;
    }

    /**
     * @param Person $instructor
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setInstructor($instructor)
    {
        $types = array(
            "Person",
        );

        $instructor = self::checkTypes($instructor, $types);

        $this->instructor = $instructor;
    }

    /**
     * @return string
     */
    public function getCourseMode()
    {
        return $this->courseMode;
    }

    /**
     * @param string $courseMode
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCourseMode($courseMode)
    {
        $types = array(
            "string",
        );

        $courseMode = self::checkTypes($courseMode, $types);

        $this->courseMode = $courseMode;
    }

    /**
     * @return Course
     */
    public function getCourse()
    {
        return $this->course;
    }

    /**
     * @param Course $course
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCourse($course)
    {
        $types = array(
            "Course",
        );

        $course = self::checkTypes($course, $types);

        $this->course = $course;
    }

}
