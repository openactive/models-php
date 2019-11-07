<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class PropertyValueSpecification extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:PropertyValueSpecification";
    }

    /**
     * Whether or not a property is mutable.  Default is false. Specifying this for a property that also has a value makes it act similar to a "hidden" input in an HTML form.
     *
     *
     * @var bool|null
     */
    protected $readonlyValue;

    /**
     * Whether the property must be filled in to complete the action.  Default is false.
     *
     *
     * @var bool|null
     */
    protected $valueRequired;

    /**
     * The default value of the input.  For properties that expect a literal, the default is a literal value, for properties that expect an object, it's an ID reference to one of the current values.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Thing|string
     */
    protected $defaultValue;

    /**
     * Whether multiple values are allowed for the property.  Default is false.
     *
     *
     * @var bool|null
     */
    protected $multipleValues;

    /**
     * Indicates the name of the PropertyValueSpecification to be used in URL templates and form encoding in a manner analogous to HTML's input@name.
     *
     *
     * @var string
     */
    protected $valueName;

    /**
     * The upper value of some characteristic or property.
     *
     *
     * @var float|null
     */
    protected $maxValue;

    /**
     * Specifies the minimum allowed range for number of characters in a literal value.
     *
     *
     * @var float|null
     */
    protected $valueMinLength;

    /**
     * The lower value of some characteristic or property.
     *
     *
     * @var float|null
     */
    protected $minValue;

    /**
     * Specifies the allowed range for number of characters in a literal value.
     *
     *
     * @var float|null
     */
    protected $valueMaxLength;

    /**
     * The stepValue attribute indicates the granularity that is expected (and required) of the value in a PropertyValueSpecification.
     *
     *
     * @var float|null
     */
    protected $stepValue;

    /**
     * Specifies a regular expression for testing literal values according to the HTML spec.
     *
     *
     * @var string
     */
    protected $valuePattern;

    /**
     * @return bool|null
     */
    public function getReadonlyValue()
    {
        return $this->readonlyValue;
    }

    /**
     * @param bool|null $readonlyValue
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setReadonlyValue($readonlyValue)
    {
        $types = array(
            "bool",
            "null",
        );

        $readonlyValue = self::checkTypes($readonlyValue, $types);

        $this->readonlyValue = $readonlyValue;
    }

    /**
     * @return bool|null
     */
    public function getValueRequired()
    {
        return $this->valueRequired;
    }

    /**
     * @param bool|null $valueRequired
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setValueRequired($valueRequired)
    {
        $types = array(
            "bool",
            "null",
        );

        $valueRequired = self::checkTypes($valueRequired, $types);

        $this->valueRequired = $valueRequired;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Thing|string
     */
    public function getDefaultValue()
    {
        return $this->defaultValue;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Thing|string $defaultValue
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDefaultValue($defaultValue)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Thing",
            "string",
        );

        $defaultValue = self::checkTypes($defaultValue, $types);

        $this->defaultValue = $defaultValue;
    }

    /**
     * @return bool|null
     */
    public function getMultipleValues()
    {
        return $this->multipleValues;
    }

    /**
     * @param bool|null $multipleValues
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMultipleValues($multipleValues)
    {
        $types = array(
            "bool",
            "null",
        );

        $multipleValues = self::checkTypes($multipleValues, $types);

        $this->multipleValues = $multipleValues;
    }

    /**
     * @return string
     */
    public function getValueName()
    {
        return $this->valueName;
    }

    /**
     * @param string $valueName
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setValueName($valueName)
    {
        $types = array(
            "string",
        );

        $valueName = self::checkTypes($valueName, $types);

        $this->valueName = $valueName;
    }

    /**
     * @return float|null
     */
    public function getMaxValue()
    {
        return $this->maxValue;
    }

    /**
     * @param float|null $maxValue
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMaxValue($maxValue)
    {
        $types = array(
            "float",
            "null",
        );

        $maxValue = self::checkTypes($maxValue, $types);

        $this->maxValue = $maxValue;
    }

    /**
     * @return float|null
     */
    public function getValueMinLength()
    {
        return $this->valueMinLength;
    }

    /**
     * @param float|null $valueMinLength
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setValueMinLength($valueMinLength)
    {
        $types = array(
            "float",
            "null",
        );

        $valueMinLength = self::checkTypes($valueMinLength, $types);

        $this->valueMinLength = $valueMinLength;
    }

    /**
     * @return float|null
     */
    public function getMinValue()
    {
        return $this->minValue;
    }

    /**
     * @param float|null $minValue
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMinValue($minValue)
    {
        $types = array(
            "float",
            "null",
        );

        $minValue = self::checkTypes($minValue, $types);

        $this->minValue = $minValue;
    }

    /**
     * @return float|null
     */
    public function getValueMaxLength()
    {
        return $this->valueMaxLength;
    }

    /**
     * @param float|null $valueMaxLength
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setValueMaxLength($valueMaxLength)
    {
        $types = array(
            "float",
            "null",
        );

        $valueMaxLength = self::checkTypes($valueMaxLength, $types);

        $this->valueMaxLength = $valueMaxLength;
    }

    /**
     * @return float|null
     */
    public function getStepValue()
    {
        return $this->stepValue;
    }

    /**
     * @param float|null $stepValue
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setStepValue($stepValue)
    {
        $types = array(
            "float",
            "null",
        );

        $stepValue = self::checkTypes($stepValue, $types);

        $this->stepValue = $stepValue;
    }

    /**
     * @return string
     */
    public function getValuePattern()
    {
        return $this->valuePattern;
    }

    /**
     * @param string $valuePattern
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setValuePattern($valuePattern)
    {
        $types = array(
            "string",
        );

        $valuePattern = self::checkTypes($valuePattern, $types);

        $this->valuePattern = $valuePattern;
    }

}
