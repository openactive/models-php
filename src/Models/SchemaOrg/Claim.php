<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Claim extends \OpenActive\Models\SchemaOrg\CreativeWork
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Claim";
    }

    public static function fieldList() {
        $fields = [
            "appearance" => "appearance",
            "firstAppearance" => "firstAppearance",
            "claimInterpreter" => "claimInterpreter",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Indicates an occurrence of a [[Claim]] in some [[CreativeWork]].
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWork|string
     */
    protected $appearance;

    /**
     * Indicates the first known occurrence of a [[Claim]] in some [[CreativeWork]].
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWork|string
     */
    protected $firstAppearance;

    /**
     * For a [[Claim]] interpreted from [[MediaObject]] content, the [[interpretedAsClaim]] property can be used to indicate a claim contained, implied or refined from the content of a [[MediaObject]].
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string
     */
    protected $claimInterpreter;

    /**
     * @return \OpenActive\Models\SchemaOrg\CreativeWork|string
     */
    public function getAppearance()
    {
        return $this->appearance;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CreativeWork|string $appearance
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAppearance($appearance)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\CreativeWork",
            "string",
        ];

        $appearance = self::checkTypes($appearance, $types);

        $this->appearance = $appearance;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\CreativeWork|string
     */
    public function getFirstAppearance()
    {
        return $this->firstAppearance;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CreativeWork|string $firstAppearance
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFirstAppearance($firstAppearance)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\CreativeWork",
            "string",
        ];

        $firstAppearance = self::checkTypes($firstAppearance, $types);

        $this->firstAppearance = $firstAppearance;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string
     */
    public function getClaimInterpreter()
    {
        return $this->claimInterpreter;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string $claimInterpreter
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setClaimInterpreter($claimInterpreter)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $claimInterpreter = self::checkTypes($claimInterpreter, $types);

        $this->claimInterpreter = $claimInterpreter;
    }

}
