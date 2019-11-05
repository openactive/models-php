<?php

namespace OpenActive\Models\OA;

/**
 * 
 * ## **EARLY RELEASE NOTICE**
 * In order to expedite the OpenActive tooling work, this class has been added to the model for the purposes of testing.
 * IT IS SUBJECT TO CHANGE, as the [Dataset API Discovery specification](https://www.openactive.io/dataset-api-discovery/EditorsDraft/) evolves.
 * 
 * This type is derived from [WebAPI](https://pending.schema.org/WebAPI), which means that any of this type's properties within schema.org may also be used. Note however the properties on this page must be used in preference if a relevant property is available.
 *
 */
class WebAPI extends \OpenActive\BaseModel
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "WebAPI";
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
     * The description of the Dataset
     *
     * ```json
     * "description": "Near real-time availability and rich descriptions relating to the sessions and facilities available from {OrganisationName}, published using the OpenActive Modelling Specification 2.0."
     * ```
     *
     * @var string
     */
    protected $description;

    /**
     * Indicates the version and profiles of OpenActive Open Booking Specification with which this WebAPI conforms, by specifying these as URLs.
     *
     * ```json
     * "conformsTo": [
     *   "https://www.openactive.io/open-booking-api/1.0/#core"
     * ]
     * ```
     *
     * @var string[]
     */
    protected $conformsTo;

    /**
     * A link to documentation related to the Dataset, or a link to the OpenActive developer documentation if no Dataset-specific documentation is available.
     *
     * ```json
     * "documentation": "https://developer.openactive.io"
     * ```
     *
     * @var string
     */
    protected $documentation;

    /**
     * The Open API document associated with this version of the Open Booking API
     *
     * ```json
     * "endpointDescription": "https://www.openactive.io/open-booking-api/1.0/swagger.json"
     * ```
     *
     * @var string
     */
    protected $endpointDescription;

    /**
     * The base URL of the Open Booking API
     *
     * ```json
     * "endpointURL": "https://example.bookingsystem.com/api/openbooking"
     * ```
     *
     * @var string
     */
    protected $endpointURL;

    /**
     * The web page the broker uses to obtain access to the API, e.g. via a web form.
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
        $types = array(
            "string",
        );

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
        $types = array(
            "string",
        );

        $description = self::checkTypes($description, $types);

        $this->description = $description;
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
        $types = array(
            "string[]",
        );

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
        $types = array(
            "string",
        );

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
        $types = array(
            "string",
        );

        $endpointDescription = self::checkTypes($endpointDescription, $types);

        $this->endpointDescription = $endpointDescription;
    }

    /**
     * @return string
     */
    public function getEndpointURL()
    {
        return $this->endpointURL;
    }

    /**
     * @param string $endpointURL
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEndpointURL($endpointURL)
    {
        $types = array(
            "string",
        );

        $endpointURL = self::checkTypes($endpointURL, $types);

        $this->endpointURL = $endpointURL;
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
        $types = array(
            "string",
        );

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
        $types = array(
            "string",
        );

        $termsOfService = self::checkTypes($termsOfService, $types);

        $this->termsOfService = $termsOfService;
    }

}
