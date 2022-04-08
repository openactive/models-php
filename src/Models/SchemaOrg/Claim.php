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
            "claimInterpreter" => "claimInterpreter",
            "firstAppearance" => "firstAppearance",
            "appearance" => "appearance",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * For a [[Claim]] interpreted from [[MediaObject]] content
     *     sed to indicate a claim contained, implied or refined from the content of a [[MediaObject]].
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string
     */
    protected $claimInterpreter;

    /**
     * Indicates the first known occurence of a [[Claim]] in some [[CreativeWork]].
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWork|string
     */
    protected $firstAppearance;

    /**
     * Indicates an occurence of a [[Claim]] in some [[CreativeWork]].
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWork|string
     */
    protected $appearance;

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string
     */
    public function getClaimInterpreter()
    {
        return $this->claimInterpreter;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string $claimInterpreter
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setClaimInterpreter($claimInterpreter)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Organization",
            "string",
        ];

        $claimInterpreter = self::checkTypes($claimInterpreter, $types);

        $this->claimInterpreter = $claimInterpreter;
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

}
