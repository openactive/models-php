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
            "sizeSystem" => "sizeSystem",
            "hasMeasurement" => "hasMeasurement",
            "suggestedGender" => "suggestedGender",
            "sizeGroup" => "sizeGroup",
            "suggestedAge" => "suggestedAge",
            "suggestedMeasurement" => "suggestedMeasurement",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The size system used to identify a product's size. Typically either a standard (for example, "GS1" or "ISO-EN13402"), country code (for example "US" or "JP"), or a measuring system (for example "Metric" or "Imperial").
     *
     *
     * @var string|\OpenActive\Enums\SchemaOrg\SizeSystemEnumeration|null
     */
    protected $sizeSystem;

    /**
     * A product measurement, for example the inseam of pants, the wheel size of a bicycle, or the gauge of a screw. Usually an exact measurement, but can also be a range of measurements for adjustable products, for example belts and ski bindings.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    protected $hasMeasurement;

    /**
     * The suggested gender of the intended person or audience, for example "male", "female", or "unisex".
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\GenderType|string|null
     */
    protected $suggestedGender;

    /**
     * The size group (also known as "size type") for a product's size. Size groups are common in the fashion industry to define size segments and suggested audiences for wearable products. Multiple values can be combined, for example "men's big and tall", "petite maternity" or "regular"
     *
     *
     * @var string|\OpenActive\Enums\SchemaOrg\SizeGroupEnumeration|null
     */
    protected $sizeGroup;

    /**
     * The age or age range for the intended audience or person, for example 3-12 months for infants, 1-5 years for toddlers.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    protected $suggestedAge;

    /**
     * A suggested range of body measurements for the intended audience or person, for example inseam between 32 and 34 inches or height between 170 and 190 cm. Typically found on a size chart for wearable products.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    protected $suggestedMeasurement;

    /**
     * @return string|\OpenActive\Enums\SchemaOrg\SizeSystemEnumeration|null
     */
    public function getSizeSystem()
    {
        return $this->sizeSystem;
    }

    /**
     * @param string|\OpenActive\Enums\SchemaOrg\SizeSystemEnumeration|null $sizeSystem
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSizeSystem($sizeSystem)
    {
        $types = [
            "string",
            "\OpenActive\Enums\SchemaOrg\SizeSystemEnumeration",
            "null",
        ];

        $sizeSystem = self::checkTypes($sizeSystem, $types);

        $this->sizeSystem = $sizeSystem;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    public function getHasMeasurement()
    {
        return $this->hasMeasurement;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|string $hasMeasurement
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHasMeasurement($hasMeasurement)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
        ];

        $hasMeasurement = self::checkTypes($hasMeasurement, $types);

        $this->hasMeasurement = $hasMeasurement;
    }

    /**
     * @return \OpenActive\Enums\SchemaOrg\GenderType|string|null
     */
    public function getSuggestedGender()
    {
        return $this->suggestedGender;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\GenderType|string|null $suggestedGender
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSuggestedGender($suggestedGender)
    {
        $types = [
            "\OpenActive\Enums\SchemaOrg\GenderType",
            "string",
            "null",
        ];

        $suggestedGender = self::checkTypes($suggestedGender, $types);

        $this->suggestedGender = $suggestedGender;
    }

    /**
     * @return string|\OpenActive\Enums\SchemaOrg\SizeGroupEnumeration|null
     */
    public function getSizeGroup()
    {
        return $this->sizeGroup;
    }

    /**
     * @param string|\OpenActive\Enums\SchemaOrg\SizeGroupEnumeration|null $sizeGroup
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSizeGroup($sizeGroup)
    {
        $types = [
            "string",
            "\OpenActive\Enums\SchemaOrg\SizeGroupEnumeration",
            "null",
        ];

        $sizeGroup = self::checkTypes($sizeGroup, $types);

        $this->sizeGroup = $sizeGroup;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    public function getSuggestedAge()
    {
        return $this->suggestedAge;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|string $suggestedAge
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSuggestedAge($suggestedAge)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
        ];

        $suggestedAge = self::checkTypes($suggestedAge, $types);

        $this->suggestedAge = $suggestedAge;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    public function getSuggestedMeasurement()
    {
        return $this->suggestedMeasurement;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|string $suggestedMeasurement
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSuggestedMeasurement($suggestedMeasurement)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
        ];

        $suggestedMeasurement = self::checkTypes($suggestedMeasurement, $types);

        $this->suggestedMeasurement = $suggestedMeasurement;
    }

}
