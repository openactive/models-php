<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class FinancialService extends \OpenActive\Models\SchemaOrg\LocalBusiness
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:FinancialService";
    }

    /**
     * Description of fees, commissions, and other terms applied either to a class of financial product, or by a financial service organization.
     *
     *
     * @var string
     */
    protected $feesAndCommissionsSpecification;

    /**
     * @return string
     */
    public function getFeesAndCommissionsSpecification()
    {
        return $this->feesAndCommissionsSpecification;
    }

    /**
     * @param string $feesAndCommissionsSpecification
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFeesAndCommissionsSpecification($feesAndCommissionsSpecification)
    {
        $types = array(
            "string",
        );

        $feesAndCommissionsSpecification = self::checkTypes($feesAndCommissionsSpecification, $types);

        $this->feesAndCommissionsSpecification = $feesAndCommissionsSpecification;
    }

}
