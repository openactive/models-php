<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class WebSite extends \OpenActive\Models\SchemaOrg\CreativeWork
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:WebSite";
    }

    public static function fieldList() {
        $fields = [
            "issn" => "issn",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The International Standard Serial Number (ISSN) that identifies this serial publication. You can repeat this property to identify different formats of, or the linking ISSN (ISSN-L) for, this serial publication.
     *
     *
     * @var string
     */
    protected $issn;

    /**
     * @return string
     */
    public function getIssn()
    {
        return $this->issn;
    }

    /**
     * @param string $issn
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIssn($issn)
    {
        $types = array(
            "string",
        );

        $issn = self::checkTypes($issn, $types);

        $this->issn = $issn;
    }

}
