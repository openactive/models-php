<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MemberProgramTier extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MemberProgramTier";
    }

    public static function fieldList() {
        $fields = [
            "hasTierRequirement" => "hasTierRequirement",
            "membershipPointsEarned" => "membershipPointsEarned",
            "hasTierBenefit" => "hasTierBenefit",
            "isTierOf" => "isTierOf",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A requirement for a user to join a membership tier, for example: a CreditCard if the tier requires sign up for a credit card, A UnitPriceSpecification if the user is required to pay a (periodic) fee, or a MonetaryAmount if the user needs to spend a minimum amount to join the tier. If a tier is free to join then this property does not need to be specified.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreditCard|\OpenActive\Models\SchemaOrg\UnitPriceSpecification|\OpenActive\Models\SchemaOrg\MonetaryAmount|string
     */
    protected $hasTierRequirement;

    /**
     * The number of membership points earned by the member. If necessary, the unitText can be used to express the units the points are issued in. (E.g. stars, miles, etc.)
     *
     *
     * @var Number|\OpenActive\Models\SchemaOrg\QuantitativeValue|string|null
     */
    protected $membershipPointsEarned;

    /**
     * A member benefit for a particular tier of a loyalty program.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\TierBenefitEnumeration|null
     */
    protected $hasTierBenefit;

    /**
     * The member program this tier is a part of.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MemberProgram|string
     */
    protected $isTierOf;

    /**
     * @return \OpenActive\Models\SchemaOrg\CreditCard|\OpenActive\Models\SchemaOrg\UnitPriceSpecification|\OpenActive\Models\SchemaOrg\MonetaryAmount|string
     */
    public function getHasTierRequirement()
    {
        return $this->hasTierRequirement;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CreditCard|\OpenActive\Models\SchemaOrg\UnitPriceSpecification|\OpenActive\Models\SchemaOrg\MonetaryAmount|string $hasTierRequirement
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHasTierRequirement($hasTierRequirement)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\CreditCard",
            "\OpenActive\Models\SchemaOrg\UnitPriceSpecification",
            "\OpenActive\Models\SchemaOrg\MonetaryAmount",
            "string",
        ];

        $hasTierRequirement = self::checkTypes($hasTierRequirement, $types);

        $this->hasTierRequirement = $hasTierRequirement;
    }

    /**
     * @return Number|\OpenActive\Models\SchemaOrg\QuantitativeValue|string|null
     */
    public function getMembershipPointsEarned()
    {
        return $this->membershipPointsEarned;
    }

    /**
     * @param Number|\OpenActive\Models\SchemaOrg\QuantitativeValue|string|null $membershipPointsEarned
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMembershipPointsEarned($membershipPointsEarned)
    {
        $types = [
            "Number",
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
            "null",
        ];

        $membershipPointsEarned = self::checkTypes($membershipPointsEarned, $types);

        $this->membershipPointsEarned = $membershipPointsEarned;
    }

    /**
     * @return \OpenActive\Enums\SchemaOrg\TierBenefitEnumeration|null
     */
    public function getHasTierBenefit()
    {
        return $this->hasTierBenefit;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\TierBenefitEnumeration|null $hasTierBenefit
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHasTierBenefit($hasTierBenefit)
    {
        $types = [
            "\OpenActive\Enums\SchemaOrg\TierBenefitEnumeration",
            "null",
        ];

        $hasTierBenefit = self::checkTypes($hasTierBenefit, $types);

        $this->hasTierBenefit = $hasTierBenefit;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MemberProgram|string
     */
    public function getIsTierOf()
    {
        return $this->isTierOf;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MemberProgram|string $isTierOf
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIsTierOf($isTierOf)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MemberProgram",
            "string",
        ];

        $isTierOf = self::checkTypes($isTierOf, $types);

        $this->isTierOf = $isTierOf;
    }

}
