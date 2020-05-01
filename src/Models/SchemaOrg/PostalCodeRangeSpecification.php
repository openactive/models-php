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
            "postalCodeEnd" => "postalCodeEnd",
            "postalCodeBegin" => "postalCodeBegin",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Last postal code in the range (included). Needs to be after <a class="localLink" href="https://schema.org/postalCodeBegin">postalCodeBegin</a>.
     *
     *
     * @var string
     */
    protected $postalCodeEnd;

    /**
     * First postal code in a range (included).
     *
     *
     * @var string
     */
    protected $postalCodeBegin;

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
        $types = array(
            "string",
        );

        $postalCodeEnd = self::checkTypes($postalCodeEnd, $types);

        $this->postalCodeEnd = $postalCodeEnd;
    }

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
        $types = array(
            "string",
        );

        $postalCodeBegin = self::checkTypes($postalCodeBegin, $types);

        $this->postalCodeBegin = $postalCodeBegin;
    }

}
