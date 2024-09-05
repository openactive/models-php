<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ConsumeAction extends \OpenActive\Models\SchemaOrg\Action
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ConsumeAction";
    }

    public static function fieldList() {
        $fields = [
            "expectsAcceptanceOf" => "expectsAcceptanceOf",
            "actionAccessibilityRequirement" => "actionAccessibilityRequirement",
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
     * A set of requirements that must be fulfilled in order to perform an Action. If more than one value is specified, fulfilling one set of requirements will allow the Action to be performed.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ActionAccessSpecification|string
     */
    protected $actionAccessibilityRequirement;

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
     * @return \OpenActive\Models\SchemaOrg\ActionAccessSpecification|string
     */
    public function getActionAccessibilityRequirement()
    {
        return $this->actionAccessibilityRequirement;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ActionAccessSpecification|string $actionAccessibilityRequirement
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setActionAccessibilityRequirement($actionAccessibilityRequirement)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\ActionAccessSpecification",
            "string",
        ];

        $actionAccessibilityRequirement = self::checkTypes($actionAccessibilityRequirement, $types);

        $this->actionAccessibilityRequirement = $actionAccessibilityRequirement;
    }

}
