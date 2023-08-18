<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Observation extends \OpenActive\Models\SchemaOrg\QuantitativeValue
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Observation";
    }

    public static function fieldList() {
        $fields = [
            "observationPeriod" => "observationPeriod",
            "variableMeasured" => "variableMeasured",
            "observationAbout" => "observationAbout",
            "measurementTechnique" => "measurementTechnique",
            "measurementDenominator" => "measurementDenominator",
            "marginOfError" => "marginOfError",
            "measuredProperty" => "measuredProperty",
            "measurementMethod" => "measurementMethod",
            "observationDate" => "observationDate",
            "measurementQualifier" => "measurementQualifier",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The length of time an Observation took place over. The format follows `P[0-9]*[Y|M|D|h|m|s]`. For example, P1Y is Period 1 Year, P3M is Period 3 Months, P3h is Period 3 hours.
     *
     *
     * @var string
     */
    protected $observationPeriod;

    /**
     * The variableMeasured property can indicate (repeated as necessary) the  variables that are measured in some dataset, either described as text or as pairs of identifier and description using PropertyValue, or more explicitly as a [[StatisticalVariable]].
     *
     *
     * @var \OpenActive\Enums\PropertyEnumeration|\OpenActive\Models\SchemaOrg\StatisticalVariable|string|\OpenActive\Models\SchemaOrg\PropertyValue|null
     */
    protected $variableMeasured;

    /**
     * The [[observationAbout]] property identifies an entity, often a [[Place]], associated with an [[Observation]].
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Thing|\OpenActive\Models\SchemaOrg\Place|string
     */
    protected $observationAbout;

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
     * Identifies the denominator variable when an observation represents a ratio or percentage.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\StatisticalVariable|string
     */
    protected $measurementDenominator;

    /**
     * A [[marginOfError]] for an [[Observation]].
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    protected $marginOfError;

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
     * The observationDate of an [[Observation]].
     *
     *
     * @var DateTime|null
     */
    protected $observationDate;

    /**
     * Provides additional qualification to an observation. For example, a GDP observation measures the Nominal value.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Enumeration|string
     */
    protected $measurementQualifier;

    /**
     * @return string
     */
    public function getObservationPeriod()
    {
        return $this->observationPeriod;
    }

    /**
     * @param string $observationPeriod
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setObservationPeriod($observationPeriod)
    {
        $types = [
            "string",
        ];

        $observationPeriod = self::checkTypes($observationPeriod, $types);

        $this->observationPeriod = $observationPeriod;
    }

    /**
     * @return \OpenActive\Enums\PropertyEnumeration|\OpenActive\Models\SchemaOrg\StatisticalVariable|string|\OpenActive\Models\SchemaOrg\PropertyValue|null
     */
    public function getVariableMeasured()
    {
        return $this->variableMeasured;
    }

    /**
     * @param \OpenActive\Enums\PropertyEnumeration|\OpenActive\Models\SchemaOrg\StatisticalVariable|string|\OpenActive\Models\SchemaOrg\PropertyValue|null $variableMeasured
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setVariableMeasured($variableMeasured)
    {
        $types = [
            "\OpenActive\Enums\PropertyEnumeration",
            "\OpenActive\Models\SchemaOrg\StatisticalVariable",
            "string",
            "\OpenActive\Models\SchemaOrg\PropertyValue",
            "null",
        ];

        $variableMeasured = self::checkTypes($variableMeasured, $types);

        $this->variableMeasured = $variableMeasured;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Thing|\OpenActive\Models\SchemaOrg\Place|string
     */
    public function getObservationAbout()
    {
        return $this->observationAbout;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Thing|\OpenActive\Models\SchemaOrg\Place|string $observationAbout
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setObservationAbout($observationAbout)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Thing",
            "\OpenActive\Models\SchemaOrg\Place",
            "string",
        ];

        $observationAbout = self::checkTypes($observationAbout, $types);

        $this->observationAbout = $observationAbout;
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
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    public function getMarginOfError()
    {
        return $this->marginOfError;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|string $marginOfError
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMarginOfError($marginOfError)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
        ];

        $marginOfError = self::checkTypes($marginOfError, $types);

        $this->marginOfError = $marginOfError;
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
     * @return DateTime|null
     */
    public function getObservationDate()
    {
        return $this->observationDate;
    }

    /**
     * @param DateTime|null $observationDate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setObservationDate($observationDate)
    {
        $types = [
            "DateTime",
            "null",
        ];

        $observationDate = self::checkTypes($observationDate, $types);

        $this->observationDate = $observationDate;
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
