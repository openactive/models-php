<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class APIReference extends \OpenActive\Models\SchemaOrg\TechArticle
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:APIReference";
    }

    /**
     * Library file name e.g., mscorlib.dll, system.web.dll.
     *
     *
     * @var string
     */
    protected $executableLibraryName;

    /**
     * Associated product/technology version. e.g., .NET Framework 4.5.
     *
     *
     * @var string
     */
    protected $assemblyVersion;

    /**
     * Indicates whether API is managed or unmanaged.
     *
     *
     * @var string
     */
    protected $programmingModel;

    /**
     * Library file name e.g., mscorlib.dll, system.web.dll.
     *
     *
     * @var string
     */
    protected $assembly;

    /**
     * Type of app development: phone, Metro style, desktop, XBox, etc.
     *
     *
     * @var string
     */
    protected $targetPlatform;

    /**
     * @return string
     */
    public function getExecutableLibraryName()
    {
        return $this->executableLibraryName;
    }

    /**
     * @param string $executableLibraryName
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setExecutableLibraryName($executableLibraryName)
    {
        $types = array(
            "string",
        );

        $executableLibraryName = self::checkTypes($executableLibraryName, $types);

        $this->executableLibraryName = $executableLibraryName;
    }

    /**
     * @return string
     */
    public function getAssemblyVersion()
    {
        return $this->assemblyVersion;
    }

    /**
     * @param string $assemblyVersion
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAssemblyVersion($assemblyVersion)
    {
        $types = array(
            "string",
        );

        $assemblyVersion = self::checkTypes($assemblyVersion, $types);

        $this->assemblyVersion = $assemblyVersion;
    }

    /**
     * @return string
     */
    public function getProgrammingModel()
    {
        return $this->programmingModel;
    }

    /**
     * @param string $programmingModel
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setProgrammingModel($programmingModel)
    {
        $types = array(
            "string",
        );

        $programmingModel = self::checkTypes($programmingModel, $types);

        $this->programmingModel = $programmingModel;
    }

    /**
     * @return string
     */
    public function getAssembly()
    {
        return $this->assembly;
    }

    /**
     * @param string $assembly
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAssembly($assembly)
    {
        $types = array(
            "string",
        );

        $assembly = self::checkTypes($assembly, $types);

        $this->assembly = $assembly;
    }

    /**
     * @return string
     */
    public function getTargetPlatform()
    {
        return $this->targetPlatform;
    }

    /**
     * @param string $targetPlatform
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTargetPlatform($targetPlatform)
    {
        $types = array(
            "string",
        );

        $targetPlatform = self::checkTypes($targetPlatform, $types);

        $this->targetPlatform = $targetPlatform;
    }

}
