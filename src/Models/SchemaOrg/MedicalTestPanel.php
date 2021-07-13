<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MedicalTestPanel extends \OpenActive\Models\SchemaOrg\MedicalTest
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MedicalTestPanel";
    }

    public static function fieldList() {
        $fields = [
            "subTest" => "subTest",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A component test of the panel.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MedicalTest|string
     */
    protected $subTest;

    /**
     * @return \OpenActive\Models\SchemaOrg\MedicalTest|string
     */
    public function getSubTest()
    {
        return $this->subTest;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MedicalTest|string $subTest
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSubTest($subTest)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MedicalTest",
            "string",
        ];

        $subTest = self::checkTypes($subTest, $types);

        $this->subTest = $subTest;
    }

}
