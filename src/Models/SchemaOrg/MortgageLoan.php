<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MortgageLoan extends \OpenActive\Models\SchemaOrg\LoanOrCredit
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MortgageLoan";
    }

    public static function fieldList() {
        $fields = [
            "loanMortgageMandateAmount" => "loanMortgageMandateAmount",
            "domiciledMortgage" => "domiciledMortgage",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Amount of mortgage mandate that can be converted into a proper mortgage at a later stage.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MonetaryAmount|string
     */
    protected $loanMortgageMandateAmount;

    /**
     * Whether borrower is a resident of the jurisdiction where the property is located.
     *
     *
     * @var bool|null
     */
    protected $domiciledMortgage;

    /**
     * @return \OpenActive\Models\SchemaOrg\MonetaryAmount|string
     */
    public function getLoanMortgageMandateAmount()
    {
        return $this->loanMortgageMandateAmount;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MonetaryAmount|string $loanMortgageMandateAmount
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLoanMortgageMandateAmount($loanMortgageMandateAmount)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MonetaryAmount",
            "string",
        ];

        $loanMortgageMandateAmount = self::checkTypes($loanMortgageMandateAmount, $types);

        $this->loanMortgageMandateAmount = $loanMortgageMandateAmount;
    }

    /**
     * @return bool|null
     */
    public function getDomiciledMortgage()
    {
        return $this->domiciledMortgage;
    }

    /**
     * @param bool|null $domiciledMortgage
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDomiciledMortgage($domiciledMortgage)
    {
        $types = [
            "bool",
            "null",
        ];

        $domiciledMortgage = self::checkTypes($domiciledMortgage, $types);

        $this->domiciledMortgage = $domiciledMortgage;
    }

}
