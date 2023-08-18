<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class DefinedTerm extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:DefinedTerm";
    }

    public static function fieldList() {
        $fields = [
            "inDefinedTermSet" => "inDefinedTermSet",
            "termCode" => "termCode",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A [[DefinedTermSet]] that contains this term.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DefinedTermSet|string
     */
    protected $inDefinedTermSet;

    /**
     * A code that identifies this [[DefinedTerm]] within a [[DefinedTermSet]]
     *
     *
     * @var string
     */
    protected $termCode;

    /**
     * @return \OpenActive\Models\SchemaOrg\DefinedTermSet|string
     */
    public function getInDefinedTermSet()
    {
        return $this->inDefinedTermSet;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\DefinedTermSet|string $inDefinedTermSet
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setInDefinedTermSet($inDefinedTermSet)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\DefinedTermSet",
            "string",
        ];

        $inDefinedTermSet = self::checkTypes($inDefinedTermSet, $types);

        $this->inDefinedTermSet = $inDefinedTermSet;
    }

    /**
     * @return string
     */
    public function getTermCode()
    {
        return $this->termCode;
    }

    /**
     * @param string $termCode
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTermCode($termCode)
    {
        $types = [
            "string",
        ];

        $termCode = self::checkTypes($termCode, $types);

        $this->termCode = $termCode;
    }

}
