<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class PropertyValueSpecification extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * The default value of the input.  For properties that expect a literal, the default is a literal value, for properties that expect an object, it's an ID reference to one of the current values.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\Thing
     */
    protected $defaultValue;

    /**
     * Specifies a regular expression for testing literal values according to the HTML spec.
     *
     *
     * @var string
     */
    protected $valuePattern;

    /**
     * The stepValue attribute indicates the granularity that is expected (and required) of the value in a PropertyValueSpecification.
     *
     *
     * @var decimal|null
     */
    protected $stepValue;

    /**
     * Specifies the allowed range for number of characters in a literal value.
     *
     *
     * @var decimal|null
     */
    protected $valueMaxLength;

    /**
     * Whether or not a property is mutable.  Default is false. Specifying this for a property that also has a value makes it act similar to a "hidden" input in an HTML form.
     *
     *
     * @var bool|null
     */
    protected $readonlyValue;

    /**
     * Specifies the minimum allowed range for number of characters in a literal value.
     *
     *
     * @var decimal|null
     */
    protected $valueMinLength;

    /**
     * The upper value of some characteristic or property.
     *
     *
     * @var decimal|null
     */
    protected $maxValue;

    /**
     * Indicates the name of the PropertyValueSpecification to be used in URL templates and form encoding in a manner analogous to HTML's input@name.
     *
     *
     * @var string
     */
    protected $valueName;

    /**
     * Whether multiple values are allowed for the property.  Default is false.
     *
     *
     * @var bool|null
     */
    protected $multipleValues;

    /**
     * The lower value of some characteristic or property.
     *
     *
     * @var decimal|null
     */
    protected $minValue;

    /**
     * Whether the property must be filled in to complete the action.  Default is false.
     *
     *
     * @var bool|null
     */
    protected $valueRequired;

    /**
     * @return string|\OpenActive\Models\SchemaOrg\Thing
     */
    public function getDefaultValue()
    {
        return $this->defaultValue;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\Thing $defaultValue
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setDefaultValue($defaultValue)
    {
        $types = array(
            "string",
            "\OpenActive\Models\SchemaOrg\Thing",
        );

        $defaultValue = self::checkTypes($defaultValue, $types);

        $this->defaultValue = $defaultValue;
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
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setValuePattern($valuePattern)
    {
        $types = array(
            "string",
        );

        $valuePattern = self::checkTypes($valuePattern, $types);

        $this->valuePattern = $valuePattern;
    }

    /**
     * @return decimal|null
     */
    public function getStepValue()
    {
        return $this->stepValue;
    }

    /**
     * @param decimal|null $stepValue
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setStepValue($stepValue)
    {
        $types = array(
            "decimal",
            "null",
        );

        $stepValue = self::checkTypes($stepValue, $types);

        $this->stepValue = $stepValue;
    }

    /**
     * @return decimal|null
     */
    public function getValueMaxLength()
    {
        return $this->valueMaxLength;
    }

    /**
     * @param decimal|null $valueMaxLength
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setValueMaxLength($valueMaxLength)
    {
        $types = array(
            "decimal",
            "null",
        );

        $valueMaxLength = self::checkTypes($valueMaxLength, $types);

        $this->valueMaxLength = $valueMaxLength;
    }

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
     * @throws \Exception If the provided argument is not of a supported type.
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
     * @return decimal|null
     */
    public function getValueMinLength()
    {
        return $this->valueMinLength;
    }

    /**
     * @param decimal|null $valueMinLength
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setValueMinLength($valueMinLength)
    {
        $types = array(
            "decimal",
            "null",
        );

        $valueMinLength = self::checkTypes($valueMinLength, $types);

        $this->valueMinLength = $valueMinLength;
    }

    /**
     * @return decimal|null
     */
    public function getMaxValue()
    {
        return $this->maxValue;
    }

    /**
     * @param decimal|null $maxValue
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setMaxValue($maxValue)
    {
        $types = array(
            "decimal",
            "null",
        );

        $maxValue = self::checkTypes($maxValue, $types);

        $this->maxValue = $maxValue;
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
     * @throws \Exception If the provided argument is not of a supported type.
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
     * @return bool|null
     */
    public function getMultipleValues()
    {
        return $this->multipleValues;
    }

    /**
     * @param bool|null $multipleValues
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
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
     * @return decimal|null
     */
    public function getMinValue()
    {
        return $this->minValue;
    }

    /**
     * @param decimal|null $minValue
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setMinValue($minValue)
    {
        $types = array(
            "decimal",
            "null",
        );

        $minValue = self::checkTypes($minValue, $types);

        $this->minValue = $minValue;
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
     * @throws \Exception If the provided argument is not of a supported type.
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

}
