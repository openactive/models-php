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

    /**
     * Target Operating System / Product to which the code applies.  If applies to several versions, just the product name can be used.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\SoftwareApplication
     */
    protected $targetProduct;

    /**
     * Link to the repository where the un-compiled, human readable code and related code is located (SVN, github, CodePlex).
     *
     *
     * @var string
     */
    protected $codeRepository;

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
     * Runtime platform or script interpreter dependencies (Example - Java v1, Python2.3, .Net Framework 3.0).
     *
     *
     * @var string
     */
    protected $runtimePlatform;

    /**
     * What type of code sample: full (compile ready) solution, code snippet, inline code, scripts, template.
     *
     *
     * @var string
     */
    protected $sampleType;

    /**
     * Runtime platform or script interpreter dependencies (Example - Java v1, Python2.3, .Net Framework 3.0).
     *
     *
     * @var string
     */
    protected $runtime;

    /**
     * @return \OpenActive\Models\SchemaOrg\SoftwareApplication
     */
    public function getTargetProduct()
    {
        return $this->targetProduct;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\SoftwareApplication $targetProduct
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTargetProduct($targetProduct)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\SoftwareApplication",
        );

        $targetProduct = self::checkTypes($targetProduct, $types);

        $this->targetProduct = $targetProduct;
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
        $types = array(
            "string",
        );

        $codeRepository = self::checkTypes($codeRepository, $types);

        $this->codeRepository = $codeRepository;
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
        $types = array(
            "\OpenActive\Models\SchemaOrg\ComputerLanguage",
            "string",
        );

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
        $types = array(
            "string",
        );

        $codeSampleType = self::checkTypes($codeSampleType, $types);

        $this->codeSampleType = $codeSampleType;
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
        $types = array(
            "string",
        );

        $runtimePlatform = self::checkTypes($runtimePlatform, $types);

        $this->runtimePlatform = $runtimePlatform;
    }

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
        $types = array(
            "string",
        );

        $sampleType = self::checkTypes($sampleType, $types);

        $this->sampleType = $sampleType;
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
        $types = array(
            "string",
        );

        $runtime = self::checkTypes($runtime, $types);

        $this->runtime = $runtime;
    }

}
