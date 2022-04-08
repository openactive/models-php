<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class TouristAttraction extends \OpenActive\Models\SchemaOrg\Place
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:TouristAttraction";
    }

    public static function fieldList() {
        $fields = [
            "touristType" => "touristType",
            "availableLanguage" => "availableLanguage",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Attraction suitable for type(s) of tourist. eg. Children, visitors from a particular country, etc. 
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Audience|string
     */
    protected $touristType;

    /**
     * A language someone may use with or at the item, service or place. Please use one of the language codes from the [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[inLanguage]]
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\Language
     */
    protected $availableLanguage;

    /**
     * @return \OpenActive\Models\SchemaOrg\Audience|string
     */
    public function getTouristType()
    {
        return $this->touristType;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Audience|string $touristType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTouristType($touristType)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Audience",
            "string",
        ];

        $touristType = self::checkTypes($touristType, $types);

        $this->touristType = $touristType;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\Language
     */
    public function getAvailableLanguage()
    {
        return $this->availableLanguage;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\Language $availableLanguage
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAvailableLanguage($availableLanguage)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\Language",
        ];

        $availableLanguage = self::checkTypes($availableLanguage, $types);

        $this->availableLanguage = $availableLanguage;
    }

}
