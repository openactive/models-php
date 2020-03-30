<?php

namespace OpenActive\Models\OA;

/**
 *
 */
class Terms extends \OpenActive\Models\SchemaOrg\DigitalDocument
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "Terms";
    }

    public static function fieldList() {
        $fields = [
            "name" => "name",
            "dateModified" => "dateModified",
            "requiresExplicitConsent" => "requiresExplicitConsent",
            "url" => "url",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The name of the terms. The name must distinguish this from other terms fields provided, e.g. 'Terms and Conditions' or 'Privacy Policy'.
     *
     *
     * @var string
     */
    protected $name;

    /**
     * The date and time at which the webpage containing the contents of the terms, located at the `url`, was last updated.
     *
     * ```json
     * "dateModified": "2018-01-27T12:00:00Z"
     * ```
     *
     * @var null|DateTime
     */
    protected $dateModified;

    /**
     *
     *
     * @var null|bool
     */
    protected $requiresExplicitConsent;

    /**
     * The URL of the webpage containing the contents of the terms.
     *
     *
     * @var string
     */
    protected $url;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setName($name)
    {
        $types = array(
            "string",
        );

        $name = self::checkTypes($name, $types);

        $this->name = $name;
    }

    /**
     * @return null|DateTime
     */
    public function getDateModified()
    {
        return $this->dateModified;
    }

    /**
     * @param null|DateTime $dateModified
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDateModified($dateModified)
    {
        $types = array(
            "null",
            "DateTime",
        );

        $dateModified = self::checkTypes($dateModified, $types);

        $this->dateModified = $dateModified;
    }

    /**
     * @return null|bool
     */
    public function getRequiresExplicitConsent()
    {
        return $this->requiresExplicitConsent;
    }

    /**
     * @param null|bool $requiresExplicitConsent
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRequiresExplicitConsent($requiresExplicitConsent)
    {
        $types = array(
            "null",
            "bool",
        );

        $requiresExplicitConsent = self::checkTypes($requiresExplicitConsent, $types);

        $this->requiresExplicitConsent = $requiresExplicitConsent;
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
