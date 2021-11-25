<?php

namespace OpenActive\Models\OA;

/**
 * 
 * EARLY RELEASE NOTICE: This class represents a draft that is designed to inform the OpenActive specification work with implementation feedback. IT IS STILL SUBJECT TO CHANGE, as the [Customer Accounts proposal](https://github.com/openactive/customer-accounts) evolves.
 * 
 * This type is derived from https://schema.org/Permit, which means that any of this type's properties within schema.org may also be used.
 *
 */
class Entitlement extends \OpenActive\Models\SchemaOrg\Permit
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "Entitlement";
    }

    public static function fieldList() {
        $fields = [
            "entitlementType" => "entitlementType",
            "evidenceRequestAction" => "evidenceRequestAction",
            "validFrom" => "validFrom",
            "validUntil" => "validUntil",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * For the request, this is the value of the `@id` of the Concept being referenced. For the response, this the full Concept object including the `@id` and prefLabel.
     *
     * ```json
     * "entitlementType": {
     *   "@type": "Concept",
     *   "@id": "https://data.mcractive.com/openactive/entitlement-list#5e78bcbe-36db-425a-9064-bf96d09cc351",
     *   "prefLabel": "MCRactive Adult Resident",
     *   "inScheme": "https://data.mcractive.com/openactive/entitlement-list"
     * }
     * ```
     *
     * @var \OpenActive\Models\OA\Concept|string
     */
    protected $entitlementType;

    /**
     * Any evidence request associated with the entitlement.
     *
     *
     * @var \OpenActive\Models\OA\Action
     */
    protected $evidenceRequestAction;

    /**
     * The date the entitlement becomes valid. This must be in the past.
     *
     *
     * @var DateTime|null
     */
    protected $validFrom;

    /**
     * The date that the entitlement is no longer valid. This must be in the future.
     *
     *
     * @var DateTime|null
     */
    protected $validUntil;

    /**
     * @return \OpenActive\Models\OA\Concept|string
     */
    public function getEntitlementType()
    {
        return $this->entitlementType;
    }

    /**
     * @param \OpenActive\Models\OA\Concept|string $entitlementType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEntitlementType($entitlementType)
    {
        $types = [
            "\OpenActive\Models\OA\Concept",
            "string",
        ];

        $entitlementType = self::checkTypes($entitlementType, $types);

        $this->entitlementType = $entitlementType;
    }

    /**
     * @return \OpenActive\Models\OA\Action
     */
    public function getEvidenceRequestAction()
    {
        return $this->evidenceRequestAction;
    }

    /**
     * @param \OpenActive\Models\OA\Action $evidenceRequestAction
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEvidenceRequestAction($evidenceRequestAction)
    {
        $types = [
            "\OpenActive\Models\OA\Action",
        ];

        $evidenceRequestAction = self::checkTypes($evidenceRequestAction, $types);

        $this->evidenceRequestAction = $evidenceRequestAction;
    }

    /**
     * @return DateTime|null
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * @param DateTime|null $validFrom
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setValidFrom($validFrom)
    {
        $types = [
            "DateTime",
            "null",
        ];

        $validFrom = self::checkTypes($validFrom, $types);

        $this->validFrom = $validFrom;
    }

    /**
     * @return DateTime|null
     */
    public function getValidUntil()
    {
        return $this->validUntil;
    }

    /**
     * @param DateTime|null $validUntil
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setValidUntil($validUntil)
    {
        $types = [
            "DateTime",
            "null",
        ];

        $validUntil = self::checkTypes($validUntil, $types);

        $this->validUntil = $validUntil;
    }

}
