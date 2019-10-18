<?php

namespace OpenActive\Models\OA;

/**
 *
 */
class Terms extends \OpenActive\Models\SchemaOrg\DigitalDocument
{
    /**
     * The name of the terms. The name must distinguish this from other terms fields provided, e.g. 'Terms and Conditions' or 'Privacy Policy'.
     *
     *
     * @var string
     */
    protected $name;

    /**
     *
     *
     * @var bool|null
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
     * @throws \Exception If the provided argument is not of a supported type.
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
     * @return bool|null
     */
    public function getRequiresExplicitConsent()
    {
        return $this->requiresExplicitConsent;
    }

    /**
     * @param bool|null $requiresExplicitConsent
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setRequiresExplicitConsent($requiresExplicitConsent)
    {
        $types = array(
            "bool",
            "null",
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
