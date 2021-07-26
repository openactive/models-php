<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MediaSubscription extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MediaSubscription";
    }

    public static function fieldList() {
        $fields = [
            "expectsAcceptanceOf" => "expectsAcceptanceOf",
            "authenticator" => "authenticator",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * An Offer which must be accepted before the user can perform the Action. For example, the user may need to buy a movie before being able to watch it.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Offer|string
     */
    protected $expectsAcceptanceOf;

    /**
     * The Organization responsible for authenticating the user's subscription. For example, many media apps require a cable/satellite provider to authenticate your subscription before playing media.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|string
     */
    protected $authenticator;

    /**
     * @return \OpenActive\Models\SchemaOrg\Offer|string
     */
    public function getExpectsAcceptanceOf()
    {
        return $this->expectsAcceptanceOf;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Offer|string $expectsAcceptanceOf
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setExpectsAcceptanceOf($expectsAcceptanceOf)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Offer",
            "string",
        ];

        $expectsAcceptanceOf = self::checkTypes($expectsAcceptanceOf, $types);

        $this->expectsAcceptanceOf = $expectsAcceptanceOf;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|string
     */
    public function getAuthenticator()
    {
        return $this->authenticator;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|string $authenticator
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAuthenticator($authenticator)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "string",
        ];

        $authenticator = self::checkTypes($authenticator, $types);

        $this->authenticator = $authenticator;
    }

}
