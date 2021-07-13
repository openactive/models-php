<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class DiagnosticLab extends \OpenActive\Models\SchemaOrg\MedicalOrganization
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:DiagnosticLab";
    }

    public static function fieldList() {
        $fields = [
            "availableTest" => "availableTest",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A diagnostic test or procedure offered by this lab.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MedicalTest|string
     */
    protected $availableTest;

    /**
     * @return \OpenActive\Models\SchemaOrg\MedicalTest|string
     */
    public function getAvailableTest()
    {
        return $this->availableTest;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MedicalTest|string $availableTest
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAvailableTest($availableTest)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MedicalTest",
            "string",
        ];

        $availableTest = self::checkTypes($availableTest, $types);

        $this->availableTest = $availableTest;
    }

}
