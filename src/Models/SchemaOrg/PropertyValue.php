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
            "maxValue" => "maxValue",
            "measurementMethod" => "measurementMethod",
            "measurementTechnique" => "measurementTechnique",
            "minValue" => "minValue",
            "propertyID" => "propertyID",
            "unitCode" => "unitCode",
            "unitText" => "unitText",
            "value" => "value",
            "valueGroup" => "valueGroup",
            "valueReference" => "valueReference",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The upper value of some characteristic or property.
     *
     *
     * @var Number|null
     */
    protected $maxValue;

    /**
     * A subproperty of [[measurementTechnique]] that can be used for specifying specific methods, in particular via [[MeasurementMethodEnum]].
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DefinedTerm|\OpenActive\Enums\SchemaOrg\MeasurementMethodEnum|string|null
     */
    protected $measurementMethod;

    /**
     * A technique, method or technology used in an [[Observation]], [[StatisticalVariable]] or [[Dataset]] (or [[DataDownload]], [[DataCatalog]]), corresponding to the method used for measuring the corresponding variable(s) (for datasets, described using [[variableMeasured]]; for [[Observation]], a [[StatisticalVariable]]). Often but not necessarily each [[variableMeasured]] will have an explicit representation as (or mapping to) an property such as those defined in Schema.org, or other RDF vocabularies and "knowledge graphs". In that case the subproperty of [[variableMeasured]] called [[measuredProperty]] is applicable.
     *     
     * The [[measurementTechnique]] property helps when extra clarification is needed about how a [[measuredProperty]] was measured. This is oriented towards scientific and scholarly dataset publication but may have broader applicability; it is not intended as a full representation of measurement, but can often serve as a high level summary for dataset discovery. 
     * 
     * For example, if [[variableMeasured]] is: molecule concentration, [[measurementTechnique]] could be: "mass spectrometry" or "nmr spectroscopy" or "colorimetry" or "immunofluorescence". If the [[variableMeasured]] is "depression rating", the [[measurementTechnique]] could be "Zung Scale" or "HAM-D" or "Beck Depression Inventory". 
     * 
     * If there are several [[variableMeasured]] properties recorded for some given data object, use a [[PropertyValue]] for each [[variableMeasured]] and attach the corresponding [[measurementTechnique]]. The value can also be from an enumeration, organized as a [[MeasurementMethodEnum]].
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DefinedTerm|\OpenActive\Enums\SchemaOrg\MeasurementMethodEnum|string|null
     */
    protected $measurementTechnique;

    /**
     * The lower value of some characteristic or property.
     *
     *
     * @var Number|null
     */
    protected $minValue;

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
     * The value of a [[QuantitativeValue]] (including [[Observation]]) or property value node.\n\n* For [[QuantitativeValue]] and [[MonetaryAmount]], the recommended type for values is 'Number'.\n* For [[PropertyValue]], it can be 'Text', 'Number', 'Boolean', 'StructuredValue' or 'QualitativeValue'.\n* Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE' (U+0039)) rather than superficially similar Unicode symbols.\n* Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal point. Avoid using these symbols as a readability separator.
     *
     *
     * @var bool|Number|\OpenActive\Enums\SchemaOrg\QualitativeValue|\OpenActive\Models\SchemaOrg\StructuredValue|string|null
     */
    protected $value;

    /**
     * A header or section name for grouping related property values.
     *
     *
     * @var string
     */
    protected $valueGroup;

    /**
     * A secondary value that provides additional information on the original value, e.g. a reference temperature or a type of measurement.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DefinedTerm|\OpenActive\Models\SchemaOrg\Enumeration|\OpenActive\Enums\SchemaOrg\MeasurementTypeEnumeration|\OpenActive\Models\SchemaOrg\PropertyValue|\OpenActive\Enums\SchemaOrg\QualitativeValue|\OpenActive\Models\SchemaOrg\QuantitativeValue|\OpenActive\Models\SchemaOrg\StructuredValue|string|null
     */
    protected $valueReference;

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
     * @return \OpenActive\Models\SchemaOrg\DefinedTerm|\OpenActive\Enums\SchemaOrg\MeasurementMethodEnum|string|null
     */
    public function getMeasurementMethod()
    {
        return $this->measurementMethod;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\DefinedTerm|\OpenActive\Enums\SchemaOrg\MeasurementMethodEnum|string|null $measurementMethod
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMeasurementMethod($measurementMethod)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\DefinedTerm",
            "\OpenActive\Enums\SchemaOrg\MeasurementMethodEnum",
            "string",
            "null",
        ];

        $measurementMethod = self::checkTypes($measurementMethod, $types);

        $this->measurementMethod = $measurementMethod;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\DefinedTerm|\OpenActive\Enums\SchemaOrg\MeasurementMethodEnum|string|null
     */
    public function getMeasurementTechnique()
    {
        return $this->measurementTechnique;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\DefinedTerm|\OpenActive\Enums\SchemaOrg\MeasurementMethodEnum|string|null $measurementTechnique
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMeasurementTechnique($measurementTechnique)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\DefinedTerm",
            "\OpenActive\Enums\SchemaOrg\MeasurementMethodEnum",
            "string",
            "null",
        ];

        $measurementTechnique = self::checkTypes($measurementTechnique, $types);

        $this->measurementTechnique = $measurementTechnique;
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
     * @return bool|Number|\OpenActive\Enums\SchemaOrg\QualitativeValue|\OpenActive\Models\SchemaOrg\StructuredValue|string|null
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param bool|Number|\OpenActive\Enums\SchemaOrg\QualitativeValue|\OpenActive\Models\SchemaOrg\StructuredValue|string|null $value
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setValue($value)
    {
        $types = [
            "bool",
            "Number",
            "\OpenActive\Enums\SchemaOrg\QualitativeValue",
            "\OpenActive\Models\SchemaOrg\StructuredValue",
            "string",
            "null",
        ];

        $value = self::checkTypes($value, $types);

        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getValueGroup()
    {
        return $this->valueGroup;
    }

    /**
     * @param string $valueGroup
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setValueGroup($valueGroup)
    {
        $types = [
            "string",
        ];

        $valueGroup = self::checkTypes($valueGroup, $types);

        $this->valueGroup = $valueGroup;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\DefinedTerm|\OpenActive\Models\SchemaOrg\Enumeration|\OpenActive\Enums\SchemaOrg\MeasurementTypeEnumeration|\OpenActive\Models\SchemaOrg\PropertyValue|\OpenActive\Enums\SchemaOrg\QualitativeValue|\OpenActive\Models\SchemaOrg\QuantitativeValue|\OpenActive\Models\SchemaOrg\StructuredValue|string|null
     */
    public function getValueReference()
    {
        return $this->valueReference;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\DefinedTerm|\OpenActive\Models\SchemaOrg\Enumeration|\OpenActive\Enums\SchemaOrg\MeasurementTypeEnumeration|\OpenActive\Models\SchemaOrg\PropertyValue|\OpenActive\Enums\SchemaOrg\QualitativeValue|\OpenActive\Models\SchemaOrg\QuantitativeValue|\OpenActive\Models\SchemaOrg\StructuredValue|string|null $valueReference
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setValueReference($valueReference)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\DefinedTerm",
            "\OpenActive\Models\SchemaOrg\Enumeration",
            "\OpenActive\Enums\SchemaOrg\MeasurementTypeEnumeration",
            "\OpenActive\Models\SchemaOrg\PropertyValue",
            "\OpenActive\Enums\SchemaOrg\QualitativeValue",
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "\OpenActive\Models\SchemaOrg\StructuredValue",
            "string",
            "null",
        ];

        $valueReference = self::checkTypes($valueReference, $types);

        $this->valueReference = $valueReference;
    }

}
