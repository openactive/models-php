<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class PropertyValue extends \OpenActive\Models\SchemaOrg\StructuredValue
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:PropertyValue";
    }

    public static function fieldList() {
        $fields = [
            "minValue" => "minValue",
            "propertyID" => "propertyID",
            "value" => "value",
            "valueReference" => "valueReference",
            "maxValue" => "maxValue",
            "unitCode" => "unitCode",
            "unitText" => "unitText",
            "measurementTechnique" => "measurementTechnique",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The lower value of some characteristic or property.
     *
     *
     * @var null|float
     */
    protected $minValue;

    /**
     * A commonly used identifier for the characteristic represented by the property, e.g. a manufacturer or a standard code for a property. propertyID can be
     * (1) a prefixed string, mainly meant to be used with standards for product properties; (2) a site-specific, non-prefixed string (e.g. the primary key of the property or the vendor-specific id of the property), or (3)
     * a URL indicating the type of the property, either pointing to an external vocabulary, or a Web resource that describes the property (e.g. a glossary entry).
     * Standards bodies should promote a standard prefix for the identifiers of properties from their standards.
     *
     *
     * @var string
     */
    protected $propertyID;

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
     * @var \OpenActive\Models\SchemaOrg\StructuredValue|null|float|string|bool
     */
    protected $value;

    /**
     * A pointer to a secondary value that provides additional information on the original value, e.g. a reference temperature.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\QualitativeValue|\OpenActive\Models\SchemaOrg\Enumeration|\OpenActive\Models\SchemaOrg\PropertyValue|\OpenActive\Models\SchemaOrg\QuantitativeValue|\OpenActive\Models\SchemaOrg\StructuredValue|null
     */
    protected $valueReference;

    /**
     * The upper value of some characteristic or property.
     *
     *
     * @var null|float
     */
    protected $maxValue;

    /**
     * The unit of measurement given using the UN/CEFACT Common Code (3 characters) or a URL. Other codes than the UN/CEFACT Common Code may be used with a prefix followed by a colon.
     *
     *
     * @var string
     */
    protected $unitCode;

    /**
     * A string or text indicating the unit of measurement. Useful if you cannot provide a standard unit code for
     * <a href='unitCode'>unitCode</a>.
     *
     *
     * @var string
     */
    protected $unitText;

    /**
     * A technique or technology used in a <a class="localLink" href="https://schema.org/Dataset">Dataset</a> (or <a class="localLink" href="https://schema.org/DataDownload">DataDownload</a>, <a class="localLink" href="https://schema.org/DataCatalog">DataCatalog</a>),
     * corresponding to the method used for measuring the corresponding variable(s) (described using <a class="localLink" href="https://schema.org/variableMeasured">variableMeasured</a>). This is oriented towards scientific and scholarly dataset publication but may have broader applicability; it is not intended as a full representation of measurement, but rather as a high level summary for dataset discovery.<br/><br/>
     * 
     * For example, if <a class="localLink" href="https://schema.org/variableMeasured">variableMeasured</a> is: molecule concentration, <a class="localLink" href="https://schema.org/measurementTechnique">measurementTechnique</a> could be: "mass spectrometry" or "nmr spectroscopy" or "colorimetry" or "immunofluorescence".<br/><br/>
     * 
     * If the <a class="localLink" href="https://schema.org/variableMeasured">variableMeasured</a> is "depression rating", the <a class="localLink" href="https://schema.org/measurementTechnique">measurementTechnique</a> could be "Zung Scale" or "HAM-D" or "Beck Depression Inventory".<br/><br/>
     * 
     * If there are several <a class="localLink" href="https://schema.org/variableMeasured">variableMeasured</a> properties recorded for some given data object, use a <a class="localLink" href="https://schema.org/PropertyValue">PropertyValue</a> for each <a class="localLink" href="https://schema.org/variableMeasured">variableMeasured</a> and attach the corresponding <a class="localLink" href="https://schema.org/measurementTechnique">measurementTechnique</a>.
     *
     *
     * @var string
     */
    protected $measurementTechnique;

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
    public function getPropertyID()
    {
        return $this->propertyID;
    }

    /**
     * @param string $propertyID
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPropertyID($propertyID)
    {
        $types = array(
            "string",
        );

        $propertyID = self::checkTypes($propertyID, $types);

        $this->propertyID = $propertyID;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\StructuredValue|null|float|string|bool
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\StructuredValue|null|float|string|bool $value
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setValue($value)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\StructuredValue",
            "null",
            "float",
            "string",
            "bool",
        );

        $value = self::checkTypes($value, $types);

        $this->value = $value;
    }

    /**
     * @return \OpenActive\Enums\SchemaOrg\QualitativeValue|\OpenActive\Models\SchemaOrg\Enumeration|\OpenActive\Models\SchemaOrg\PropertyValue|\OpenActive\Models\SchemaOrg\QuantitativeValue|\OpenActive\Models\SchemaOrg\StructuredValue|null
     */
    public function getValueReference()
    {
        return $this->valueReference;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\QualitativeValue|\OpenActive\Models\SchemaOrg\Enumeration|\OpenActive\Models\SchemaOrg\PropertyValue|\OpenActive\Models\SchemaOrg\QuantitativeValue|\OpenActive\Models\SchemaOrg\StructuredValue|null $valueReference
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setValueReference($valueReference)
    {
        $types = array(
            "\OpenActive\Enums\SchemaOrg\QualitativeValue",
            "\OpenActive\Models\SchemaOrg\Enumeration",
            "\OpenActive\Models\SchemaOrg\PropertyValue",
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "\OpenActive\Models\SchemaOrg\StructuredValue",
            "null",
        );

        $valueReference = self::checkTypes($valueReference, $types);

        $this->valueReference = $valueReference;
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

    /**
     * @return string
     */
    public function getMeasurementTechnique()
    {
        return $this->measurementTechnique;
    }

    /**
     * @param string $measurementTechnique
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMeasurementTechnique($measurementTechnique)
    {
        $types = array(
            "string",
        );

        $measurementTechnique = self::checkTypes($measurementTechnique, $types);

        $this->measurementTechnique = $measurementTechnique;
    }

}
