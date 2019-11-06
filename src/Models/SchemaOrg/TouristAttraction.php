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

    /**
     * Attraction suitable for type(s) of tourist. eg. Children, visitors from a particular country, etc.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Audience|string
     */
    protected $touristType;

    /**
     * A language someone may use with or at the item, service or place. Please use one of the language codes from the <a href="http://tools.ietf.org/html/bcp47">IETF BCP 47 standard</a>. See also <a class="localLink" href="https://schema.org/inLanguage">inLanguage</a>
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Language|string
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
        $types = array(
            "\OpenActive\Models\SchemaOrg\Audience",
            "string",
        );

        $touristType = self::checkTypes($touristType, $types);

        $this->touristType = $touristType;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Language|string
     */
    public function getAvailableLanguage()
    {
        return $this->availableLanguage;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Language|string $availableLanguage
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAvailableLanguage($availableLanguage)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Language",
            "string",
        );

        $availableLanguage = self::checkTypes($availableLanguage, $types);

        $this->availableLanguage = $availableLanguage;
    }

}
