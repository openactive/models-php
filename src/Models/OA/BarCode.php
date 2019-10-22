<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from [ImageObject](https://schema.org/ImageObject), which means that any of this type's properties within schema.org may also be used. Note however the properties on this page must be used in preference if a relevant property is available.
 *
 */
class BarCode extends \OpenActive\Models\OA\ImageObject
{
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
     * @throws \Exception If the provided argument is not of a supported type.
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
     * @throws \Exception If the provided argument is not of a supported type.
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