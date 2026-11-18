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
            "availableLanguage" => "availableLanguage",
            "courseCode" => "courseCode",
            "coursePrerequisites" => "coursePrerequisites",
            "educationalCredentialAwarded" => "educationalCredentialAwarded",
            "financialAidEligible" => "financialAidEligible",
            "hasCourseInstance" => "hasCourseInstance",
            "numberOfCredits" => "numberOfCredits",
            "occupationalCredentialAwarded" => "occupationalCredentialAwarded",
            "syllabusSections" => "syllabusSections",
            "totalHistoricalEnrollment" => "totalHistoricalEnrollment",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A language someone may use with or at the item, service or place. Please use one of the language codes from the [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[inLanguage]].
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Language|string
     */
    protected $availableLanguage;

    /**
     * The identifier for the [[Course]] used by the course [[provider]] (e.g. CS101 or 6.001).
     *
     *
     * @var string
     */
    protected $courseCode;

    /**
     * Requirements for taking the Course. May be completion of another [[Course]] or a textual description like "permission of instructor". Requirements may be a pre-requisite competency, referenced using [[AlignmentObject]].
     *
     *
     * @var \OpenActive\Models\SchemaOrg\AlignmentObject|\OpenActive\Models\SchemaOrg\Course|string
     */
    protected $coursePrerequisites;

    /**
     * A description of the qualification, award, certificate, diploma or other educational credential awarded as a consequence of successful completion of this course or program.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\EducationalOccupationalCredential|string
     */
    protected $educationalCredentialAwarded;

    /**
     * A financial aid type or program which students may use to pay for tuition or fees associated with the program.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DefinedTerm|string
     */
    protected $financialAidEligible;

    /**
     * An offering of the course at a specific time and place or through specific media or mode of study or to a specific section of students.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CourseInstance|string
     */
    protected $hasCourseInstance;

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
     * Indicates (typically several) Syllabus entities that lay out what each section of the overall course will cover.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Syllabus|string
     */
    protected $syllabusSections;

    /**
     * The total number of students that have enrolled in the history of the course.
     *
     *
     * @var int|null
     */
    protected $totalHistoricalEnrollment;

    /**
     * @return \OpenActive\Models\SchemaOrg\Language|string
     */
    public function getAvailableLanguage()
    {
        return $this->availableLanguage;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Language|string $availableLanguage
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAvailableLanguage($availableLanguage)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Language",
            "string",
        ];

        $availableLanguage = self::checkTypes($availableLanguage, $types);

        $this->availableLanguage = $availableLanguage;
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
     * @return \OpenActive\Models\SchemaOrg\AlignmentObject|\OpenActive\Models\SchemaOrg\Course|string
     */
    public function getCoursePrerequisites()
    {
        return $this->coursePrerequisites;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\AlignmentObject|\OpenActive\Models\SchemaOrg\Course|string $coursePrerequisites
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCoursePrerequisites($coursePrerequisites)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\AlignmentObject",
            "\OpenActive\Models\SchemaOrg\Course",
            "string",
        ];

        $coursePrerequisites = self::checkTypes($coursePrerequisites, $types);

        $this->coursePrerequisites = $coursePrerequisites;
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
     * @return \OpenActive\Models\SchemaOrg\DefinedTerm|string
     */
    public function getFinancialAidEligible()
    {
        return $this->financialAidEligible;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\DefinedTerm|string $financialAidEligible
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFinancialAidEligible($financialAidEligible)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\DefinedTerm",
            "string",
        ];

        $financialAidEligible = self::checkTypes($financialAidEligible, $types);

        $this->financialAidEligible = $financialAidEligible;
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
     * @return \OpenActive\Models\SchemaOrg\Syllabus|string
     */
    public function getSyllabusSections()
    {
        return $this->syllabusSections;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Syllabus|string $syllabusSections
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSyllabusSections($syllabusSections)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Syllabus",
            "string",
        ];

        $syllabusSections = self::checkTypes($syllabusSections, $types);

        $this->syllabusSections = $syllabusSections;
    }

    /**
     * @return int|null
     */
    public function getTotalHistoricalEnrollment()
    {
        return $this->totalHistoricalEnrollment;
    }

    /**
     * @param int|null $totalHistoricalEnrollment
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTotalHistoricalEnrollment($totalHistoricalEnrollment)
    {
        $types = [
            "int",
            "null",
        ];

        $totalHistoricalEnrollment = self::checkTypes($totalHistoricalEnrollment, $types);

        $this->totalHistoricalEnrollment = $totalHistoricalEnrollment;
    }

}
