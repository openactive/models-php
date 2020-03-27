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

    public static function fieldList() {
        $fields = [
            "defaultValue" => "defaultValue",
            "minValue" => "minValue",
            "valuePattern" => "valuePattern",
            "stepValue" => "stepValue",
            "valueMaxLength" => "valueMaxLength",
            "readonlyValue" => "readonlyValue",
            "valueMinLength" => "valueMinLength",
            "maxValue" => "maxValue",
            "valueName" => "valueName",
            "multipleValues" => "multipleValues",
            "valueRequired" => "valueRequired",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The default value of the input.  For properties that expect a literal, the default is a literal value, for properties that expect an object, it's an ID reference to one of the current values.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\Thing
     */
    protected $defaultValue;

    /**
     * The lower value of some characteristic or property.
     *
     *
     * @var null|float
     */
    protected $minValue;

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
     * @var null|float
     */
    protected $stepValue;

    /**
     * Specifies the allowed range for number of characters in a literal value.
     *
     *
     * @var null|float
     */
    protected $valueMaxLength;

    /**
     * Whether or not a property is mutable.  Default is false. Specifying this for a property that also has a value makes it act similar to a "hidden" input in an HTML form.
     *
     *
     * @var null|bool
     */
    protected $readonlyValue;

    /**
     * Specifies the minimum allowed range for number of characters in a literal value.
     *
     *
     * @var null|float
     */
    protected $valueMinLength;

    /**
     * The upper value of some characteristic or property.
     *
     *
     * @var null|float
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
     * @var null|bool
     */
    protected $multipleValues;

    /**
     * Whether the property must be filled in to complete the action.  Default is false.
     *
     *
     * @var null|bool
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
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
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
     * @return null|float
     */
    public function getMinValue()
    {
        return $this->minValue;
    }

    /**
     * @param null|float $minValue
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMinValue($minValue)
    {
        $types = array(
            "null",
            "float",
        );

        $minValue = self::checkTypes($minValue, $types);

        $this->minValue = $minValue;
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

    /**
     * @return null|float
     */
    public function getStepValue()
    {
        return $this->stepValue;
    }

    /**
     * @param null|float $stepValue
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setStepValue($stepValue)
    {
        $types = array(
            "null",
            "float",
        );

        $stepValue = self::checkTypes($stepValue, $types);

        $this->stepValue = $stepValue;
    }

    /**
     * @return null|float
     */
    public function getValueMaxLength()
    {
        return $this->valueMaxLength;
    }

    /**
     * @param null|float $valueMaxLength
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setValueMaxLength($valueMaxLength)
    {
        $types = array(
            "null",
            "float",
        );

        $valueMaxLength = self::checkTypes($valueMaxLength, $types);

        $this->valueMaxLength = $valueMaxLength;
    }

    /**
     * @return null|bool
     */
    public function getReadonlyValue()
    {
        return $this->readonlyValue;
    }

    /**
     * @param null|bool $readonlyValue
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setReadonlyValue($readonlyValue)
    {
        $types = array(
            "null",
            "bool",
        );

        $readonlyValue = self::checkTypes($readonlyValue, $types);

        $this->readonlyValue = $readonlyValue;
    }

    /**
     * @return null|float
     */
    public function getValueMinLength()
    {
        return $this->valueMinLength;
    }

    /**
     * @param null|float $valueMinLength
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setValueMinLength($valueMinLength)
    {
        $types = array(
            "null",
            "float",
        );

        $valueMinLength = self::checkTypes($valueMinLength, $types);

        $this->valueMinLength = $valueMinLength;
    }

    /**
     * @return null|float
     */
    public function getMaxValue()
    {
        return $this->maxValue;
    }

    /**
     * @param null|float $maxValue
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMaxValue($maxValue)
    {
        $types = array(
            "null",
            "float",
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
     * @return null|bool
     */
    public function getMultipleValues()
    {
        return $this->multipleValues;
    }

    /**
     * @param null|bool $multipleValues
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMultipleValues($multipleValues)
    {
        $types = array(
            "null",
            "bool",
        );

        $multipleValues = self::checkTypes($multipleValues, $types);

        $this->multipleValues = $multipleValues;
    }

    /**
     * @return null|bool
     */
    public function getValueRequired()
    {
        return $this->valueRequired;
    }

    /**
     * @param null|bool $valueRequired
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setValueRequired($valueRequired)
    {
        $types = array(
            "null",
            "bool",
        );

        $valueRequired = self::checkTypes($valueRequired, $types);

        $this->valueRequired = $valueRequired;
    }

}
