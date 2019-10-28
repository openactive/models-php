<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class CommunicateAction extends \OpenActive\Models\SchemaOrg\InteractAction
{
    /**
     * The subject matter of the content.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Thing
     */
    protected $about;

    /**
     * The language of the content or performance or used in an action. Please use one of the language codes from the <a href="http://tools.ietf.org/html/bcp47">IETF BCP 47 standard</a>. See also <a class="localLink" href="https://schema.org/availableLanguage">availableLanguage</a>.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Language|string
     */
    protected $inLanguage;

    /**
     * A sub property of participant. The participant who is at the receiving end of the action.
     *
     *
     * @var Person|\OpenActive\Models\SchemaOrg\ContactPoint|\OpenActive\Models\SchemaOrg\Audience|Organization
     */
    protected $recipient;

    /**
     * A sub property of instrument. The language used on this action.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Language
     */
    protected $language;

    /**
     * @return \OpenActive\Models\SchemaOrg\Thing
     */
    public function getAbout()
    {
        return $this->about;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Thing $about
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAbout($about)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Thing",
        );

        $about = self::checkTypes($about, $types);

        $this->about = $about;
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
        $types = array(
            "\OpenActive\Models\SchemaOrg\Language",
            "string",
        );

        $inLanguage = self::checkTypes($inLanguage, $types);

        $this->inLanguage = $inLanguage;
    }

    /**
     * @return Person|\OpenActive\Models\SchemaOrg\ContactPoint|\OpenActive\Models\SchemaOrg\Audience|Organization
     */
    public function getRecipient()
    {
        return $this->recipient;
    }

    /**
     * @param Person|\OpenActive\Models\SchemaOrg\ContactPoint|\OpenActive\Models\SchemaOrg\Audience|Organization $recipient
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRecipient($recipient)
    {
        $types = array(
            "Person",
            "\OpenActive\Models\SchemaOrg\ContactPoint",
            "\OpenActive\Models\SchemaOrg\Audience",
            "Organization",
        );

        $recipient = self::checkTypes($recipient, $types);

        $this->recipient = $recipient;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Language
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Language $language
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLanguage($language)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Language",
        );

        $language = self::checkTypes($language, $types);

        $this->language = $language;
    }

}
