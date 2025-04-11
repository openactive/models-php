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

    public static function fieldList() {
        $fields = [
            "instructor" => "instructor",
            "courseMode" => "courseMode",
            "courseSchedule" => "courseSchedule",
            "courseWorkload" => "courseWorkload",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A person assigned to instruct or provide instructional assistance for the [[CourseInstance]].
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|string
     */
    protected $instructor;

    /**
     * The medium or means of delivery of the course instance or the mode of study, either as a text label (e.g. "online", "onsite" or "blended"; "synchronous" or "asynchronous"; "full-time" or "part-time") or as a URL reference to a term from a controlled vocabulary (e.g. https://ceds.ed.gov/element/001311#Asynchronous).
     *
     *
     * @var string
     */
    protected $courseMode;

    /**
     * Represents the length and pace of a course, expressed as a [[Schedule]].
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Schedule|string
     */
    protected $courseSchedule;

    /**
     * The amount of work expected of students taking the course, often provided as a figure per week or per month, and may be broken down by type. For example, "2 hours of lectures, 1 hour of lab work and 3 hours of independent study per week".
     *
     *
     * @var string
     */
    protected $courseWorkload;

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|string
     */
    public function getInstructor()
    {
        return $this->instructor;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|string $instructor
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setInstructor($instructor)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

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
        $types = [
            "string",
        ];

        $courseMode = self::checkTypes($courseMode, $types);

        $this->courseMode = $courseMode;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Schedule|string
     */
    public function getCourseSchedule()
    {
        return $this->courseSchedule;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Schedule|string $courseSchedule
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCourseSchedule($courseSchedule)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Schedule",
            "string",
        ];

        $courseSchedule = self::checkTypes($courseSchedule, $types);

        $this->courseSchedule = $courseSchedule;
    }

    /**
     * @return string
     */
    public function getCourseWorkload()
    {
        return $this->courseWorkload;
    }

    /**
     * @param string $courseWorkload
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCourseWorkload($courseWorkload)
    {
        $types = [
            "string",
        ];

        $courseWorkload = self::checkTypes($courseWorkload, $types);

        $this->courseWorkload = $courseWorkload;
    }

}
