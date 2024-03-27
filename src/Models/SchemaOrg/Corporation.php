<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Corporation extends \OpenActive\Models\SchemaOrg\Organization
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Corporation";
    }

    public static function fieldList() {
        $fields = [
            "tickerSymbol" => "tickerSymbol",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The exchange traded instrument associated with a Corporation object. The tickerSymbol is expressed as an exchange and an instrument name separated by a space character. For the exchange component of the tickerSymbol attribute, we recommend using the controlled vocabulary of Market Identifier Codes (MIC) specified in ISO 15022.
     *
     *
     * @var string
     */
    protected $tickerSymbol;

    /**
     * @return string
     */
    public function getTickerSymbol()
    {
        return $this->tickerSymbol;
    }

    /**
     * @param string $tickerSymbol
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTickerSymbol($tickerSymbol)
    {
        $types = [
            "string",
        ];

        $tickerSymbol = self::checkTypes($tickerSymbol, $types);

        $this->tickerSymbol = $tickerSymbol;
    }

}
