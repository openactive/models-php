<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ImagingTest extends \OpenActive\Models\SchemaOrg\MedicalTest
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ImagingTest";
    }

    public static function fieldList() {
        $fields = [
            "imagingTechnique" => "imagingTechnique",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Imaging technique used.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MedicalImagingTechnique|string
     */
    protected $imagingTechnique;

    /**
     * @return \OpenActive\Models\SchemaOrg\MedicalImagingTechnique|string
     */
    public function getImagingTechnique()
    {
        return $this->imagingTechnique;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MedicalImagingTechnique|string $imagingTechnique
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setImagingTechnique($imagingTechnique)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MedicalImagingTechnique",
            "string",
        ];

        $imagingTechnique = self::checkTypes($imagingTechnique, $types);

        $this->imagingTechnique = $imagingTechnique;
    }

}
