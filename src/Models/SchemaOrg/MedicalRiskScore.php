<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MedicalRiskScore extends \OpenActive\Models\SchemaOrg\MedicalRiskEstimator
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MedicalRiskScore";
    }

    public static function fieldList() {
        $fields = [
            "algorithm" => "algorithm",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The algorithm or rules to follow to compute the score.
     *
     *
     * @var string
     */
    protected $algorithm;

    /**
     * @return string
     */
    public function getAlgorithm()
    {
        return $this->algorithm;
    }

    /**
     * @param string $algorithm
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAlgorithm($algorithm)
    {
        $types = [
            "string",
        ];

        $algorithm = self::checkTypes($algorithm, $types);

        $this->algorithm = $algorithm;
    }

}
