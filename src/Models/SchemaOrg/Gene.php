<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Gene extends \OpenActive\Models\SchemaOrg\BioChemEntity
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Gene";
    }

    public static function fieldList() {
        $fields = [
            "expressedIn" => "expressedIn",
            "hasBioPolymerSequence" => "hasBioPolymerSequence",
            "encodesBioChemEntity" => "encodesBioChemEntity",
            "alternativeOf" => "alternativeOf",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Tissue, organ, biological sample, etc in which activity of this gene has been observed experimentally. For example brain, digestive system.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\AnatomicalStructure|\OpenActive\Models\SchemaOrg\AnatomicalSystem|\OpenActive\Models\SchemaOrg\DefinedTerm|\OpenActive\Models\SchemaOrg\BioChemEntity|string
     */
    protected $expressedIn;

    /**
     * A symbolic representation of a BioChemEntity. For example, a nucleotide sequence of a Gene or an amino acid sequence of a Protein.
     *
     *
     * @var string
     */
    protected $hasBioPolymerSequence;

    /**
     * Another BioChemEntity encoded by this one. 
     *
     *
     * @var \OpenActive\Models\SchemaOrg\BioChemEntity|string
     */
    protected $encodesBioChemEntity;

    /**
     * Another gene which is a variation of this one.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Gene|string
     */
    protected $alternativeOf;

    /**
     * @return \OpenActive\Models\SchemaOrg\AnatomicalStructure|\OpenActive\Models\SchemaOrg\AnatomicalSystem|\OpenActive\Models\SchemaOrg\DefinedTerm|\OpenActive\Models\SchemaOrg\BioChemEntity|string
     */
    public function getExpressedIn()
    {
        return $this->expressedIn;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\AnatomicalStructure|\OpenActive\Models\SchemaOrg\AnatomicalSystem|\OpenActive\Models\SchemaOrg\DefinedTerm|\OpenActive\Models\SchemaOrg\BioChemEntity|string $expressedIn
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setExpressedIn($expressedIn)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\AnatomicalStructure",
            "\OpenActive\Models\SchemaOrg\AnatomicalSystem",
            "\OpenActive\Models\SchemaOrg\DefinedTerm",
            "\OpenActive\Models\SchemaOrg\BioChemEntity",
            "string",
        ];

        $expressedIn = self::checkTypes($expressedIn, $types);

        $this->expressedIn = $expressedIn;
    }

    /**
     * @return string
     */
    public function getHasBioPolymerSequence()
    {
        return $this->hasBioPolymerSequence;
    }

    /**
     * @param string $hasBioPolymerSequence
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHasBioPolymerSequence($hasBioPolymerSequence)
    {
        $types = [
            "string",
        ];

        $hasBioPolymerSequence = self::checkTypes($hasBioPolymerSequence, $types);

        $this->hasBioPolymerSequence = $hasBioPolymerSequence;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\BioChemEntity|string
     */
    public function getEncodesBioChemEntity()
    {
        return $this->encodesBioChemEntity;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\BioChemEntity|string $encodesBioChemEntity
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEncodesBioChemEntity($encodesBioChemEntity)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\BioChemEntity",
            "string",
        ];

        $encodesBioChemEntity = self::checkTypes($encodesBioChemEntity, $types);

        $this->encodesBioChemEntity = $encodesBioChemEntity;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Gene|string
     */
    public function getAlternativeOf()
    {
        return $this->alternativeOf;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Gene|string $alternativeOf
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAlternativeOf($alternativeOf)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Gene",
            "string",
        ];

        $alternativeOf = self::checkTypes($alternativeOf, $types);

        $this->alternativeOf = $alternativeOf;
    }

}
