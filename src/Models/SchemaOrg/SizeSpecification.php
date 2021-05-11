<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class SizeSpecification extends \OpenActive\BaseModel
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:SizeSpecification";
    }

    public static function fieldList() {
        $fields = [
            "hasMeasurement" => "hasMeasurement",
            "suggestedGender" => "suggestedGender",
            "sizeSystem" => "sizeSystem",
            "suggestedAge" => "suggestedAge",
            "suggestedMeasurement" => "suggestedMeasurement",
            "sizeGroup" => "sizeGroup",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A product measurement, for example the inseam of pants, the wheel size of a bicycle, or the gauge of a screw. Usually an exact measurement, but can also be a range of measurements for adjustable products, for example belts and ski bindings.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    protected $hasMeasurement;

    /**
     * The suggested gender of the intended person or audience, for example "male", "female", or "unisex".
     *
     *
     * @var string|\OpenActive\Enums\SchemaOrg\GenderType|null
     */
    protected $suggestedGender;

    /**
     * The size system used to identify a product's size. Typically either a standard (for example, "GS1" or "ISO-EN13402"), country code (for example "US" or "JP"), or a measuring system (for example "Metric" or "Imperial").
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\SizeSystemEnumeration|string|null
     */
    protected $sizeSystem;

    /**
     * The age or age range for the intended audience or person, for example 3-12 months for infants, 1-5 years for toddlers.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    protected $suggestedAge;

    /**
     * A suggested range of body measurements for the intended audience or person, for example inseam between 32 and 34 inches or height between 170 and 190 cm. Typically found on a size chart for wearable products.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    protected $suggestedMeasurement;

    /**
     * The size group (also known as "size type") for a product's size. Size groups are common in the fashion industry to define size segments and suggested audiences for wearable products. Multiple values can be combined, for example "men's big and tall", "petite maternity" or "regular"
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\SizeGroupEnumeration|string|null
     */
    protected $sizeGroup;

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    public function getHasMeasurement()
    {
        return $this->hasMeasurement;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue $hasMeasurement
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHasMeasurement($hasMeasurement)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
        ];

        $hasMeasurement = self::checkTypes($hasMeasurement, $types);

        $this->hasMeasurement = $hasMeasurement;
    }

    /**
     * @return string|\OpenActive\Enums\SchemaOrg\GenderType|null
     */
    public function getSuggestedGender()
    {
        return $this->suggestedGender;
    }

    /**
     * @param string|\OpenActive\Enums\SchemaOrg\GenderType|null $suggestedGender
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSuggestedGender($suggestedGender)
    {
        $types = [
            "string",
            "\OpenActive\Enums\SchemaOrg\GenderType",
            "null",
        ];

        $suggestedGender = self::checkTypes($suggestedGender, $types);

        $this->suggestedGender = $suggestedGender;
    }

    /**
     * @return \OpenActive\Enums\SchemaOrg\SizeSystemEnumeration|string|null
     */
    public function getSizeSystem()
    {
        return $this->sizeSystem;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\SizeSystemEnumeration|string|null $sizeSystem
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSizeSystem($sizeSystem)
    {
        $types = [
            "\OpenActive\Enums\SchemaOrg\SizeSystemEnumeration",
            "string",
            "null",
        ];

        $sizeSystem = self::checkTypes($sizeSystem, $types);

        $this->sizeSystem = $sizeSystem;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    public function getSuggestedAge()
    {
        return $this->suggestedAge;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue $suggestedAge
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSuggestedAge($suggestedAge)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
        ];

        $suggestedAge = self::checkTypes($suggestedAge, $types);

        $this->suggestedAge = $suggestedAge;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    public function getSuggestedMeasurement()
    {
        return $this->suggestedMeasurement;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue $suggestedMeasurement
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSuggestedMeasurement($suggestedMeasurement)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
        ];

        $suggestedMeasurement = self::checkTypes($suggestedMeasurement, $types);

        $this->suggestedMeasurement = $suggestedMeasurement;
    }

    /**
     * @return \OpenActive\Enums\SchemaOrg\SizeGroupEnumeration|string|null
     */
    public function getSizeGroup()
    {
        return $this->sizeGroup;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\SizeGroupEnumeration|string|null $sizeGroup
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSizeGroup($sizeGroup)
    {
        $types = [
            "\OpenActive\Enums\SchemaOrg\SizeGroupEnumeration",
            "string",
            "null",
        ];

        $sizeGroup = self::checkTypes($sizeGroup, $types);

        $this->sizeGroup = $sizeGroup;
    }

}
