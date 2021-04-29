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
            "requiredMaxAge" => "requiredMaxAge",
            "suggestedGender" => "suggestedGender",
            "healthCondition" => "healthCondition",
            "requiredGender" => "requiredGender",
            "suggestedAge" => "suggestedAge",
            "suggestedMinAge" => "suggestedMinAge",
            "suggestedMeasurement" => "suggestedMeasurement",
            "requiredMinAge" => "requiredMinAge",
            "suggestedMaxAge" => "suggestedMaxAge",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Audiences defined by a person's maximum age.
     *
     *
     * @var int|null
     */
    protected $requiredMaxAge;

    /**
     * The suggested gender of the intended person or audience, for example "male", "female", or "unisex".
     *
     *
     * @var string|\OpenActive\Enums\SchemaOrg\GenderType|null
     */
    protected $suggestedGender;

    /**
     * Specifying the health condition(s) of a patient, medical study, or other target audience.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MedicalCondition
     */
    protected $healthCondition;

    /**
     * Audiences defined by a person's gender.
     *
     *
     * @var string
     */
    protected $requiredGender;

    /**
     * The age or age range for the intended audience or person, for example 3-12 months for infants, 1-5 years for toddlers.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    protected $suggestedAge;

    /**
     * Minimum recommended age in years for the audience or user.
     *
     *
     * @var Number|null
     */
    protected $suggestedMinAge;

    /**
     * A suggested range of body measurements for the intended audience or person, for example inseam between 32 and 34 inches or height between 170 and 190 cm. Typically found on a size chart for wearable products.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    protected $suggestedMeasurement;

    /**
     * Audiences defined by a person's minimum age.
     *
     *
     * @var int|null
     */
    protected $requiredMinAge;

    /**
     * Maximum recommended age in years for the audience or user.
     *
     *
     * @var Number|null
     */
    protected $suggestedMaxAge;

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

    /**
     * @return string|\OpenActive\Enums\SchemaOrg\GenderType|null
     */
    public function getSuggestedGender()
    {
        return $this->suggestedGender;
    }

    /**
     * @param string|\OpenActive\Enums\SchemaOrg\GenderType|null $suggestedGender
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSuggestedGender($suggestedGender)
    {
        $types = [
            "string",
            "\OpenActive\Enums\SchemaOrg\GenderType",
            "null",
        ];

        $suggestedGender = self::checkTypes($suggestedGender, $types);

        $this->suggestedGender = $suggestedGender;
    }

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
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    public function getSuggestedAge()
    {
        return $this->suggestedAge;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue $suggestedAge
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSuggestedAge($suggestedAge)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
        ];

        $suggestedAge = self::checkTypes($suggestedAge, $types);

        $this->suggestedAge = $suggestedAge;
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
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    public function getSuggestedMeasurement()
    {
        return $this->suggestedMeasurement;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue $suggestedMeasurement
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSuggestedMeasurement($suggestedMeasurement)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
        ];

        $suggestedMeasurement = self::checkTypes($suggestedMeasurement, $types);

        $this->suggestedMeasurement = $suggestedMeasurement;
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

}
