<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Protein extends \OpenActive\Models\SchemaOrg\BioChemEntity
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Protein";
    }

    public static function fieldList() {
        $fields = [
            "hasBioPolymerSequence" => "hasBioPolymerSequence",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A symbolic representation of a BioChemEntity. For example, a nucleotide sequence of a Gene or an amino acid sequence of a Protein.
     *
     *
     * @var string
     */
    protected $hasBioPolymerSequence;

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

}
