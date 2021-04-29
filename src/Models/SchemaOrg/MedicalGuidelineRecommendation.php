<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MedicalGuidelineRecommendation extends \OpenActive\Models\SchemaOrg\MedicalGuideline
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MedicalGuidelineRecommendation";
    }

    public static function fieldList() {
        $fields = [
            "recommendationStrength" => "recommendationStrength",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Strength of the guideline's recommendation (e.g. 'class I').
     *
     *
     * @var string
     */
    protected $recommendationStrength;

    /**
     * @return string
     */
    public function getRecommendationStrength()
    {
        return $this->recommendationStrength;
    }

    /**
     * @param string $recommendationStrength
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRecommendationStrength($recommendationStrength)
    {
        $types = [
            "string",
        ];

        $recommendationStrength = self::checkTypes($recommendationStrength, $types);

        $this->recommendationStrength = $recommendationStrength;
    }

}
