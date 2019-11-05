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
    static public function getType()
    {
        return "schema:RentAction";
    }

    /**
     * A sub property of participant. The owner of the real estate property.
     *
     *
     * @var Organization|Person
     */
    protected $landlord;

    /**
     * A sub property of participant. The real estate agent involved in the action.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\RealEstateAgent
     */
    protected $realEstateAgent;

    /**
     * @return Organization|Person
     */
    public function getLandlord()
    {
        return $this->landlord;
    }

    /**
     * @param Organization|Person $landlord
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLandlord($landlord)
    {
        $types = array(
            "Organization",
            "Person",
        );

        $landlord = self::checkTypes($landlord, $types);

        $this->landlord = $landlord;
    }

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
        $types = array(
            "\OpenActive\Models\SchemaOrg\RealEstateAgent",
        );

        $realEstateAgent = self::checkTypes($realEstateAgent, $types);

        $this->realEstateAgent = $realEstateAgent;
    }

}
