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
    static public function getType()
    {
        return "schema:GovernmentService";
    }

    /**
     * The operating organization, if different from the provider.  This enables the representation of services that are provided by an organization, but operated by another organization like a subcontractor.
     *
     *
     * @var Organization
     */
    protected $serviceOperator;

    /**
     * @return Organization
     */
    public function getServiceOperator()
    {
        return $this->serviceOperator;
    }

    /**
     * @param Organization $serviceOperator
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setServiceOperator($serviceOperator)
    {
        $types = array(
            "Organization",
        );

        $serviceOperator = self::checkTypes($serviceOperator, $types);

        $this->serviceOperator = $serviceOperator;
    }

}
