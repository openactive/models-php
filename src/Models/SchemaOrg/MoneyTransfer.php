<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MoneyTransfer extends \OpenActive\Models\SchemaOrg\TransferAction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MoneyTransfer";
    }

    public static function fieldList() {
        $fields = [
            "beneficiaryBank" => "beneficiaryBank",
            "amount" => "amount",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A bank or bank’s branch, financial institution or international financial institution operating the beneficiary’s bank account or releasing funds for the beneficiary.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\BankOrCreditUnion
     */
    protected $beneficiaryBank;

    /**
     * The amount of money.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MonetaryAmount|string|Number|null
     */
    protected $amount;

    /**
     * @return string|\OpenActive\Models\SchemaOrg\BankOrCreditUnion
     */
    public function getBeneficiaryBank()
    {
        return $this->beneficiaryBank;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\BankOrCreditUnion $beneficiaryBank
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBeneficiaryBank($beneficiaryBank)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\BankOrCreditUnion",
        ];

        $beneficiaryBank = self::checkTypes($beneficiaryBank, $types);

        $this->beneficiaryBank = $beneficiaryBank;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MonetaryAmount|string|Number|null
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MonetaryAmount|string|Number|null $amount
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAmount($amount)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MonetaryAmount",
            "string",
            "Number",
            "null",
        ];

        $amount = self::checkTypes($amount, $types);

        $this->amount = $amount;
    }

}
