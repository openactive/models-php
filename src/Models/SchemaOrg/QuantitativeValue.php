<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class QuantitativeValue extends \OpenActive\Models\SchemaOrg\StructuredValue
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:QuantitativeValue";
    }

    public static function fieldList() {
        $fields = [
            "unitCode" => "unitCode",
            "minValue" => "minValue",
            "additionalProperty" => "additionalProperty",
            "value" => "value",
            "valueReference" => "valueReference",
            "maxValue" => "maxValue",
            "unitText" => "unitText",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The unit of measurement given using the UN/CEFACT Common Code (3 characters) or a URL. Other codes than the UN/CEFACT Common Code may be used with a prefix followed by a colon.
     *
     *
     * @var string
     */
    protected $unitCode;

    /**
     * The lower value of some characteristic or property.
     *
     *
     * @var float|null
     */
    protected $minValue;

    /**
     * A property-value pair representing an additional characteristics of the entitity, e.g. a product feature or another characteristic for which there is no matching property in schema.org.<br/><br/>
     * 
     * Note: Publishers should be aware that applications designed to use specific schema.org properties (e.g. https://schema.org/width, https://schema.org/color, https://schema.org/gtin13, ...) will typically expect such data to be provided using those properties, rather than using the generic property/value mechanism.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\PropertyValue
     */
    protected $additionalProperty;

    /**
     * The value of the quantitative value or property value node.<br/><br/>
     * 
     * <ul>
     * <li>For <a class="localLink" href="https://schema.org/QuantitativeValue">QuantitativeValue</a> and <a class="localLink" href="https://schema.org/MonetaryAmount">MonetaryAmount</a>, the recommended type for values is 'Number'.</li>
     * <li>For <a class="localLink" href="https://schema.org/PropertyValue">PropertyValue</a>, it can be 'Text;', 'Number', 'Boolean', or 'StructuredValue'.</li>
     * <li>Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE' (U+0039)) rather than superficially similiar Unicode symbols.</li>
     * <li>Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal point. Avoid using these symbols as a readability separator.</li>
     * </ul>
     * 
     *
     *
     * @var bool|string|float|\OpenActive\Models\SchemaOrg\StructuredValue|null
     */
    protected $value;

    /**
     * A pointer to a secondary value that provides additional information on the original value, e.g. a reference temperature.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\PropertyValue|\OpenActive\Models\SchemaOrg\Enumeration|\OpenActive\Models\SchemaOrg\QuantitativeValue|\OpenActive\Enums\SchemaOrg\QualitativeValue|\OpenActive\Models\SchemaOrg\StructuredValue|null
     */
    protected $valueReference;

    /**
     * The upper value of some characteristic or property.
     *
     *
     * @var float|null
     */
    protected $maxValue;

    /**
     * A string or text indicating the unit of measurement. Useful if you cannot provide a standard unit code for
     * <a href='unitCode'>unitCode</a>.
     *
     *
     * @var string
     */
    protected $unitText;

    /**
     * @return string
     */
    public function getUnitCode()
    {
        return $this->unitCode;
    }

    /**
     * @param string $unitCode
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setUnitCode($unitCode)
    {
        $types = array(
            "string",
        );

        $unitCode = self::checkTypes($unitCode, $types);

        $this->unitCode = $unitCode;
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
     * @return \OpenActive\Models\SchemaOrg\PropertyValue
     */
    public function getAdditionalProperty()
    {
        return $this->additionalProperty;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\PropertyValue $additionalProperty
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAdditionalProperty($additionalProperty)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\PropertyValue",
        );

        $additionalProperty = self::checkTypes($additionalProperty, $types);

        $this->additionalProperty = $additionalProperty;
    }

    /**
     * @return bool|string|float|\OpenActive\Models\SchemaOrg\StructuredValue|null
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param bool|string|float|\OpenActive\Models\SchemaOrg\StructuredValue|null $value
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setValue($value)
    {
        $types = array(
            "bool",
            "string",
            "float",
            "\OpenActive\Models\SchemaOrg\StructuredValue",
            "null",
        );

        $value = self::checkTypes($value, $types);

        $this->value = $value;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\PropertyValue|\OpenActive\Models\SchemaOrg\Enumeration|\OpenActive\Models\SchemaOrg\QuantitativeValue|\OpenActive\Enums\SchemaOrg\QualitativeValue|\OpenActive\Models\SchemaOrg\StructuredValue|null
     */
    public function getValueReference()
    {
        return $this->valueReference;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\PropertyValue|\OpenActive\Models\SchemaOrg\Enumeration|\OpenActive\Models\SchemaOrg\QuantitativeValue|\OpenActive\Enums\SchemaOrg\QualitativeValue|\OpenActive\Models\SchemaOrg\StructuredValue|null $valueReference
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setValueReference($valueReference)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\PropertyValue",
            "\OpenActive\Models\SchemaOrg\Enumeration",
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "\OpenActive\Enums\SchemaOrg\QualitativeValue",
            "\OpenActive\Models\SchemaOrg\StructuredValue",
            "null",
        );

        $valueReference = self::checkTypes($valueReference, $types);

        $this->valueReference = $valueReference;
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
     * @return string
     */
    public function getUnitText()
    {
        return $this->unitText;
    }

    /**
     * @param string $unitText
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setUnitText($unitText)
    {
        $types = array(
            "string",
        );

        $unitText = self::checkTypes($unitText, $types);

        $this->unitText = $unitText;
    }

}
