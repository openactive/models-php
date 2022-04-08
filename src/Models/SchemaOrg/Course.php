<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Course extends \OpenActive\Models\SchemaOrg\LearningResource
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Course";
    }

    public static function fieldList() {
        $fields = [
            "coursePrerequisites" => "coursePrerequisites",
            "educationalCredentialAwarded" => "educationalCredentialAwarded",
            "numberOfCredits" => "numberOfCredits",
            "occupationalCredentialAwarded" => "occupationalCredentialAwarded",
            "courseCode" => "courseCode",
            "hasCourseInstance" => "hasCourseInstance",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Requirements for taking the Course. May be completion of another [[Course]] or a textual description like "permission of instructor". Requirements may be a pre-requisite competency, referenced using [[AlignmentObject]].
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\AlignmentObject|\OpenActive\Models\SchemaOrg\Course
     */
    protected $coursePrerequisites;

    /**
     * A description of the qualification, award, certificate, diploma or other educational credential awarded as a consequence of successful completion of this course or program.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\EducationalOccupationalCredential
     */
    protected $educationalCredentialAwarded;

    /**
     * The number of credits or units awarded by a Course or required to complete an EducationalOccupationalProgram.
     *
     *
     * @var int|\OpenActive\Models\SchemaOrg\StructuredValue|string|null
     */
    protected $numberOfCredits;

    /**
     * A description of the qualification, award, certificate, diploma or other occupational credential awarded as a consequence of successful completion of this course or program.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\EducationalOccupationalCredential|string
     */
    protected $occupationalCredentialAwarded;

    /**
     * The identifier for the [[Course]] used by the course [[provider]] (e.g. CS101 or 6.001).
     *
     *
     * @var string
     */
    protected $courseCode;

    /**
     * An offering of the course at a specific time and place or through specific media or mode of study or to a specific section of students.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CourseInstance|string
     */
    protected $hasCourseInstance;

    /**
     * @return string|\OpenActive\Models\SchemaOrg\AlignmentObject|\OpenActive\Models\SchemaOrg\Course
     */
    public function getCoursePrerequisites()
    {
        return $this->coursePrerequisites;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\AlignmentObject|\OpenActive\Models\SchemaOrg\Course $coursePrerequisites
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCoursePrerequisites($coursePrerequisites)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\AlignmentObject",
            "\OpenActive\Models\SchemaOrg\Course",
        ];

        $coursePrerequisites = self::checkTypes($coursePrerequisites, $types);

        $this->coursePrerequisites = $coursePrerequisites;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\EducationalOccupationalCredential
     */
    public function getEducationalCredentialAwarded()
    {
        return $this->educationalCredentialAwarded;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\EducationalOccupationalCredential $educationalCredentialAwarded
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEducationalCredentialAwarded($educationalCredentialAwarded)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\EducationalOccupationalCredential",
        ];

        $educationalCredentialAwarded = self::checkTypes($educationalCredentialAwarded, $types);

        $this->educationalCredentialAwarded = $educationalCredentialAwarded;
    }

    /**
     * @return int|\OpenActive\Models\SchemaOrg\StructuredValue|string|null
     */
    public function getNumberOfCredits()
    {
        return $this->numberOfCredits;
    }

    /**
     * @param int|\OpenActive\Models\SchemaOrg\StructuredValue|string|null $numberOfCredits
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNumberOfCredits($numberOfCredits)
    {
        $types = [
            "int",
            "\OpenActive\Models\SchemaOrg\StructuredValue",
            "string",
            "null",
        ];

        $numberOfCredits = self::checkTypes($numberOfCredits, $types);

        $this->numberOfCredits = $numberOfCredits;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\EducationalOccupationalCredential|string
     */
    public function getOccupationalCredentialAwarded()
    {
        return $this->occupationalCredentialAwarded;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\EducationalOccupationalCredential|string $occupationalCredentialAwarded
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOccupationalCredentialAwarded($occupationalCredentialAwarded)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\EducationalOccupationalCredential",
            "string",
        ];

        $occupationalCredentialAwarded = self::checkTypes($occupationalCredentialAwarded, $types);

        $this->occupationalCredentialAwarded = $occupationalCredentialAwarded;
    }

    /**
     * @return string
     */
    public function getCourseCode()
    {
        return $this->courseCode;
    }

    /**
     * @param string $courseCode
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCourseCode($courseCode)
    {
        $types = [
            "string",
        ];

        $courseCode = self::checkTypes($courseCode, $types);

        $this->courseCode = $courseCode;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\CourseInstance|string
     */
    public function getHasCourseInstance()
    {
        return $this->hasCourseInstance;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CourseInstance|string $hasCourseInstance
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHasCourseInstance($hasCourseInstance)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\CourseInstance",
            "string",
        ];

        $hasCourseInstance = self::checkTypes($hasCourseInstance, $types);

        $this->hasCourseInstance = $hasCourseInstance;
    }

}
