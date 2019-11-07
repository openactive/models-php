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

    /**
     * [NOTICE: This is a beta field, and is highly likely to change in future versions of this library.]
     * An related video object.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\VideoObject
     */
    protected $video;

    /**
     * [NOTICE: This is a beta field, and is highly likely to change in future versions of this library.]
     * An associated logo for a course.
     *
     *
     * @var ImageObject
     */
    protected $logo;

    /**
     * The identifier for the <a class="localLink" href="https://schema.org/Course">Course</a> used by the course <a class="localLink" href="https://schema.org/provider">provider</a> (e.g. CS101 or 6.001).
     *
     *
     * @var string
     */
    protected $courseCode;

    /**
     * An offering of the course at a specific time and place or through specific media or mode of study or to a specific section of students.
     *
     *
     * @var CourseInstance
     */
    protected $hasCourseInstance;

    /**
     * A description of the qualification, award, certificate, diploma or other educational credential awarded as a consequence of successful completion of this course or program.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\EducationalOccupationalCredential
     */
    protected $educationalCredentialAwarded;

    /**
     * Requirements for taking the Course. May be completion of another <a class="localLink" href="https://schema.org/Course">Course</a> or a textual description like "permission of instructor". Requirements may be a pre-requisite competency, referenced using <a class="localLink" href="https://schema.org/AlignmentObject">AlignmentObject</a>.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\AlignmentObject|string|Course
     */
    protected $coursePrerequisites;

    /**
     * @return \OpenActive\Models\SchemaOrg\VideoObject
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\VideoObject $video
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setVideo($video)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\VideoObject",
        );

        $video = self::checkTypes($video, $types);

        $this->video = $video;
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
        $types = array(
            "string",
        );

        $courseCode = self::checkTypes($courseCode, $types);

        $this->courseCode = $courseCode;
    }

    /**
     * @return CourseInstance
     */
    public function getHasCourseInstance()
    {
        return $this->hasCourseInstance;
    }

    /**
     * @param CourseInstance $hasCourseInstance
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHasCourseInstance($hasCourseInstance)
    {
        $types = array(
            "CourseInstance",
        );

        $hasCourseInstance = self::checkTypes($hasCourseInstance, $types);

        $this->hasCourseInstance = $hasCourseInstance;
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
        $types = array(
            "string",
            "\OpenActive\Models\SchemaOrg\EducationalOccupationalCredential",
        );

        $educationalCredentialAwarded = self::checkTypes($educationalCredentialAwarded, $types);

        $this->educationalCredentialAwarded = $educationalCredentialAwarded;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\AlignmentObject|string|Course
     */
    public function getCoursePrerequisites()
    {
        return $this->coursePrerequisites;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\AlignmentObject|string|Course $coursePrerequisites
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCoursePrerequisites($coursePrerequisites)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\AlignmentObject",
            "string",
            "Course",
        );

        $coursePrerequisites = self::checkTypes($coursePrerequisites, $types);

        $this->coursePrerequisites = $coursePrerequisites;
    }

}
