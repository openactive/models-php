<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class WriteAction extends \OpenActive\Models\SchemaOrg\CreateAction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:WriteAction";
    }

    public static function fieldList() {
        $fields = [
            "language" => "language",
            "inLanguage" => "inLanguage",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A sub property of instrument. The language used on this action.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Language|string
     */
    protected $language;

    /**
     * The language of the content or performance or used in an action. Please use one of the language codes from the [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[availableLanguage]].
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Language|string
     */
    protected $inLanguage;

    /**
     * @return \OpenActive\Models\SchemaOrg\Language|string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Language|string $language
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLanguage($language)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Language",
            "string",
        ];

        $language = self::checkTypes($language, $types);

        $this->language = $language;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Language|string
     */
    public function getInLanguage()
    {
        return $this->inLanguage;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Language|string $inLanguage
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setInLanguage($inLanguage)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Language",
            "string",
        ];

        $inLanguage = self::checkTypes($inLanguage, $types);

        $this->inLanguage = $inLanguage;
    }

}
