<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from [CourseInstance](https://schema.org/CourseInstance), which means that any of this type's properties within schema.org may also be used. Note however the properties on this page must be used in preference if a relevant property is available.
 *
 */
class CourseInstance extends \OpenActive\Models\OA\Event
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "CourseInstance";
    }

    public static function fieldList() {
        $fields = [
            "course" => "beta:course",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * [NOTICE: This is a beta field, and is highly likely to change in future versions of this library.]
     * This course for which this is an offering.
     * 
     * If you are using this property, please join the discussion at proposal [#164](https://github.com/openactive/modelling-opportunity-data/issues/164).
     *
     *
     * @var \OpenActive\Models\Course
     */
    protected $course;

    /**
     * @return \OpenActive\Models\Course
     */
    public function getCourse()
    {
        return $this->course;
    }

    /**
     * @param \OpenActive\Models\Course $course
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCourse($course)
    {
        $types = [
            "\OpenActive\Models\Course",
        ];

        $course = self::checkTypes($course, $types);

        $this->course = $course;
    }

}
