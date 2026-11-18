<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MolecularEntity extends \OpenActive\Models\SchemaOrg\BioChemEntity
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MolecularEntity";
    }

    public static function fieldList() {
        $fields = [
            "chemicalRole" => "chemicalRole",
            "inChI" => "inChI",
            "inChIKey" => "inChIKey",
            "iupacName" => "iupacName",
            "molecularFormula" => "molecularFormula",
            "molecularWeight" => "molecularWeight",
            "monoisotopicMolecularWeight" => "monoisotopicMolecularWeight",
            "potentialUse" => "potentialUse",
            "smiles" => "smiles",
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
     * Non-proprietary identifier for molecular entity that can be used in printed and electronic data sources thus enabling easier linking of diverse data compilations.
     *
     *
     * @var string
     */
    protected $inChI;

    /**
     * InChIKey is a hashed version of the full InChI (using the SHA-256 algorithm).
     *
     *
     * @var string
     */
    protected $inChIKey;

    /**
     * Systematic method of naming chemical compounds as recommended by the International Union of Pure and Applied Chemistry (IUPAC).
     *
     *
     * @var string
     */
    protected $iupacName;

    /**
     * The empirical formula is the simplest whole number ratio of all the atoms in a molecule.
     *
     *
     * @var string
     */
    protected $molecularFormula;

    /**
     * This is the molecular weight of the entity being described, not of the parent. Units should be included in the form '&lt;Number&gt; &lt;unit&gt;', for example '12 amu' or as '&lt;QuantitativeValue&gt;.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    protected $molecularWeight;

    /**
     * The monoisotopic mass is the sum of the masses of the atoms in a molecule using the unbound, ground-state, rest mass of the principal (most abundant) isotope for each element instead of the isotopic average mass. Please include the units in the form '&lt;Number&gt; &lt;unit&gt;', for example '770.230488 g/mol' or as '&lt;QuantitativeValue&gt;.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    protected $monoisotopicMolecularWeight;

    /**
     * Intended use of the BioChemEntity by humans.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DefinedTerm|string
     */
    protected $potentialUse;

    /**
     * A specification in form of a line notation for describing the structure of chemical species using short ASCII strings.  Double bond stereochemistry \ indicators may need to be escaped in the string in formats where the backslash is an escape character.
     *
     *
     * @var string
     */
    protected $smiles;

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
    public function getInChI()
    {
        return $this->inChI;
    }

    /**
     * @param string $inChI
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setInChI($inChI)
    {
        $types = [
            "string",
        ];

        $inChI = self::checkTypes($inChI, $types);

        $this->inChI = $inChI;
    }

    /**
     * @return string
     */
    public function getInChIKey()
    {
        return $this->inChIKey;
    }

    /**
     * @param string $inChIKey
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setInChIKey($inChIKey)
    {
        $types = [
            "string",
        ];

        $inChIKey = self::checkTypes($inChIKey, $types);

        $this->inChIKey = $inChIKey;
    }

    /**
     * @return string
     */
    public function getIupacName()
    {
        return $this->iupacName;
    }

    /**
     * @param string $iupacName
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIupacName($iupacName)
    {
        $types = [
            "string",
        ];

        $iupacName = self::checkTypes($iupacName, $types);

        $this->iupacName = $iupacName;
    }

    /**
     * @return string
     */
    public function getMolecularFormula()
    {
        return $this->molecularFormula;
    }

    /**
     * @param string $molecularFormula
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMolecularFormula($molecularFormula)
    {
        $types = [
            "string",
        ];

        $molecularFormula = self::checkTypes($molecularFormula, $types);

        $this->molecularFormula = $molecularFormula;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    public function getMolecularWeight()
    {
        return $this->molecularWeight;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|string $molecularWeight
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMolecularWeight($molecularWeight)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
        ];

        $molecularWeight = self::checkTypes($molecularWeight, $types);

        $this->molecularWeight = $molecularWeight;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    public function getMonoisotopicMolecularWeight()
    {
        return $this->monoisotopicMolecularWeight;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|string $monoisotopicMolecularWeight
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMonoisotopicMolecularWeight($monoisotopicMolecularWeight)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
        ];

        $monoisotopicMolecularWeight = self::checkTypes($monoisotopicMolecularWeight, $types);

        $this->monoisotopicMolecularWeight = $monoisotopicMolecularWeight;
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

    /**
     * @return string
     */
    public function getSmiles()
    {
        return $this->smiles;
    }

    /**
     * @param string $smiles
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSmiles($smiles)
    {
        $types = [
            "string",
        ];

        $smiles = self::checkTypes($smiles, $types);

        $this->smiles = $smiles;
    }

}
