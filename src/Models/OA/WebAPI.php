<?php

namespace OpenActive\Models\OA;

/**
 * 
 * EARLY RELEASE NOTICE: This class represents a draft that is designed to inform the OpenActive specification work with implementation feedback. IT IS SUBJECT TO CHANGE, as the [Dataset API Discovery specification](https://openactive.io/dataset-api-discovery/EditorsDraft/) evolves.
 * 
 * This type is derived from https://pending.schema.org/WebAPI.
 *
 */
class WebAPI extends \OpenActive\BaseModel
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "WebAPI";
    }

    public static function fieldList() {
        $fields = [
            "name" => "name",
            "description" => "description",
            "authenticationAuthority" => "authenticationAuthority",
            "conformsTo" => "conformsTo",
            "documentation" => "documentation",
            "endpointDescription" => "endpointDescription",
            "endpointUrl" => "endpointUrl",
            "landingPage" => "landingPage",
            "termsOfService" => "termsOfService",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The name of the WebAPI
     *
     * ```json
     * "name": "Acme Leisure Sessions and Facilities"
     * ```
     *
     * @var string
     */
    protected $name;

    /**
     * A plain text description of the Dataset, which must not include HTML or other markup.
     *
     * ```json
     * "description": "Near real-time availability and rich descriptions relating to the sessions and facilities available from {OrganisationName}, published using the OpenActive Modelling Specification 2.0."
     * ```
     *
     * @var string
     */
    protected $description;

    /**
     * The location of the OpenID Provider that must be used to access the API.
     *
     * ```json
     * "authenticationAuthority": "https://auth.bookingsystem.com"
     * ```
     *
     * @var string
     */
    protected $authenticationAuthority;

    /**
     * Indicates the version and profiles of OpenActive Open Booking Specification with which this WebAPI conforms, by specifying these as URLs.
     *
     * ```json
     * "conformsTo": [
     *   "https://openactive.io/open-booking-api/1.0/#core"
     * ]
     * ```
     *
     * @var string[]
     */
    protected $conformsTo;

    /**
     * A link to documentation related to how to use the Open Booking API, or a link to the OpenActive developer documentation using `https://permalink.openactive.io/dataset-site/open-booking-api-documentation` if no system-specific documentation is available.
     *
     * ```json
     * "documentation": "https://permalink.openactive.io/dataset-site/open-booking-api-documentation"
     * ```
     *
     * @var string
     */
    protected $documentation;

    /**
     * The Open API document associated with this version of the Open Booking API
     *
     * ```json
     * "endpointDescription": "https://openactive.io/open-booking-api/1.0/swagger.json"
     * ```
     *
     * @var string
     */
    protected $endpointDescription;

    /**
     * The Base URI of this implementation of the Open Booking API
     *
     * ```json
     * "endpointUrl": "https://example.bookingsystem.com/api/openbooking"
     * ```
     *
     * @var string
     */
    protected $endpointUrl;

    /**
     * The URL of a web page that the Broker may use to obtain access to the API, e.g. via a web form.
     *
     * ```json
     * "landingPage": "https://exampleforms.com/get-me-an-api-access-key"
     * ```
     *
     * @var string
     */
    protected $landingPage;

    /**
     * A link to terms of service related to the use of this API.
     *
     * ```json
     * "termsOfService": "https://example.bookingsystem.com/terms"
     * ```
     *
     * @var string
     */
    protected $termsOfService;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setName($name)
    {
        $types = [
            "string",
        ];

        $name = self::checkTypes($name, $types);

        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDescription($description)
    {
        $types = [
            "string",
        ];

        $description = self::checkTypes($description, $types);

        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getAuthenticationAuthority()
    {
        return $this->authenticationAuthority;
    }

    /**
     * @param string $authenticationAuthority
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAuthenticationAuthority($authenticationAuthority)
    {
        $types = [
            "string",
        ];

        $authenticationAuthority = self::checkTypes($authenticationAuthority, $types);

        $this->authenticationAuthority = $authenticationAuthority;
    }

    /**
     * @return string[]
     */
    public function getConformsTo()
    {
        return $this->conformsTo;
    }

    /**
     * @param string[] $conformsTo
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setConformsTo($conformsTo)
    {
        $types = [
            "string[]",
        ];

        $conformsTo = self::checkTypes($conformsTo, $types);

        $this->conformsTo = $conformsTo;
    }

    /**
     * @return string
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * @param string $documentation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDocumentation($documentation)
    {
        $types = [
            "string",
        ];

        $documentation = self::checkTypes($documentation, $types);

        $this->documentation = $documentation;
    }

    /**
     * @return string
     */
    public function getEndpointDescription()
    {
        return $this->endpointDescription;
    }

    /**
     * @param string $endpointDescription
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEndpointDescription($endpointDescription)
    {
        $types = [
            "string",
        ];

        $endpointDescription = self::checkTypes($endpointDescription, $types);

        $this->endpointDescription = $endpointDescription;
    }

    /**
     * @return string
     */
    public function getEndpointUrl()
    {
        return $this->endpointUrl;
    }

    /**
     * @param string $endpointUrl
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEndpointUrl($endpointUrl)
    {
        $types = [
            "string",
        ];

        $endpointUrl = self::checkTypes($endpointUrl, $types);

        $this->endpointUrl = $endpointUrl;
    }

    /**
     * @return string
     */
    public function getLandingPage()
    {
        return $this->landingPage;
    }

    /**
     * @param string $landingPage
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLandingPage($landingPage)
    {
        $types = [
            "string",
        ];

        $landingPage = self::checkTypes($landingPage, $types);

        $this->landingPage = $landingPage;
    }

    /**
     * @return string
     */
    public function getTermsOfService()
    {
        return $this->termsOfService;
    }

    /**
     * @param string $termsOfService
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTermsOfService($termsOfService)
    {
        $types = [
            "string",
        ];

        $termsOfService = self::checkTypes($termsOfService, $types);

        $this->termsOfService = $termsOfService;
    }

}
