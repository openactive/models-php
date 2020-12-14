<?php

namespace OpenActive\Models\OA;

/**
 * [NOTICE: This is a beta class, and is highly likely to change in future versions of this library.].
 *
 */
class CertificationScheme extends \OpenActive\Models\SchemaOrg\Thing
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "beta:CertificationScheme";
    }

    public static function fieldList() {
        $fields = [
            "certificationLevel" => "beta:certificationLevel",
            "trustedCertificationSchemes" => "beta:trustedCertificationSchemes",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * [NOTICE: This is a beta field, and is highly likely to change in future versions of this library.]
     * Property containing an array of CertificationLevels
     * 
     * If you are using this property, please join the discussion at proposal [#217](https://github.com/openactive/modelling-opportunity-data/issues/217).
     *
     *
     * @var \OpenActive\Models\OA\CertificationLevel
     */
    protected $certificationLevel;

    /**
     * [NOTICE: This is a beta field, and is highly likely to change in future versions of this library.]
     * From within a CertificationScheme, points to other CertificationSchemes considered valid and trusted in order to allow the creation of a trust network.
     * 
     * If you are using this property, please join the discussion at proposal [#217](https://github.com/openactive/modelling-opportunity-data/issues/217).
     *
     *
     * @var string
     */
    protected $trustedCertificationSchemes;

    /**
     * @return \OpenActive\Models\OA\CertificationLevel
     */
    public function getCertificationLevel()
    {
        return $this->certificationLevel;
    }

    /**
     * @param \OpenActive\Models\OA\CertificationLevel $certificationLevel
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCertificationLevel($certificationLevel)
    {
        $types = [
            "\OpenActive\Models\OA\CertificationLevel",
        ];

        $certificationLevel = self::checkTypes($certificationLevel, $types);

        $this->certificationLevel = $certificationLevel;
    }

    /**
     * @return string
     */
    public function getTrustedCertificationSchemes()
    {
        return $this->trustedCertificationSchemes;
    }

    /**
     * @param string $trustedCertificationSchemes
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTrustedCertificationSchemes($trustedCertificationSchemes)
    {
        $types = [
            "string",
        ];

        $trustedCertificationSchemes = self::checkTypes($trustedCertificationSchemes, $types);

        $this->trustedCertificationSchemes = $trustedCertificationSchemes;
    }

}
