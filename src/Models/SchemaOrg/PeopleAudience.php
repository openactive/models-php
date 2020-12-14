<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class PeopleAudience extends \OpenActive\Models\SchemaOrg\Audience
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:PeopleAudience";
    }

    public static function fieldList() {
        $fields = [
            "healthCondition" => "healthCondition",
            "suggestedMaxAge" => "suggestedMaxAge",
            "requiredMinAge" => "requiredMinAge",
            "suggestedMinAge" => "suggestedMinAge",
            "suggestedGender" => "suggestedGender",
            "requiredGender" => "requiredGender",
            "requiredMaxAge" => "requiredMaxAge",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Specifying the health condition(s) of a patient, medical study, or other target audience.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MedicalCondition
     */
    protected $healthCondition;

    /**
     * Maximal age recommended for viewing content.
     *
     *
     * @var Number|null
     */
    protected $suggestedMaxAge;

    /**
     * Audiences defined by a person's minimum age.
     *
     *
     * @var int|null
     */
    protected $requiredMinAge;

    /**
     * Minimal age recommended for viewing content.
     *
     *
     * @var Number|null
     */
    protected $suggestedMinAge;

    /**
     * The gender of the person or audience.
     *
     *
     * @var string
     */
    protected $suggestedGender;

    /**
     * Audiences defined by a person's gender.
     *
     *
     * @var string
     */
    protected $requiredGender;

    /**
     * Audiences defined by a person's maximum age.
     *
     *
     * @var int|null
     */
    protected $requiredMaxAge;

    /**
     * @return \OpenActive\Models\SchemaOrg\MedicalCondition
     */
    public function getHealthCondition()
    {
        return $this->healthCondition;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MedicalCondition $healthCondition
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHealthCondition($healthCondition)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MedicalCondition",
        ];

        $healthCondition = self::checkTypes($healthCondition, $types);

        $this->healthCondition = $healthCondition;
    }

    /**
     * @return Number|null
     */
    public function getSuggestedMaxAge()
    {
        return $this->suggestedMaxAge;
    }

    /**
     * @param Number|null $suggestedMaxAge
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSuggestedMaxAge($suggestedMaxAge)
    {
        $types = [
            "Number",
            "null",
        ];

        $suggestedMaxAge = self::checkTypes($suggestedMaxAge, $types);

        $this->suggestedMaxAge = $suggestedMaxAge;
    }

    /**
     * @return int|null
     */
    public function getRequiredMinAge()
    {
        return $this->requiredMinAge;
    }

    /**
     * @param int|null $requiredMinAge
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRequiredMinAge($requiredMinAge)
    {
        $types = [
            "int",
            "null",
        ];

        $requiredMinAge = self::checkTypes($requiredMinAge, $types);

        $this->requiredMinAge = $requiredMinAge;
    }

    /**
     * @return Number|null
     */
    public function getSuggestedMinAge()
    {
        return $this->suggestedMinAge;
    }

    /**
     * @param Number|null $suggestedMinAge
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSuggestedMinAge($suggestedMinAge)
    {
        $types = [
            "Number",
            "null",
        ];

        $suggestedMinAge = self::checkTypes($suggestedMinAge, $types);

        $this->suggestedMinAge = $suggestedMinAge;
    }

    /**
     * @return string
     */
    public function getSuggestedGender()
    {
        return $this->suggestedGender;
    }

    /**
     * @param string $suggestedGender
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSuggestedGender($suggestedGender)
    {
        $types = [
            "string",
        ];

        $suggestedGender = self::checkTypes($suggestedGender, $types);

        $this->suggestedGender = $suggestedGender;
    }

    /**
     * @return string
     */
    public function getRequiredGender()
    {
        return $this->requiredGender;
    }

    /**
     * @param string $requiredGender
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRequiredGender($requiredGender)
    {
        $types = [
            "string",
        ];

        $requiredGender = self::checkTypes($requiredGender, $types);

        $this->requiredGender = $requiredGender;
    }

    /**
     * @return int|null
     */
    public function getRequiredMaxAge()
    {
        return $this->requiredMaxAge;
    }

    /**
     * @param int|null $requiredMaxAge
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRequiredMaxAge($requiredMaxAge)
    {
        $types = [
            "int",
            "null",
        ];

        $requiredMaxAge = self::checkTypes($requiredMaxAge, $types);

        $this->requiredMaxAge = $requiredMaxAge;
    }

}
