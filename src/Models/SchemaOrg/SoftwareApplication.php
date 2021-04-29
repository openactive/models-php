<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class SoftwareApplication extends \OpenActive\Models\SchemaOrg\CreativeWork
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:SoftwareApplication";
    }

    public static function fieldList() {
        $fields = [
            "applicationSubCategory" => "applicationSubCategory",
            "screenshot" => "screenshot",
            "availableOnDevice" => "availableOnDevice",
            "storageRequirements" => "storageRequirements",
            "applicationCategory" => "applicationCategory",
            "softwareHelp" => "softwareHelp",
            "fileSize" => "fileSize",
            "downloadUrl" => "downloadUrl",
            "featureList" => "featureList",
            "device" => "device",
            "operatingSystem" => "operatingSystem",
            "requirements" => "requirements",
            "installUrl" => "installUrl",
            "processorRequirements" => "processorRequirements",
            "countriesNotSupported" => "countriesNotSupported",
            "softwareVersion" => "softwareVersion",
            "releaseNotes" => "releaseNotes",
            "applicationSuite" => "applicationSuite",
            "supportingData" => "supportingData",
            "softwareRequirements" => "softwareRequirements",
            "softwareAddOn" => "softwareAddOn",
            "permissions" => "permissions",
            "countriesSupported" => "countriesSupported",
            "memoryRequirements" => "memoryRequirements",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Subcategory of the application, e.g. 'Arcade Game'.
     *
     *
     * @var string
     */
    protected $applicationSubCategory;

    /**
     * A link to a screenshot image of the app.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\ImageObject
     */
    protected $screenshot;

    /**
     * Device required to run the application. Used in cases where a specific make/model is required to run the application.
     *
     *
     * @var string
     */
    protected $availableOnDevice;

    /**
     * Storage requirements (free space required).
     *
     *
     * @var string
     */
    protected $storageRequirements;

    /**
     * Type of software application, e.g. 'Game, Multimedia'.
     *
     *
     * @var string
     */
    protected $applicationCategory;

    /**
     * Software application help.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWork
     */
    protected $softwareHelp;

    /**
     * Size of the application / package (e.g. 18MB). In the absence of a unit (MB, KB etc.), KB will be assumed.
     *
     *
     * @var string
     */
    protected $fileSize;

    /**
     * If the file can be downloaded, URL to download the binary.
     *
     *
     * @var string
     */
    protected $downloadUrl;

    /**
     * Features or modules provided by this application (and possibly required by other applications).
     *
     *
     * @var string
     */
    protected $featureList;

    /**
     * Device required to run the application. Used in cases where a specific make/model is required to run the application.
     *
     *
     * @var string
     */
    protected $device;

    /**
     * Operating systems supported (Windows 7, OSX 10.6, Android 1.6).
     *
     *
     * @var string
     */
    protected $operatingSystem;

    /**
     * Component dependency requirements for application. This includes runtime environments and shared libraries that are not included in the application distribution package, but required to run the application (Examples: DirectX, Java or .NET runtime).
     *
     *
     * @var string
     */
    protected $requirements;

    /**
     * URL at which the app may be installed, if different from the URL of the item.
     *
     *
     * @var string
     */
    protected $installUrl;

    /**
     * Processor architecture required to run the application (e.g. IA64).
     *
     *
     * @var string
     */
    protected $processorRequirements;

    /**
     * Countries for which the application is not supported. You can also provide the two-letter ISO 3166-1 alpha-2 country code.
     *
     *
     * @var string
     */
    protected $countriesNotSupported;

    /**
     * Version of the software instance.
     *
     *
     * @var string
     */
    protected $softwareVersion;

    /**
     * Description of what changed in this version.
     *
     *
     * @var string
     */
    protected $releaseNotes;

    /**
     * The name of the application suite to which the application belongs (e.g. Excel belongs to Office).
     *
     *
     * @var string
     */
    protected $applicationSuite;

    /**
     * Supporting data for a SoftwareApplication.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DataFeed
     */
    protected $supportingData;

    /**
     * Component dependency requirements for application. This includes runtime environments and shared libraries that are not included in the application distribution package, but required to run the application (Examples: DirectX, Java or .NET runtime).
     *
     *
     * @var string
     */
    protected $softwareRequirements;

    /**
     * Additional content for a software application.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\SoftwareApplication
     */
    protected $softwareAddOn;

    /**
     * Permission(s) required to run the app (for example, a mobile app may require full internet access or may run only on wifi).
     *
     *
     * @var string
     */
    protected $permissions;

    /**
     * Countries for which the application is supported. You can also provide the two-letter ISO 3166-1 alpha-2 country code.
     *
     *
     * @var string
     */
    protected $countriesSupported;

    /**
     * Minimum memory requirements.
     *
     *
     * @var string
     */
    protected $memoryRequirements;

    /**
     * @return string
     */
    public function getApplicationSubCategory()
    {
        return $this->applicationSubCategory;
    }

    /**
     * @param string $applicationSubCategory
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setApplicationSubCategory($applicationSubCategory)
    {
        $types = [
            "string",
        ];

        $applicationSubCategory = self::checkTypes($applicationSubCategory, $types);

        $this->applicationSubCategory = $applicationSubCategory;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\ImageObject
     */
    public function getScreenshot()
    {
        return $this->screenshot;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\ImageObject $screenshot
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setScreenshot($screenshot)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\ImageObject",
        ];

        $screenshot = self::checkTypes($screenshot, $types);

        $this->screenshot = $screenshot;
    }

    /**
     * @return string
     */
    public function getAvailableOnDevice()
    {
        return $this->availableOnDevice;
    }

    /**
     * @param string $availableOnDevice
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAvailableOnDevice($availableOnDevice)
    {
        $types = [
            "string",
        ];

        $availableOnDevice = self::checkTypes($availableOnDevice, $types);

        $this->availableOnDevice = $availableOnDevice;
    }

    /**
     * @return string
     */
    public function getStorageRequirements()
    {
        return $this->storageRequirements;
    }

    /**
     * @param string $storageRequirements
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setStorageRequirements($storageRequirements)
    {
        $types = [
            "string",
        ];

        $storageRequirements = self::checkTypes($storageRequirements, $types);

        $this->storageRequirements = $storageRequirements;
    }

    /**
     * @return string
     */
    public function getApplicationCategory()
    {
        return $this->applicationCategory;
    }

    /**
     * @param string $applicationCategory
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setApplicationCategory($applicationCategory)
    {
        $types = [
            "string",
        ];

        $applicationCategory = self::checkTypes($applicationCategory, $types);

        $this->applicationCategory = $applicationCategory;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\CreativeWork
     */
    public function getSoftwareHelp()
    {
        return $this->softwareHelp;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CreativeWork $softwareHelp
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSoftwareHelp($softwareHelp)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\CreativeWork",
        ];

        $softwareHelp = self::checkTypes($softwareHelp, $types);

        $this->softwareHelp = $softwareHelp;
    }

    /**
     * @return string
     */
    public function getFileSize()
    {
        return $this->fileSize;
    }

    /**
     * @param string $fileSize
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFileSize($fileSize)
    {
        $types = [
            "string",
        ];

        $fileSize = self::checkTypes($fileSize, $types);

        $this->fileSize = $fileSize;
    }

    /**
     * @return string
     */
    public function getDownloadUrl()
    {
        return $this->downloadUrl;
    }

    /**
     * @param string $downloadUrl
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDownloadUrl($downloadUrl)
    {
        $types = [
            "string",
        ];

        $downloadUrl = self::checkTypes($downloadUrl, $types);

        $this->downloadUrl = $downloadUrl;
    }

    /**
     * @return string
     */
    public function getFeatureList()
    {
        return $this->featureList;
    }

    /**
     * @param string $featureList
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFeatureList($featureList)
    {
        $types = [
            "string",
        ];

        $featureList = self::checkTypes($featureList, $types);

        $this->featureList = $featureList;
    }

    /**
     * @return string
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * @param string $device
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDevice($device)
    {
        $types = [
            "string",
        ];

        $device = self::checkTypes($device, $types);

        $this->device = $device;
    }

    /**
     * @return string
     */
    public function getOperatingSystem()
    {
        return $this->operatingSystem;
    }

    /**
     * @param string $operatingSystem
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOperatingSystem($operatingSystem)
    {
        $types = [
            "string",
        ];

        $operatingSystem = self::checkTypes($operatingSystem, $types);

        $this->operatingSystem = $operatingSystem;
    }

    /**
     * @return string
     */
    public function getRequirements()
    {
        return $this->requirements;
    }

    /**
     * @param string $requirements
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRequirements($requirements)
    {
        $types = [
            "string",
        ];

        $requirements = self::checkTypes($requirements, $types);

        $this->requirements = $requirements;
    }

    /**
     * @return string
     */
    public function getInstallUrl()
    {
        return $this->installUrl;
    }

    /**
     * @param string $installUrl
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setInstallUrl($installUrl)
    {
        $types = [
            "string",
        ];

        $installUrl = self::checkTypes($installUrl, $types);

        $this->installUrl = $installUrl;
    }

    /**
     * @return string
     */
    public function getProcessorRequirements()
    {
        return $this->processorRequirements;
    }

    /**
     * @param string $processorRequirements
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setProcessorRequirements($processorRequirements)
    {
        $types = [
            "string",
        ];

        $processorRequirements = self::checkTypes($processorRequirements, $types);

        $this->processorRequirements = $processorRequirements;
    }

    /**
     * @return string
     */
    public function getCountriesNotSupported()
    {
        return $this->countriesNotSupported;
    }

    /**
     * @param string $countriesNotSupported
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCountriesNotSupported($countriesNotSupported)
    {
        $types = [
            "string",
        ];

        $countriesNotSupported = self::checkTypes($countriesNotSupported, $types);

        $this->countriesNotSupported = $countriesNotSupported;
    }

    /**
     * @return string
     */
    public function getSoftwareVersion()
    {
        return $this->softwareVersion;
    }

    /**
     * @param string $softwareVersion
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSoftwareVersion($softwareVersion)
    {
        $types = [
            "string",
        ];

        $softwareVersion = self::checkTypes($softwareVersion, $types);

        $this->softwareVersion = $softwareVersion;
    }

    /**
     * @return string
     */
    public function getReleaseNotes()
    {
        return $this->releaseNotes;
    }

    /**
     * @param string $releaseNotes
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setReleaseNotes($releaseNotes)
    {
        $types = [
            "string",
        ];

        $releaseNotes = self::checkTypes($releaseNotes, $types);

        $this->releaseNotes = $releaseNotes;
    }

    /**
     * @return string
     */
    public function getApplicationSuite()
    {
        return $this->applicationSuite;
    }

    /**
     * @param string $applicationSuite
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setApplicationSuite($applicationSuite)
    {
        $types = [
            "string",
        ];

        $applicationSuite = self::checkTypes($applicationSuite, $types);

        $this->applicationSuite = $applicationSuite;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\DataFeed
     */
    public function getSupportingData()
    {
        return $this->supportingData;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\DataFeed $supportingData
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSupportingData($supportingData)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\DataFeed",
        ];

        $supportingData = self::checkTypes($supportingData, $types);

        $this->supportingData = $supportingData;
    }

    /**
     * @return string
     */
    public function getSoftwareRequirements()
    {
        return $this->softwareRequirements;
    }

    /**
     * @param string $softwareRequirements
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSoftwareRequirements($softwareRequirements)
    {
        $types = [
            "string",
        ];

        $softwareRequirements = self::checkTypes($softwareRequirements, $types);

        $this->softwareRequirements = $softwareRequirements;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\SoftwareApplication
     */
    public function getSoftwareAddOn()
    {
        return $this->softwareAddOn;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\SoftwareApplication $softwareAddOn
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSoftwareAddOn($softwareAddOn)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\SoftwareApplication",
        ];

        $softwareAddOn = self::checkTypes($softwareAddOn, $types);

        $this->softwareAddOn = $softwareAddOn;
    }

    /**
     * @return string
     */
    public function getPermissions()
    {
        return $this->permissions;
    }

    /**
     * @param string $permissions
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPermissions($permissions)
    {
        $types = [
            "string",
        ];

        $permissions = self::checkTypes($permissions, $types);

        $this->permissions = $permissions;
    }

    /**
     * @return string
     */
    public function getCountriesSupported()
    {
        return $this->countriesSupported;
    }

    /**
     * @param string $countriesSupported
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCountriesSupported($countriesSupported)
    {
        $types = [
            "string",
        ];

        $countriesSupported = self::checkTypes($countriesSupported, $types);

        $this->countriesSupported = $countriesSupported;
    }

    /**
     * @return string
     */
    public function getMemoryRequirements()
    {
        return $this->memoryRequirements;
    }

    /**
     * @param string $memoryRequirements
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMemoryRequirements($memoryRequirements)
    {
        $types = [
            "string",
        ];

        $memoryRequirements = self::checkTypes($memoryRequirements, $types);

        $this->memoryRequirements = $memoryRequirements;
    }

}
