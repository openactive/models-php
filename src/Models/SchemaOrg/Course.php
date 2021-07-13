<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Course extends \OpenActive\Models\SchemaOrg\CreativeWork
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
            "numberOfCredits" => "numberOfCredits",
            "educationalCredentialAwarded" => "educationalCredentialAwarded",
            "courseCode" => "courseCode",
            "hasCourseInstance" => "hasCourseInstance",
            "coursePrerequisites" => "coursePrerequisites",
            "occupationalCredentialAwarded" => "occupationalCredentialAwarded",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The number of credits or units awarded by a Course or required to complete an EducationalOccupationalProgram.
     *
     *
     * @var int|\OpenActive\Models\SchemaOrg\StructuredValue|string|null
     */
    protected $numberOfCredits;

    /**
     * A description of the qualification, award, certificate, diploma or other educational credential awarded as a consequence of successful completion of this course or program.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\EducationalOccupationalCredential|string
     */
    protected $educationalCredentialAwarded;

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
     * Requirements for taking the Course. May be completion of another [[Course]] or a textual description like "permission of instructor". Requirements may be a pre-requisite competency, referenced using [[AlignmentObject]].
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Course|\OpenActive\Models\SchemaOrg\AlignmentObject|string
     */
    protected $coursePrerequisites;

    /**
     * A description of the qualification, award, certificate, diploma or other occupational credential awarded as a consequence of successful completion of this course or program.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\EducationalOccupationalCredential
     */
    protected $occupationalCredentialAwarded;

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
    public function getEducationalCredentialAwarded()
    {
        return $this->educationalCredentialAwarded;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\EducationalOccupationalCredential|string $educationalCredentialAwarded
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEducationalCredentialAwarded($educationalCredentialAwarded)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\EducationalOccupationalCredential",
            "string",
        ];

        $educationalCredentialAwarded = self::checkTypes($educationalCredentialAwarded, $types);

        $this->educationalCredentialAwarded = $educationalCredentialAwarded;
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

    /**
     * @return \OpenActive\Models\SchemaOrg\Course|\OpenActive\Models\SchemaOrg\AlignmentObject|string
     */
    public function getCoursePrerequisites()
    {
        return $this->coursePrerequisites;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Course|\OpenActive\Models\SchemaOrg\AlignmentObject|string $coursePrerequisites
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCoursePrerequisites($coursePrerequisites)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Course",
            "\OpenActive\Models\SchemaOrg\AlignmentObject",
            "string",
        ];

        $coursePrerequisites = self::checkTypes($coursePrerequisites, $types);

        $this->coursePrerequisites = $coursePrerequisites;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\EducationalOccupationalCredential
     */
    public function getOccupationalCredentialAwarded()
    {
        return $this->occupationalCredentialAwarded;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\EducationalOccupationalCredential $occupationalCredentialAwarded
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOccupationalCredentialAwarded($occupationalCredentialAwarded)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\EducationalOccupationalCredential",
        ];

        $occupationalCredentialAwarded = self::checkTypes($occupationalCredentialAwarded, $types);

        $this->occupationalCredentialAwarded = $occupationalCredentialAwarded;
    }

}
