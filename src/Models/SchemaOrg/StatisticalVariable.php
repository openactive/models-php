<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class StatisticalVariable extends \OpenActive\Models\SchemaOrg\ConstraintNode
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:StatisticalVariable";
    }

    public static function fieldList() {
        $fields = [
            "measurementTechnique" => "measurementTechnique",
            "statType" => "statType",
            "populationType" => "populationType",
            "measurementDenominator" => "measurementDenominator",
            "measuredProperty" => "measuredProperty",
            "measurementMethod" => "measurementMethod",
            "measurementQualifier" => "measurementQualifier",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

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
     * Indicates the kind of statistic represented by a [[StatisticalVariable]], e.g. mean, count etc. The value of statType is a property, either from within Schema.org (e.g. [[count]], [[median]], [[marginOfError]], [[maxValue]], [[minValue]]) or from other compatible (e.g. RDF) systems such as DataCommons.org or Wikidata.org. 
     *
     *
     * @var string|\OpenActive\Enums\PropertyEnumeration|null
     */
    protected $statType;

    /**
     * Indicates the populationType common to all members of a [[StatisticalPopulation]] or all cases within the scope of a [[StatisticalVariable]].
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Class|string
     */
    protected $populationType;

    /**
     * Identifies the denominator variable when an observation represents a ratio or percentage.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\StatisticalVariable|string
     */
    protected $measurementDenominator;

    /**
     * The measuredProperty of an [[Observation]], typically via its [[StatisticalVariable]]. There are various kinds of applicable [[Property]]: a schema.org property, a property from other RDF-compatible systems, e.g. W3C RDF Data Cube, Data Commons, Wikidata, or schema.org extensions such as [GS1's](https://www.gs1.org/voc/?show=properties).
     *
     *
     * @var string|\OpenActive\Enums\PropertyEnumeration|null
     */
    protected $measuredProperty;

    /**
     * A subproperty of [[measurementTechnique]] that can be used for specifying specific methods, in particular via [[MeasurementMethodEnum]].
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DefinedTerm|string|\OpenActive\Enums\SchemaOrg\MeasurementMethodEnum|null
     */
    protected $measurementMethod;

    /**
     * Provides additional qualification to an observation. For example, a GDP observation measures the Nominal value.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Enumeration|string
     */
    protected $measurementQualifier;

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
     * @return string|\OpenActive\Enums\PropertyEnumeration|null
     */
    public function getStatType()
    {
        return $this->statType;
    }

    /**
     * @param string|\OpenActive\Enums\PropertyEnumeration|null $statType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setStatType($statType)
    {
        $types = [
            "string",
            "\OpenActive\Enums\PropertyEnumeration",
            "null",
        ];

        $statType = self::checkTypes($statType, $types);

        $this->statType = $statType;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Class|string
     */
    public function getPopulationType()
    {
        return $this->populationType;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Class|string $populationType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPopulationType($populationType)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Class",
            "string",
        ];

        $populationType = self::checkTypes($populationType, $types);

        $this->populationType = $populationType;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\StatisticalVariable|string
     */
    public function getMeasurementDenominator()
    {
        return $this->measurementDenominator;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\StatisticalVariable|string $measurementDenominator
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMeasurementDenominator($measurementDenominator)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\StatisticalVariable",
            "string",
        ];

        $measurementDenominator = self::checkTypes($measurementDenominator, $types);

        $this->measurementDenominator = $measurementDenominator;
    }

    /**
     * @return string|\OpenActive\Enums\PropertyEnumeration|null
     */
    public function getMeasuredProperty()
    {
        return $this->measuredProperty;
    }

    /**
     * @param string|\OpenActive\Enums\PropertyEnumeration|null $measuredProperty
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMeasuredProperty($measuredProperty)
    {
        $types = [
            "string",
            "\OpenActive\Enums\PropertyEnumeration",
            "null",
        ];

        $measuredProperty = self::checkTypes($measuredProperty, $types);

        $this->measuredProperty = $measuredProperty;
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
     * @return \OpenActive\Models\SchemaOrg\Enumeration|string
     */
    public function getMeasurementQualifier()
    {
        return $this->measurementQualifier;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Enumeration|string $measurementQualifier
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMeasurementQualifier($measurementQualifier)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Enumeration",
            "string",
        ];

        $measurementQualifier = self::checkTypes($measurementQualifier, $types);

        $this->measurementQualifier = $measurementQualifier;
    }

}
