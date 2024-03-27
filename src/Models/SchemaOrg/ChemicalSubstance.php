<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ChemicalSubstance extends \OpenActive\Models\SchemaOrg\BioChemEntity
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ChemicalSubstance";
    }

    public static function fieldList() {
        $fields = [
            "chemicalRole" => "chemicalRole",
            "chemicalComposition" => "chemicalComposition",
            "potentialUse" => "potentialUse",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A role played by the BioChemEntity within a chemical context.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DefinedTerm|string
     */
    protected $chemicalRole;

    /**
     * The chemical composition describes the identity and relative ratio of the chemical elements that make up the substance.
     *
     *
     * @var string
     */
    protected $chemicalComposition;

    /**
     * Intended use of the BioChemEntity by humans.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DefinedTerm|string
     */
    protected $potentialUse;

    /**
     * @return \OpenActive\Models\SchemaOrg\DefinedTerm|string
     */
    public function getChemicalRole()
    {
        return $this->chemicalRole;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\DefinedTerm|string $chemicalRole
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setChemicalRole($chemicalRole)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\DefinedTerm",
            "string",
        ];

        $chemicalRole = self::checkTypes($chemicalRole, $types);

        $this->chemicalRole = $chemicalRole;
    }

    /**
     * @return string
     */
    public function getChemicalComposition()
    {
        return $this->chemicalComposition;
    }

    /**
     * @param string $chemicalComposition
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setChemicalComposition($chemicalComposition)
    {
        $types = [
            "string",
        ];

        $chemicalComposition = self::checkTypes($chemicalComposition, $types);

        $this->chemicalComposition = $chemicalComposition;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\DefinedTerm|string
     */
    public function getPotentialUse()
    {
        return $this->potentialUse;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\DefinedTerm|string $potentialUse
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPotentialUse($potentialUse)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\DefinedTerm",
            "string",
        ];

        $potentialUse = self::checkTypes($potentialUse, $types);

        $this->potentialUse = $potentialUse;
    }

}
