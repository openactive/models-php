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
            "termCode" => "termCode",
            "inDefinedTermSet" => "inDefinedTermSet",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A code that identifies this [[DefinedTerm]] within a [[DefinedTermSet]]
     *
     *
     * @var string
     */
    protected $termCode;

    /**
     * A [[DefinedTermSet]] that contains this term.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\DefinedTermSet
     */
    protected $inDefinedTermSet;

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

    /**
     * @return string|\OpenActive\Models\SchemaOrg\DefinedTermSet
     */
    public function getInDefinedTermSet()
    {
        return $this->inDefinedTermSet;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\DefinedTermSet $inDefinedTermSet
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setInDefinedTermSet($inDefinedTermSet)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\DefinedTermSet",
        ];

        $inDefinedTermSet = self::checkTypes($inDefinedTermSet, $types);

        $this->inDefinedTermSet = $inDefinedTermSet;
    }

}
