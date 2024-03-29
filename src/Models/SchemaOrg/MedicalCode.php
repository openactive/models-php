<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MedicalCode extends \OpenActive\Models\SchemaOrg\MedicalIntangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MedicalCode";
    }

    public static function fieldList() {
        $fields = [
            "codeValue" => "codeValue",
            "codingSystem" => "codingSystem",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A short textual code that uniquely identifies the value.
     *
     *
     * @var string
     */
    protected $codeValue;

    /**
     * The coding system, e.g. 'ICD-10'.
     *
     *
     * @var string
     */
    protected $codingSystem;

    /**
     * @return string
     */
    public function getCodeValue()
    {
        return $this->codeValue;
    }

    /**
     * @param string $codeValue
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCodeValue($codeValue)
    {
        $types = [
            "string",
        ];

        $codeValue = self::checkTypes($codeValue, $types);

        $this->codeValue = $codeValue;
    }

    /**
     * @return string
     */
    public function getCodingSystem()
    {
        return $this->codingSystem;
    }

    /**
     * @param string $codingSystem
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCodingSystem($codingSystem)
    {
        $types = [
            "string",
        ];

        $codingSystem = self::checkTypes($codingSystem, $types);

        $this->codingSystem = $codingSystem;
    }

}
