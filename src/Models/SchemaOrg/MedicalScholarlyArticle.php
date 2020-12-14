<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MedicalScholarlyArticle extends \OpenActive\Models\SchemaOrg\ScholarlyArticle
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MedicalScholarlyArticle";
    }

    public static function fieldList() {
        $fields = [
            "publicationType" => "publicationType",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The type of the medical article, taken from the US NLM MeSH publication type catalog. See also [MeSH documentation](http://www.nlm.nih.gov/mesh/pubtypes.html).
     *
     *
     * @var string
     */
    protected $publicationType;

    /**
     * @return string
     */
    public function getPublicationType()
    {
        return $this->publicationType;
    }

    /**
     * @param string $publicationType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPublicationType($publicationType)
    {
        $types = [
            "string",
        ];

        $publicationType = self::checkTypes($publicationType, $types);

        $this->publicationType = $publicationType;
    }

}
