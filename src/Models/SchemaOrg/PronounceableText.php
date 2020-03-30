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
     * Representation of a text <a class="localLink" href="https://schema.org/textValue">textValue</a> using the specified <a class="localLink" href="https://schema.org/speechToTextMarkup">speechToTextMarkup</a>. For example the city name of Houston in IPA: /ˈhjuːstən/.
     *
     *
     * @var string
     */
    protected $phoneticText;

    /**
     * Form of markup used. eg. <a href="https://www.w3.org/TR/speech-synthesis11">SSML</a> or <a href="https://www.wikidata.org/wiki/Property:P898">IPA</a>.
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
        $types = array(
            "string",
        );

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
        $types = array(
            "string",
        );

        $phoneticText = self::checkTypes($phoneticText, $types);

        $this->phoneticText = $phoneticText;
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
        $types = array(
            "string",
        );

        $speechToTextMarkup = self::checkTypes($speechToTextMarkup, $types);

        $this->speechToTextMarkup = $speechToTextMarkup;
    }

}
