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
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A bank or bank’s branch, financial institution or international financial institution operating the beneficiary’s bank account or releasing funds for the beneficiary
     *
     *
     * @var \OpenActive\Models\SchemaOrg\BankOrCreditUnion|string
     */
    protected $beneficiaryBank;

    /**
     * @return \OpenActive\Models\SchemaOrg\BankOrCreditUnion|string
     */
    public function getBeneficiaryBank()
    {
        return $this->beneficiaryBank;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\BankOrCreditUnion|string $beneficiaryBank
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBeneficiaryBank($beneficiaryBank)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\BankOrCreditUnion",
            "string",
        );

        $beneficiaryBank = self::checkTypes($beneficiaryBank, $types);

        $this->beneficiaryBank = $beneficiaryBank;
    }

}
