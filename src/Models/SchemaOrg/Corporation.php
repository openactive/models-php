<?php

namespace OpenActive\Models\SchemaOrg;

/**
 * [NOTICE: This is a beta class, and is highly likely to change in future versions of this library.].
 * This type is derived from [Organization](https://schema.org/Organization), which means that any of this type's properties within schema.org may also be used. Note however the properties on this page must be used in preference if a relevant property is available.
 *
 */
class Corporation extends \OpenActive\Models\SchemaOrg\Organization
{
    /**
     * The exchange traded instrument associated with a Corporation object. The tickerSymbol is expressed as an exchange and an instrument name separated by a space character. For the exchange component of the tickerSymbol attribute, we recommend using the controlled vocabulary of Market Identifier Codes (MIC) specified in ISO15022.
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
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setTickerSymbol($tickerSymbol)
    {
        $types = array(
            "string",
        );

        $tickerSymbol = self::checkTypes($tickerSymbol, $types);

        $this->tickerSymbol = $tickerSymbol;
    }

}
