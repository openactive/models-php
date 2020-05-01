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
            "suggestedMaxAge" => "suggestedMaxAge",
            "requiredMinAge" => "requiredMinAge",
            "requiredGender" => "requiredGender",
            "suggestedGender" => "suggestedGender",
            "requiredMaxAge" => "requiredMaxAge",
            "suggestedMinAge" => "suggestedMinAge",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Maximal age recommended for viewing content.
     *
     *
     * @var float|null
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
     * Audiences defined by a person's gender.
     *
     *
     * @var string
     */
    protected $requiredGender;

    /**
     * The gender of the person or audience.
     *
     *
     * @var string
     */
    protected $suggestedGender;

    /**
     * Audiences defined by a person's maximum age.
     *
     *
     * @var int|null
     */
    protected $requiredMaxAge;

    /**
     * Minimal age recommended for viewing content.
     *
     *
     * @var float|null
     */
    protected $suggestedMinAge;

    /**
     * @return float|null
     */
    public function getSuggestedMaxAge()
    {
        return $this->suggestedMaxAge;
    }

    /**
     * @param float|null $suggestedMaxAge
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSuggestedMaxAge($suggestedMaxAge)
    {
        $types = array(
            "float",
            "null",
        );

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
        $types = array(
            "int",
            "null",
        );

        $requiredMinAge = self::checkTypes($requiredMinAge, $types);

        $this->requiredMinAge = $requiredMinAge;
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
        $types = array(
            "string",
        );

        $requiredGender = self::checkTypes($requiredGender, $types);

        $this->requiredGender = $requiredGender;
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
        $types = array(
            "string",
        );

        $suggestedGender = self::checkTypes($suggestedGender, $types);

        $this->suggestedGender = $suggestedGender;
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
        $types = array(
            "int",
            "null",
        );

        $requiredMaxAge = self::checkTypes($requiredMaxAge, $types);

        $this->requiredMaxAge = $requiredMaxAge;
    }

    /**
     * @return float|null
     */
    public function getSuggestedMinAge()
    {
        return $this->suggestedMinAge;
    }

    /**
     * @param float|null $suggestedMinAge
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSuggestedMinAge($suggestedMinAge)
    {
        $types = array(
            "float",
            "null",
        );

        $suggestedMinAge = self::checkTypes($suggestedMinAge, $types);

        $this->suggestedMinAge = $suggestedMinAge;
    }

}
