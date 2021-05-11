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
            "authenticator" => "authenticator",
            "expectsAcceptanceOf" => "expectsAcceptanceOf",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The Organization responsible for authenticating the user's subscription. For example, many media apps require a cable/satellite provider to authenticate your subscription before playing media.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization
     */
    protected $authenticator;

    /**
     * An Offer which must be accepted before the user can perform the Action. For example, the user may need to buy a movie before being able to watch it.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Offer
     */
    protected $expectsAcceptanceOf;

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization
     */
    public function getAuthenticator()
    {
        return $this->authenticator;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization $authenticator
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAuthenticator($authenticator)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
        ];

        $authenticator = self::checkTypes($authenticator, $types);

        $this->authenticator = $authenticator;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Offer
     */
    public function getExpectsAcceptanceOf()
    {
        return $this->expectsAcceptanceOf;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Offer $expectsAcceptanceOf
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setExpectsAcceptanceOf($expectsAcceptanceOf)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Offer",
        ];

        $expectsAcceptanceOf = self::checkTypes($expectsAcceptanceOf, $types);

        $this->expectsAcceptanceOf = $expectsAcceptanceOf;
    }

}
