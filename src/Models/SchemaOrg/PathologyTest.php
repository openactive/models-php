<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class PathologyTest extends \OpenActive\Models\SchemaOrg\MedicalTest
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:PathologyTest";
    }

    public static function fieldList() {
        $fields = [
            "tissueSample" => "tissueSample",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The type of tissue sample required for the test.
     *
     *
     * @var string
     */
    protected $tissueSample;

    /**
     * @return string
     */
    public function getTissueSample()
    {
        return $this->tissueSample;
    }

    /**
     * @param string $tissueSample
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTissueSample($tissueSample)
    {
        $types = [
            "string",
        ];

        $tissueSample = self::checkTypes($tissueSample, $types);

        $this->tissueSample = $tissueSample;
    }

}
