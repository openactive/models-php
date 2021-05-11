<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class PronounceableText extends \OpenActive\BaseModel
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:PronounceableText";
    }

    public static function fieldList() {
        $fields = [
            "textValue" => "textValue",
            "phoneticText" => "phoneticText",
            "inLanguage" => "inLanguage",
            "speechToTextMarkup" => "speechToTextMarkup",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Text value being annotated.
     *
     *
     * @var string
     */
    protected $textValue;

    /**
     * Representation of a text [[textValue]] using the specified [[speechToTextMarkup]]. For example the city name of Houston in IPA: /ˈhjuːstən/.
     *
     *
     * @var string
     */
    protected $phoneticText;

    /**
     * The language of the content or performance or used in an action. Please use one of the language codes from the [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[availableLanguage]].
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\Language
     */
    protected $inLanguage;

    /**
     * Form of markup used. eg. [SSML](https://www.w3.org/TR/speech-synthesis11) or [IPA](https://www.wikidata.org/wiki/Property:P898).
     *
     *
     * @var string
     */
    protected $speechToTextMarkup;

    /**
     * @return string
     */
    public function getTextValue()
    {
        return $this->textValue;
    }

    /**
     * @param string $textValue
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTextValue($textValue)
    {
        $types = [
            "string",
        ];

        $textValue = self::checkTypes($textValue, $types);

        $this->textValue = $textValue;
    }

    /**
     * @return string
     */
    public function getPhoneticText()
    {
        return $this->phoneticText;
    }

    /**
     * @param string $phoneticText
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPhoneticText($phoneticText)
    {
        $types = [
            "string",
        ];

        $phoneticText = self::checkTypes($phoneticText, $types);

        $this->phoneticText = $phoneticText;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\Language
     */
    public function getInLanguage()
    {
        return $this->inLanguage;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\Language $inLanguage
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setInLanguage($inLanguage)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\Language",
        ];

        $inLanguage = self::checkTypes($inLanguage, $types);

        $this->inLanguage = $inLanguage;
    }

    /**
     * @return string
     */
    public function getSpeechToTextMarkup()
    {
        return $this->speechToTextMarkup;
    }

    /**
     * @param string $speechToTextMarkup
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSpeechToTextMarkup($speechToTextMarkup)
    {
        $types = [
            "string",
        ];

        $speechToTextMarkup = self::checkTypes($speechToTextMarkup, $types);

        $this->speechToTextMarkup = $speechToTextMarkup;
    }

}
