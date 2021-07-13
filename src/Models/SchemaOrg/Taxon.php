<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Taxon extends \OpenActive\Models\SchemaOrg\Thing
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Taxon";
    }

    public static function fieldList() {
        $fields = [
            "hasDefinedTerm" => "hasDefinedTerm",
            "childTaxon" => "childTaxon",
            "parentTaxon" => "parentTaxon",
            "taxonRank" => "taxonRank",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A Defined Term contained in this term set.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DefinedTerm|string
     */
    protected $hasDefinedTerm;

    /**
     * Closest child taxa of the taxon in question.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Taxon|string
     */
    protected $childTaxon;

    /**
     * Closest parent taxon of the taxon in question.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\Taxon
     */
    protected $parentTaxon;

    /**
     * The taxonomic rank of this taxon given preferably as a URI from a controlled vocabulary – (typically the ranks from TDWG TaxonRank ontology or equivalent Wikidata URIs).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\PropertyValue|string
     */
    protected $taxonRank;

    /**
     * @return \OpenActive\Models\SchemaOrg\DefinedTerm|string
     */
    public function getHasDefinedTerm()
    {
        return $this->hasDefinedTerm;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\DefinedTerm|string $hasDefinedTerm
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHasDefinedTerm($hasDefinedTerm)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\DefinedTerm",
            "string",
        ];

        $hasDefinedTerm = self::checkTypes($hasDefinedTerm, $types);

        $this->hasDefinedTerm = $hasDefinedTerm;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Taxon|string
     */
    public function getChildTaxon()
    {
        return $this->childTaxon;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Taxon|string $childTaxon
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setChildTaxon($childTaxon)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Taxon",
            "string",
        ];

        $childTaxon = self::checkTypes($childTaxon, $types);

        $this->childTaxon = $childTaxon;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\Taxon
     */
    public function getParentTaxon()
    {
        return $this->parentTaxon;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\Taxon $parentTaxon
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setParentTaxon($parentTaxon)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\Taxon",
        ];

        $parentTaxon = self::checkTypes($parentTaxon, $types);

        $this->parentTaxon = $parentTaxon;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\PropertyValue|string
     */
    public function getTaxonRank()
    {
        return $this->taxonRank;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\PropertyValue|string $taxonRank
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTaxonRank($taxonRank)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\PropertyValue",
            "string",
        ];

        $taxonRank = self::checkTypes($taxonRank, $types);

        $this->taxonRank = $taxonRank;
    }

}
