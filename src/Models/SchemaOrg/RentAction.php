<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class RentAction extends \OpenActive\Models\SchemaOrg\TradeAction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:RentAction";
    }

    public static function fieldList() {
        $fields = [
            "realEstateAgent" => "realEstateAgent",
            "landlord" => "landlord",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A sub property of participant. The real estate agent involved in the action.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\RealEstateAgent
     */
    protected $realEstateAgent;

    /**
     * A sub property of participant. The owner of the real estate property.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    protected $landlord;

    /**
     * @return \OpenActive\Models\SchemaOrg\RealEstateAgent
     */
    public function getRealEstateAgent()
    {
        return $this->realEstateAgent;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\RealEstateAgent $realEstateAgent
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRealEstateAgent($realEstateAgent)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\RealEstateAgent",
        ];

        $realEstateAgent = self::checkTypes($realEstateAgent, $types);

        $this->realEstateAgent = $realEstateAgent;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    public function getLandlord()
    {
        return $this->landlord;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization $landlord
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLandlord($landlord)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Organization",
        ];

        $landlord = self::checkTypes($landlord, $types);

        $this->landlord = $landlord;
    }

}
