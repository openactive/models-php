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
     * @var \OpenActive\Models\SchemaOrg\RealEstateAgent|string
     */
    protected $realEstateAgent;

    /**
     * A sub property of participant. The owner of the real estate property.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string
     */
    protected $landlord;

    /**
     * @return \OpenActive\Models\SchemaOrg\RealEstateAgent|string
     */
    public function getRealEstateAgent()
    {
        return $this->realEstateAgent;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\RealEstateAgent|string $realEstateAgent
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRealEstateAgent($realEstateAgent)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\RealEstateAgent",
            "string",
        ];

        $realEstateAgent = self::checkTypes($realEstateAgent, $types);

        $this->realEstateAgent = $realEstateAgent;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string
     */
    public function getLandlord()
    {
        return $this->landlord;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string $landlord
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLandlord($landlord)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Organization",
            "string",
        ];

        $landlord = self::checkTypes($landlord, $types);

        $this->landlord = $landlord;
    }

}
