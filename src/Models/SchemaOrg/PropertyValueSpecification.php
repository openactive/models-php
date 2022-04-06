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
            "valueMaxLength" => "valueMaxLength",
            "readonlyValue" => "readonlyValue",
            "maxValue" => "maxValue",
            "valueName" => "valueName",
            "defaultValue" => "defaultValue",
            "valueMinLength" => "valueMinLength",
            "valueRequired" => "valueRequired",
            "minValue" => "minValue",
            "valuePattern" => "valuePattern",
            "stepValue" => "stepValue",
            "multipleValues" => "multipleValues",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Specifies the allowed range for number of characters in a literal value.
     *
     *
     * @var Number|null
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
     * The upper value of some characteristic or property.
     *
     *
     * @var Number|null
     */
    protected $maxValue;

    /**
     * Indicates the name of the PropertyValueSpecification to be used in URL templates and form encoding in a manner analogous to HTML's `input@name`.
     *
     *
     * @var string
     */
    protected $valueName;

    /**
     * The default value of the input.  For properties that expect a literal, the default is a literal value, for properties that expect an object, it's an ID reference to one of the current values.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\Thing
     */
    protected $defaultValue;

    /**
     * Specifies the minimum allowed range for number of characters in a literal value.
     *
     *
     * @var Number|null
     */
    protected $valueMinLength;

    /**
     * Whether the property must be filled in to complete the action.  Default is false.
     *
     *
     * @var bool|null
     */
    protected $valueRequired;

    /**
     * The lower value of some characteristic or property.
     *
     *
     * @var Number|null
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
     * @var Number|null
     */
    protected $stepValue;

    /**
     * Whether multiple values are allowed for the property.  Default is false.
     *
     *
     * @var bool|null
     */
    protected $multipleValues;

    /**
     * @return Number|null
     */
    public function getValueMaxLength()
    {
        return $this->valueMaxLength;
    }

    /**
     * @param Number|null $valueMaxLength
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setValueMaxLength($valueMaxLength)
    {
        $types = [
            "Number",
            "null",
        ];

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
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setReadonlyValue($readonlyValue)
    {
        $types = [
            "bool",
            "null",
        ];

        $readonlyValue = self::checkTypes($readonlyValue, $types);

        $this->readonlyValue = $readonlyValue;
    }

    /**
     * @return Number|null
     */
    public function getMaxValue()
    {
        return $this->maxValue;
    }

    /**
     * @param Number|null $maxValue
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMaxValue($maxValue)
    {
        $types = [
            "Number",
            "null",
        ];

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
        $types = [
            "string",
        ];

        $valueName = self::checkTypes($valueName, $types);

        $this->valueName = $valueName;
    }

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
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\Thing",
        ];

        $defaultValue = self::checkTypes($defaultValue, $types);

        $this->defaultValue = $defaultValue;
    }

    /**
     * @return Number|null
     */
    public function getValueMinLength()
    {
        return $this->valueMinLength;
    }

    /**
     * @param Number|null $valueMinLength
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setValueMinLength($valueMinLength)
    {
        $types = [
            "Number",
            "null",
        ];

        $valueMinLength = self::checkTypes($valueMinLength, $types);

        $this->valueMinLength = $valueMinLength;
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
        $types = [
            "bool",
            "null",
        ];

        $valueRequired = self::checkTypes($valueRequired, $types);

        $this->valueRequired = $valueRequired;
    }

    /**
     * @return Number|null
     */
    public function getMinValue()
    {
        return $this->minValue;
    }

    /**
     * @param Number|null $minValue
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMinValue($minValue)
    {
        $types = [
            "Number",
            "null",
        ];

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
        $types = [
            "string",
        ];

        $valuePattern = self::checkTypes($valuePattern, $types);

        $this->valuePattern = $valuePattern;
    }

    /**
     * @return Number|null
     */
    public function getStepValue()
    {
        return $this->stepValue;
    }

    /**
     * @param Number|null $stepValue
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setStepValue($stepValue)
    {
        $types = [
            "Number",
            "null",
        ];

        $stepValue = self::checkTypes($stepValue, $types);

        $this->stepValue = $stepValue;
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
        $types = [
            "bool",
            "null",
        ];

        $multipleValues = self::checkTypes($multipleValues, $types);

        $this->multipleValues = $multipleValues;
    }

}
