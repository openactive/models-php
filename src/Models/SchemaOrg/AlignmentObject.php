<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class AlignmentObject extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:AlignmentObject";
    }

    /**
     * The description of a node in an established educational framework.
     *
     *
     * @var string
     */
    protected $targetDescription;

    /**
     * The URL of a node in an established educational framework.
     *
     *
     * @var string
     */
    protected $targetUrl;

    /**
     * The name of a node in an established educational framework.
     *
     *
     * @var string
     */
    protected $targetName;

    /**
     * A category of alignment between the learning resource and the framework node. Recommended values include: 'assesses', 'teaches', 'requires', 'textComplexity', 'readingLevel', 'educationalSubject', and 'educationalLevel'.
     *
     *
     * @var string
     */
    protected $alignmentType;

    /**
     * The framework to which the resource being described is aligned.
     *
     *
     * @var string
     */
    protected $educationalFramework;

    /**
     * @return string
     */
    public function getTargetDescription()
    {
        return $this->targetDescription;
    }

    /**
     * @param string $targetDescription
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTargetDescription($targetDescription)
    {
        $types = array(
            "string",
        );

        $targetDescription = self::checkTypes($targetDescription, $types);

        $this->targetDescription = $targetDescription;
    }

    /**
     * @return string
     */
    public function getTargetUrl()
    {
        return $this->targetUrl;
    }

    /**
     * @param string $targetUrl
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTargetUrl($targetUrl)
    {
        $types = array(
            "string",
        );

        $targetUrl = self::checkTypes($targetUrl, $types);

        $this->targetUrl = $targetUrl;
    }

    /**
     * @return string
     */
    public function getTargetName()
    {
        return $this->targetName;
    }

    /**
     * @param string $targetName
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTargetName($targetName)
    {
        $types = array(
            "string",
        );

        $targetName = self::checkTypes($targetName, $types);

        $this->targetName = $targetName;
    }

    /**
     * @return string
     */
    public function getAlignmentType()
    {
        return $this->alignmentType;
    }

    /**
     * @param string $alignmentType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAlignmentType($alignmentType)
    {
        $types = array(
            "string",
        );

        $alignmentType = self::checkTypes($alignmentType, $types);

        $this->alignmentType = $alignmentType;
    }

    /**
     * @return string
     */
    public function getEducationalFramework()
    {
        return $this->educationalFramework;
    }

    /**
     * @param string $educationalFramework
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEducationalFramework($educationalFramework)
    {
        $types = array(
            "string",
        );

        $educationalFramework = self::checkTypes($educationalFramework, $types);

        $this->educationalFramework = $educationalFramework;
    }

}
