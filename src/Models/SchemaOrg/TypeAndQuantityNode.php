<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class TypeAndQuantityNode extends \OpenActive\Models\SchemaOrg\StructuredValue
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:TypeAndQuantityNode";
    }

    public static function fieldList() {
        $fields = [
            "unitCode" => "unitCode",
            "typeOfGood" => "typeOfGood",
            "amountOfThisGood" => "amountOfThisGood",
            "unitText" => "unitText",
            "businessFunction" => "businessFunction",
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
     * The product that this structured value is referring to.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Product|\OpenActive\Models\SchemaOrg\Service
     */
    protected $typeOfGood;

    /**
     * The quantity of the goods included in the offer.
     *
     *
     * @var float|null
     */
    protected $amountOfThisGood;

    /**
     * A string or text indicating the unit of measurement. Useful if you cannot provide a standard unit code for
     * <a href='unitCode'>unitCode</a>.
     *
     *
     * @var string
     */
    protected $unitText;

    /**
     * The business function (e.g. sell, lease, repair, dispose) of the offer or component of a bundle (TypeAndQuantityNode). The default is http://purl.org/goodrelations/v1#Sell.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\BusinessFunction|null
     */
    protected $businessFunction;

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
     * @return \OpenActive\Models\SchemaOrg\Product|\OpenActive\Models\SchemaOrg\Service
     */
    public function getTypeOfGood()
    {
        return $this->typeOfGood;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Product|\OpenActive\Models\SchemaOrg\Service $typeOfGood
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTypeOfGood($typeOfGood)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Product",
            "\OpenActive\Models\SchemaOrg\Service",
        );

        $typeOfGood = self::checkTypes($typeOfGood, $types);

        $this->typeOfGood = $typeOfGood;
    }

    /**
     * @return float|null
     */
    public function getAmountOfThisGood()
    {
        return $this->amountOfThisGood;
    }

    /**
     * @param float|null $amountOfThisGood
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAmountOfThisGood($amountOfThisGood)
    {
        $types = array(
            "float",
            "null",
        );

        $amountOfThisGood = self::checkTypes($amountOfThisGood, $types);

        $this->amountOfThisGood = $amountOfThisGood;
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
     * @return \OpenActive\Enums\SchemaOrg\BusinessFunction|null
     */
    public function getBusinessFunction()
    {
        return $this->businessFunction;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\BusinessFunction|null $businessFunction
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBusinessFunction($businessFunction)
    {
        $types = array(
            "\OpenActive\Enums\SchemaOrg\BusinessFunction",
            "null",
        );

        $businessFunction = self::checkTypes($businessFunction, $types);

        $this->businessFunction = $businessFunction;
    }

}
