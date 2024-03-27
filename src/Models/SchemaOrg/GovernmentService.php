<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class GovernmentService extends \OpenActive\Models\SchemaOrg\Service
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:GovernmentService";
    }

    public static function fieldList() {
        $fields = [
            "jurisdiction" => "jurisdiction",
            "serviceOperator" => "serviceOperator",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Indicates a legal jurisdiction, e.g. of some legislation, or where some government service is based.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\AdministrativeArea|string
     */
    protected $jurisdiction;

    /**
     * The operating organization, if different from the provider.  This enables the representation of services that are provided by an organization, but operated by another organization like a subcontractor.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|string
     */
    protected $serviceOperator;

    /**
     * @return \OpenActive\Models\SchemaOrg\AdministrativeArea|string
     */
    public function getJurisdiction()
    {
        return $this->jurisdiction;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\AdministrativeArea|string $jurisdiction
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setJurisdiction($jurisdiction)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\AdministrativeArea",
            "string",
        ];

        $jurisdiction = self::checkTypes($jurisdiction, $types);

        $this->jurisdiction = $jurisdiction;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|string
     */
    public function getServiceOperator()
    {
        return $this->serviceOperator;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|string $serviceOperator
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setServiceOperator($serviceOperator)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "string",
        ];

        $serviceOperator = self::checkTypes($serviceOperator, $types);

        $this->serviceOperator = $serviceOperator;
    }

}
