<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from [Barcode](https://schema.org/Barcode), which means that any of this type's properties within schema.org may also be used. Note however the properties on this page must be used in preference if a relevant property is available.
 *
 */
class Barcode extends \OpenActive\Models\OA\ImageObject
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "Barcode";
    }

    public static function fieldList() {
        $fields = [
            "text" => "text",
            "url" => "url",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The barcode number
     *
     * ```json
     * "text": "0123456789"
     * ```
     *
     * @var string
     */
    protected $text;

    /**
     * A fallback rendered barcode image url in addition to the raw barcode details.
     *
     * ```json
     * "url": "https://fallback.image.example.com/476ac24c694da79c5e33731ebbb5f1"
     * ```
     *
     * @var string
     */
    protected $url;

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param string $text
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setText($text)
    {
        $types = array(
            "string",
        );

        $text = self::checkTypes($text, $types);

        $this->text = $text;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setUrl($url)
    {
        $types = array(
            "string",
        );

        $url = self::checkTypes($url, $types);

        $this->url = $url;
    }

}
