<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class CommunicateAction extends \OpenActive\Models\SchemaOrg\InteractAction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:CommunicateAction";
    }

    public static function fieldList() {
        $fields = [
            "about" => "about",
            "language" => "language",
            "recipient" => "recipient",
            "inLanguage" => "inLanguage",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The subject matter of the content.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Thing|string
     */
    protected $about;

    /**
     * A sub property of instrument. The language used on this action.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Language|string
     */
    protected $language;

    /**
     * A sub property of participant. The participant who is at the receiving end of the action.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\ContactPoint|\OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Audience|string
     */
    protected $recipient;

    /**
     * The language of the content or performance or used in an action. Please use one of the language codes from the [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[availableLanguage]].
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\Language
     */
    protected $inLanguage;

    /**
     * @return \OpenActive\Models\SchemaOrg\Thing|string
     */
    public function getAbout()
    {
        return $this->about;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Thing|string $about
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAbout($about)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Thing",
            "string",
        ];

        $about = self::checkTypes($about, $types);

        $this->about = $about;
    }

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
     * @return \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\ContactPoint|\OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Audience|string
     */
    public function getRecipient()
    {
        return $this->recipient;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\ContactPoint|\OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Audience|string $recipient
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRecipient($recipient)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "\OpenActive\Models\SchemaOrg\ContactPoint",
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Audience",
            "string",
        ];

        $recipient = self::checkTypes($recipient, $types);

        $this->recipient = $recipient;
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

}
