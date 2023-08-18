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
            "unitText" => "unitText",
            "measurementTechnique" => "measurementTechnique",
            "value" => "value",
            "maxValue" => "maxValue",
            "valueReference" => "valueReference",
            "minValue" => "minValue",
            "unitCode" => "unitCode",
            "measurementMethod" => "measurementMethod",
            "propertyID" => "propertyID",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A string or text indicating the unit of measurement. Useful if you cannot provide a standard unit code for
     * <a href='unitCode'>unitCode</a>.
     *
     *
     * @var string
     */
    protected $unitText;

    /**
     * A technique, method or technology used in an [[Observation]], [[StatisticalVariable]] or [[Dataset]] (or [[DataDownload]], [[DataCatalog]]), corresponding to the method used for measuring the corresponding variable(s) (for datasets, described using [[variableMeasured]]; for [[Observation]], a [[StatisticalVariable]]). Often but not necessarily each [[variableMeasured]] will have an explicit representation as (or mapping to) an property such as those defined in Schema.org, or other RDF vocabularies and "knowledge graphs". In that case the subproperty of [[variableMeasured]] called [[measuredProperty]] is applicable.
     *     
     * The [[measurementTechnique]] property helps when extra clarification is needed about how a [[measuredProperty]] was measured. This is oriented towards scientific and scholarly dataset publication but may have broader applicability; it is not intended as a full representation of measurement, but can often serve as a high level summary for dataset discovery. 
     * 
     * For example, if [[variableMeasured]] is: molecule concentration, [[measurementTechnique]] could be: "mass spectrometry" or "nmr spectroscopy" or "colorimetry" or "immunofluorescence". If the [[variableMeasured]] is "depression rating", the [[measurementTechnique]] could be "Zung Scale" or "HAM-D" or "Beck Depression Inventory". 
     * 
     * If there are several [[variableMeasured]] properties recorded for some given data object, use a [[PropertyValue]] for each [[variableMeasured]] and attach the corresponding [[measurementTechnique]]. The value can also be from an enumeration, organized as a [[MeasurementMetholdEnumeration]].
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DefinedTerm|string|\OpenActive\Enums\SchemaOrg\MeasurementMethodEnum|null
     */
    protected $measurementTechnique;

    /**
     * The value of a [[QuantitativeValue]] (including [[Observation]]) or property value node.\n\n* For [[QuantitativeValue]] and [[MonetaryAmount]], the recommended type for values is 'Number'.\n* For [[PropertyValue]], it can be 'Text', 'Number', 'Boolean', or 'StructuredValue'.\n* Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE' (U+0039)) rather than superficially similar Unicode symbols.\n* Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal point. Avoid using these symbols as a readability separator.
     *
     *
     * @var bool|string|Number|\OpenActive\Models\SchemaOrg\StructuredValue|null
     */
    protected $value;

    /**
     * The upper value of some characteristic or property.
     *
     *
     * @var Number|null
     */
    protected $maxValue;

    /**
     * A secondary value that provides additional information on the original value, e.g. a reference temperature or a type of measurement.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|\OpenActive\Models\SchemaOrg\PropertyValue|\OpenActive\Models\SchemaOrg\DefinedTerm|\OpenActive\Enums\SchemaOrg\MeasurementTypeEnumeration|string|\OpenActive\Models\SchemaOrg\Enumeration|\OpenActive\Enums\SchemaOrg\QualitativeValue|\OpenActive\Models\SchemaOrg\StructuredValue|null
     */
    protected $valueReference;

    /**
     * The lower value of some characteristic or property.
     *
     *
     * @var Number|null
     */
    protected $minValue;

    /**
     * The unit of measurement given using the UN/CEFACT Common Code (3 characters) or a URL. Other codes than the UN/CEFACT Common Code may be used with a prefix followed by a colon.
     *
     *
     * @var string
     */
    protected $unitCode;

    /**
     * A subproperty of [[measurementTechnique]] that can be used for specifying specific methods, in particular via [[MeasurementMethodEnum]].
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DefinedTerm|string|\OpenActive\Enums\SchemaOrg\MeasurementMethodEnum|null
     */
    protected $measurementMethod;

    /**
     * A commonly used identifier for the characteristic represented by the property, e.g. a manufacturer or a standard code for a property. propertyID can be
     * (1) a prefixed string, mainly meant to be used with standards for product properties; (2) a site-specific, non-prefixed string (e.g. the primary key of the property or the vendor-specific ID of the property), or (3)
     * a URL indicating the type of the property, either pointing to an external vocabulary, or a Web resource that describes the property (e.g. a glossary entry).
     * Standards bodies should promote a standard prefix for the identifiers of properties from their standards.
     *
     *
     * @var string
     */
    protected $propertyID;

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
        $types = [
            "string",
        ];

        $unitText = self::checkTypes($unitText, $types);

        $this->unitText = $unitText;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\DefinedTerm|string|\OpenActive\Enums\SchemaOrg\MeasurementMethodEnum|null
     */
    public function getMeasurementTechnique()
    {
        return $this->measurementTechnique;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\DefinedTerm|string|\OpenActive\Enums\SchemaOrg\MeasurementMethodEnum|null $measurementTechnique
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMeasurementTechnique($measurementTechnique)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\DefinedTerm",
            "string",
            "\OpenActive\Enums\SchemaOrg\MeasurementMethodEnum",
            "null",
        ];

        $measurementTechnique = self::checkTypes($measurementTechnique, $types);

        $this->measurementTechnique = $measurementTechnique;
    }

    /**
     * @return bool|string|Number|\OpenActive\Models\SchemaOrg\StructuredValue|null
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param bool|string|Number|\OpenActive\Models\SchemaOrg\StructuredValue|null $value
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setValue($value)
    {
        $types = [
            "bool",
            "string",
            "Number",
            "\OpenActive\Models\SchemaOrg\StructuredValue",
            "null",
        ];

        $value = self::checkTypes($value, $types);

        $this->value = $value;
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
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|\OpenActive\Models\SchemaOrg\PropertyValue|\OpenActive\Models\SchemaOrg\DefinedTerm|\OpenActive\Enums\SchemaOrg\MeasurementTypeEnumeration|string|\OpenActive\Models\SchemaOrg\Enumeration|\OpenActive\Enums\SchemaOrg\QualitativeValue|\OpenActive\Models\SchemaOrg\StructuredValue|null
     */
    public function getValueReference()
    {
        return $this->valueReference;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|\OpenActive\Models\SchemaOrg\PropertyValue|\OpenActive\Models\SchemaOrg\DefinedTerm|\OpenActive\Enums\SchemaOrg\MeasurementTypeEnumeration|string|\OpenActive\Models\SchemaOrg\Enumeration|\OpenActive\Enums\SchemaOrg\QualitativeValue|\OpenActive\Models\SchemaOrg\StructuredValue|null $valueReference
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setValueReference($valueReference)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "\OpenActive\Models\SchemaOrg\PropertyValue",
            "\OpenActive\Models\SchemaOrg\DefinedTerm",
            "\OpenActive\Enums\SchemaOrg\MeasurementTypeEnumeration",
            "string",
            "\OpenActive\Models\SchemaOrg\Enumeration",
            "\OpenActive\Enums\SchemaOrg\QualitativeValue",
            "\OpenActive\Models\SchemaOrg\StructuredValue",
            "null",
        ];

        $valueReference = self::checkTypes($valueReference, $types);

        $this->valueReference = $valueReference;
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
        $types = [
            "string",
        ];

        $unitCode = self::checkTypes($unitCode, $types);

        $this->unitCode = $unitCode;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\DefinedTerm|string|\OpenActive\Enums\SchemaOrg\MeasurementMethodEnum|null
     */
    public function getMeasurementMethod()
    {
        return $this->measurementMethod;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\DefinedTerm|string|\OpenActive\Enums\SchemaOrg\MeasurementMethodEnum|null $measurementMethod
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMeasurementMethod($measurementMethod)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\DefinedTerm",
            "string",
            "\OpenActive\Enums\SchemaOrg\MeasurementMethodEnum",
            "null",
        ];

        $measurementMethod = self::checkTypes($measurementMethod, $types);

        $this->measurementMethod = $measurementMethod;
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
        $types = [
            "string",
        ];

        $propertyID = self::checkTypes($propertyID, $types);

        $this->propertyID = $propertyID;
    }

}
