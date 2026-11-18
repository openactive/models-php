<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class PostalCodeRangeSpecification extends \OpenActive\Models\SchemaOrg\StructuredValue
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:PostalCodeRangeSpecification";
    }

    public static function fieldList() {
        $fields = [
            "postalCodeBegin" => "postalCodeBegin",
            "postalCodeEnd" => "postalCodeEnd",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * First postal code in a range (included).
     *
     *
     * @var string
     */
    protected $postalCodeBegin;

    /**
     * Last postal code in the range (included). Needs to be after [[postalCodeBegin]].
     *
     *
     * @var string
     */
    protected $postalCodeEnd;

    /**
     * @return string
     */
    public function getPostalCodeBegin()
    {
        return $this->postalCodeBegin;
    }

    /**
     * @param string $postalCodeBegin
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPostalCodeBegin($postalCodeBegin)
    {
        $types = [
            "string",
        ];

        $postalCodeBegin = self::checkTypes($postalCodeBegin, $types);

        $this->postalCodeBegin = $postalCodeBegin;
    }

    /**
     * @return string
     */
    public function getPostalCodeEnd()
    {
        return $this->postalCodeEnd;
    }

    /**
     * @param string $postalCodeEnd
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPostalCodeEnd($postalCodeEnd)
    {
        $types = [
            "string",
        ];

        $postalCodeEnd = self::checkTypes($postalCodeEnd, $types);

        $this->postalCodeEnd = $postalCodeEnd;
    }

}
