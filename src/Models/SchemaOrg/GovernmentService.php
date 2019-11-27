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
            "serviceOperator" => "serviceOperator",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The operating organization, if different from the provider.  This enables the representation of services that are provided by an organization, but operated by another organization like a subcontractor.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization
     */
    protected $serviceOperator;

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization
     */
    public function getServiceOperator()
    {
        return $this->serviceOperator;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization $serviceOperator
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setServiceOperator($serviceOperator)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Organization",
        );

        $serviceOperator = self::checkTypes($serviceOperator, $types);

        $this->serviceOperator = $serviceOperator;
    }

}
