<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class SoftwareSourceCode extends \OpenActive\Models\SchemaOrg\CreativeWork
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:SoftwareSourceCode";
    }

    public static function fieldList() {
        $fields = [
            "sampleType" => "sampleType",
            "programmingLanguage" => "programmingLanguage",
            "codeSampleType" => "codeSampleType",
            "runtime" => "runtime",
            "targetProduct" => "targetProduct",
            "runtimePlatform" => "runtimePlatform",
            "codeRepository" => "codeRepository",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * What type of code sample: full (compile ready) solution, code snippet, inline code, scripts, template.
     *
     *
     * @var string
     */
    protected $sampleType;

    /**
     * The computer programming language.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ComputerLanguage|string
     */
    protected $programmingLanguage;

    /**
     * What type of code sample: full (compile ready) solution, code snippet, inline code, scripts, template.
     *
     *
     * @var string
     */
    protected $codeSampleType;

    /**
     * Runtime platform or script interpreter dependencies (example: Java v1, Python 2.3, .NET Framework 3.0).
     *
     *
     * @var string
     */
    protected $runtime;

    /**
     * Target Operating System / Product to which the code applies.  If applies to several versions, just the product name can be used.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\SoftwareApplication|string
     */
    protected $targetProduct;

    /**
     * Runtime platform or script interpreter dependencies (example: Java v1, Python 2.3, .NET Framework 3.0).
     *
     *
     * @var string
     */
    protected $runtimePlatform;

    /**
     * Link to the repository where the un-compiled, human readable code and related code is located (SVN, GitHub, CodePlex).
     *
     *
     * @var string
     */
    protected $codeRepository;

    /**
     * @return string
     */
    public function getSampleType()
    {
        return $this->sampleType;
    }

    /**
     * @param string $sampleType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSampleType($sampleType)
    {
        $types = [
            "string",
        ];

        $sampleType = self::checkTypes($sampleType, $types);

        $this->sampleType = $sampleType;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\ComputerLanguage|string
     */
    public function getProgrammingLanguage()
    {
        return $this->programmingLanguage;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ComputerLanguage|string $programmingLanguage
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setProgrammingLanguage($programmingLanguage)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\ComputerLanguage",
            "string",
        ];

        $programmingLanguage = self::checkTypes($programmingLanguage, $types);

        $this->programmingLanguage = $programmingLanguage;
    }

    /**
     * @return string
     */
    public function getCodeSampleType()
    {
        return $this->codeSampleType;
    }

    /**
     * @param string $codeSampleType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCodeSampleType($codeSampleType)
    {
        $types = [
            "string",
        ];

        $codeSampleType = self::checkTypes($codeSampleType, $types);

        $this->codeSampleType = $codeSampleType;
    }

    /**
     * @return string
     */
    public function getRuntime()
    {
        return $this->runtime;
    }

    /**
     * @param string $runtime
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRuntime($runtime)
    {
        $types = [
            "string",
        ];

        $runtime = self::checkTypes($runtime, $types);

        $this->runtime = $runtime;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\SoftwareApplication|string
     */
    public function getTargetProduct()
    {
        return $this->targetProduct;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\SoftwareApplication|string $targetProduct
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTargetProduct($targetProduct)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\SoftwareApplication",
            "string",
        ];

        $targetProduct = self::checkTypes($targetProduct, $types);

        $this->targetProduct = $targetProduct;
    }

    /**
     * @return string
     */
    public function getRuntimePlatform()
    {
        return $this->runtimePlatform;
    }

    /**
     * @param string $runtimePlatform
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRuntimePlatform($runtimePlatform)
    {
        $types = [
            "string",
        ];

        $runtimePlatform = self::checkTypes($runtimePlatform, $types);

        $this->runtimePlatform = $runtimePlatform;
    }

    /**
     * @return string
     */
    public function getCodeRepository()
    {
        return $this->codeRepository;
    }

    /**
     * @param string $codeRepository
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCodeRepository($codeRepository)
    {
        $types = [
            "string",
        ];

        $codeRepository = self::checkTypes($codeRepository, $types);

        $this->codeRepository = $codeRepository;
    }

}
