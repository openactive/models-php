<?php

namespace OpenActive\Models\OA;

/**
 * [NOTICE: This is a beta class, and is highly likely to change in future versions of this library.] 
 * This type is derived from https://schema.org/Thing, which means that any of this type's properties within schema.org may also be used.
 *
 */
class TrustCertification extends \OpenActive\Models\SchemaOrg\Thing
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "beta:TrustCertification";
    }

    public static function fieldList() {
        $fields = [
            "certificationLevel" => "beta:certificationLevel",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * [NOTICE: This is a beta property, and is highly likely to change in future versions of this library.]
     * Property containing an array of CertificationLevels
     * 
     * If you are using this property, please join the discussion at proposal [#217](https://github.com/openactive/modelling-opportunity-data/issues/217).
     *
     *
     * @var \OpenActive\Models\OA\CertificationLevel
     */
    protected $certificationLevel;

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

}
