<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class InfectiousDisease extends \OpenActive\Models\SchemaOrg\MedicalCondition
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:InfectiousDisease";
    }

    public static function fieldList() {
        $fields = [
            "transmissionMethod" => "transmissionMethod",
            "infectiousAgentClass" => "infectiousAgentClass",
            "infectiousAgent" => "infectiousAgent",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * How the disease spreads, either as a route or vector, for example 'direct contact', 'Aedes aegypti', etc.
     *
     *
     * @var string
     */
    protected $transmissionMethod;

    /**
     * The class of infectious agent (bacteria, prion, etc.) that causes the disease.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\InfectiousAgentClass
     */
    protected $infectiousAgentClass;

    /**
     * The actual infectious agent, such as a specific bacterium.
     *
     *
     * @var string
     */
    protected $infectiousAgent;

    /**
     * @return string
     */
    public function getTransmissionMethod()
    {
        return $this->transmissionMethod;
    }

    /**
     * @param string $transmissionMethod
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTransmissionMethod($transmissionMethod)
    {
        $types = [
            "string",
        ];

        $transmissionMethod = self::checkTypes($transmissionMethod, $types);

        $this->transmissionMethod = $transmissionMethod;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\InfectiousAgentClass
     */
    public function getInfectiousAgentClass()
    {
        return $this->infectiousAgentClass;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\InfectiousAgentClass $infectiousAgentClass
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setInfectiousAgentClass($infectiousAgentClass)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\InfectiousAgentClass",
        ];

        $infectiousAgentClass = self::checkTypes($infectiousAgentClass, $types);

        $this->infectiousAgentClass = $infectiousAgentClass;
    }

    /**
     * @return string
     */
    public function getInfectiousAgent()
    {
        return $this->infectiousAgent;
    }

    /**
     * @param string $infectiousAgent
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setInfectiousAgent($infectiousAgent)
    {
        $types = [
            "string",
        ];

        $infectiousAgent = self::checkTypes($infectiousAgent, $types);

        $this->infectiousAgent = $infectiousAgent;
    }

}
