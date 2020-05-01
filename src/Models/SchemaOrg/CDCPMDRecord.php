<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class CDCPMDRecord extends \OpenActive\Models\SchemaOrg\StructuredValue
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:CDCPMDRecord";
    }

    public static function fieldList() {
        $fields = [
            "cvdNumBeds" => "cvdNumBeds",
            "cvdCollectionDate" => "cvdCollectionDate",
            "cvdFacilityId" => "cvdFacilityId",
            "cvdFacilityCounty" => "cvdFacilityCounty",
            "cvdNumVentUse" => "cvdNumVentUse",
            "cvdNumC19OverflowPats" => "cvdNumC19OverflowPats",
            "cvdNumC19MechVentPats" => "cvdNumC19MechVentPats",
            "cvdNumC19Died" => "cvdNumC19Died",
            "cvdNumBedsOcc" => "cvdNumBedsOcc",
            "cvdNumTotBeds" => "cvdNumTotBeds",
            "cvdNumVent" => "cvdNumVent",
            "cvdNumC19HOPats" => "cvdNumC19HOPats",
            "cvdNumICUBedsOcc" => "cvdNumICUBedsOcc",
            "cvdNumC19HospPats" => "cvdNumC19HospPats",
            "cvdNumC19OFMechVentPats" => "cvdNumC19OFMechVentPats",
            "cvdNumICUBeds" => "cvdNumICUBeds",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * numbeds - HOSPITAL INPATIENT BEDS: Inpatient beds, including all staffed, licensed, and overflow (surge) beds used for inpatients.
     *
     *
     * @var float|null
     */
    protected $cvdNumBeds;

    /**
     * collectiondate - Date for which patient counts are reported.
     *
     *
     * @var DateTime|string|null
     */
    protected $cvdCollectionDate;

    /**
     * Identifier of the NHSN facility that this data record applies to. Use <a class="localLink" href="https://schema.org/cvdFacilityCounty">cvdFacilityCounty</a> to indicate the county. To provide other details, <a class="localLink" href="https://schema.org/healthcareReportingData">healthcareReportingData</a> can be used on a <a class="localLink" href="https://schema.org/Hospital">Hospital</a> entry.
     *
     *
     * @var string
     */
    protected $cvdFacilityId;

    /**
     * Name of the County of the NHSN facility that this data record applies to. Use <a class="localLink" href="https://schema.org/cvdFacilityId">cvdFacilityId</a> to identify the facility. To provide other details, <a class="localLink" href="https://schema.org/healthcareReportingData">healthcareReportingData</a> can be used on a <a class="localLink" href="https://schema.org/Hospital">Hospital</a> entry.
     *
     *
     * @var string
     */
    protected $cvdFacilityCounty;

    /**
     * numventuse - MECHANICAL VENTILATORS IN USE: Total number of ventilators in use.
     *
     *
     * @var float|null
     */
    protected $cvdNumVentUse;

    /**
     * numc19overflowpats - ED/OVERFLOW: Patients with suspected or confirmed COVID-19 who are in the ED or any overflow location awaiting an inpatient bed.
     *
     *
     * @var float|null
     */
    protected $cvdNumC19OverflowPats;

    /**
     * numc19mechventpats - HOSPITALIZED and VENTILATED: Patients hospitalized in an NHSN inpatient care location who have suspected or confirmed COVID-19 and are on a mechanical ventilator.
     *
     *
     * @var float|null
     */
    protected $cvdNumC19MechVentPats;

    /**
     * numc19died - DEATHS: Patients with suspected or confirmed COVID-19 who died in the hospital, ED, or any overflow location.
     *
     *
     * @var float|null
     */
    protected $cvdNumC19Died;

    /**
     * numbedsocc - HOSPITAL INPATIENT BED OCCUPANCY: Total number of staffed inpatient beds that are occupied.
     *
     *
     * @var float|null
     */
    protected $cvdNumBedsOcc;

    /**
     * numtotbeds - ALL HOSPITAL BEDS: Total number of all Inpatient and outpatient beds, including all staffed,ICU, licensed, and overflow (surge) beds used for inpatients or outpatients.
     *
     *
     * @var float|null
     */
    protected $cvdNumTotBeds;

    /**
     * numvent - MECHANICAL VENTILATORS: Total number of ventilators available.
     *
     *
     * @var float|null
     */
    protected $cvdNumVent;

    /**
     * numc19hopats - HOSPITAL ONSET: Patients hospitalized in an NHSN inpatient care location with onset of suspected or confirmed COVID-19 14 or more days after hospitalization.
     *
     *
     * @var float|null
     */
    protected $cvdNumC19HOPats;

    /**
     * numicubedsocc - ICU BED OCCUPANCY: Total number of staffed inpatient ICU beds that are occupied.
     *
     *
     * @var float|null
     */
    protected $cvdNumICUBedsOcc;

    /**
     * numc19hosppats - HOSPITALIZED: Patients currently hospitalized in an inpatient care location who have suspected or confirmed COVID-19.
     *
     *
     * @var float|null
     */
    protected $cvdNumC19HospPats;

    /**
     * numc19ofmechventpats - ED/OVERFLOW and VENTILATED: Patients with suspected or confirmed COVID-19 who are in the ED or any overflow location awaiting an inpatient bed and on a mechanical ventilator.
     *
     *
     * @var float|null
     */
    protected $cvdNumC19OFMechVentPats;

    /**
     * numicubeds - ICU BEDS: Total number of staffed inpatient intensive care unit (ICU) beds.
     *
     *
     * @var float|null
     */
    protected $cvdNumICUBeds;

    /**
     * @return float|null
     */
    public function getCvdNumBeds()
    {
        return $this->cvdNumBeds;
    }

    /**
     * @param float|null $cvdNumBeds
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCvdNumBeds($cvdNumBeds)
    {
        $types = array(
            "float",
            "null",
        );

        $cvdNumBeds = self::checkTypes($cvdNumBeds, $types);

        $this->cvdNumBeds = $cvdNumBeds;
    }

    /**
     * @return DateTime|string|null
     */
    public function getCvdCollectionDate()
    {
        return $this->cvdCollectionDate;
    }

    /**
     * @param DateTime|string|null $cvdCollectionDate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCvdCollectionDate($cvdCollectionDate)
    {
        $types = array(
            "DateTime",
            "string",
            "null",
        );

        $cvdCollectionDate = self::checkTypes($cvdCollectionDate, $types);

        $this->cvdCollectionDate = $cvdCollectionDate;
    }

    /**
     * @return string
     */
    public function getCvdFacilityId()
    {
        return $this->cvdFacilityId;
    }

    /**
     * @param string $cvdFacilityId
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCvdFacilityId($cvdFacilityId)
    {
        $types = array(
            "string",
        );

        $cvdFacilityId = self::checkTypes($cvdFacilityId, $types);

        $this->cvdFacilityId = $cvdFacilityId;
    }

    /**
     * @return string
     */
    public function getCvdFacilityCounty()
    {
        return $this->cvdFacilityCounty;
    }

    /**
     * @param string $cvdFacilityCounty
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCvdFacilityCounty($cvdFacilityCounty)
    {
        $types = array(
            "string",
        );

        $cvdFacilityCounty = self::checkTypes($cvdFacilityCounty, $types);

        $this->cvdFacilityCounty = $cvdFacilityCounty;
    }

    /**
     * @return float|null
     */
    public function getCvdNumVentUse()
    {
        return $this->cvdNumVentUse;
    }

    /**
     * @param float|null $cvdNumVentUse
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCvdNumVentUse($cvdNumVentUse)
    {
        $types = array(
            "float",
            "null",
        );

        $cvdNumVentUse = self::checkTypes($cvdNumVentUse, $types);

        $this->cvdNumVentUse = $cvdNumVentUse;
    }

    /**
     * @return float|null
     */
    public function getCvdNumC19OverflowPats()
    {
        return $this->cvdNumC19OverflowPats;
    }

    /**
     * @param float|null $cvdNumC19OverflowPats
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCvdNumC19OverflowPats($cvdNumC19OverflowPats)
    {
        $types = array(
            "float",
            "null",
        );

        $cvdNumC19OverflowPats = self::checkTypes($cvdNumC19OverflowPats, $types);

        $this->cvdNumC19OverflowPats = $cvdNumC19OverflowPats;
    }

    /**
     * @return float|null
     */
    public function getCvdNumC19MechVentPats()
    {
        return $this->cvdNumC19MechVentPats;
    }

    /**
     * @param float|null $cvdNumC19MechVentPats
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCvdNumC19MechVentPats($cvdNumC19MechVentPats)
    {
        $types = array(
            "float",
            "null",
        );

        $cvdNumC19MechVentPats = self::checkTypes($cvdNumC19MechVentPats, $types);

        $this->cvdNumC19MechVentPats = $cvdNumC19MechVentPats;
    }

    /**
     * @return float|null
     */
    public function getCvdNumC19Died()
    {
        return $this->cvdNumC19Died;
    }

    /**
     * @param float|null $cvdNumC19Died
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCvdNumC19Died($cvdNumC19Died)
    {
        $types = array(
            "float",
            "null",
        );

        $cvdNumC19Died = self::checkTypes($cvdNumC19Died, $types);

        $this->cvdNumC19Died = $cvdNumC19Died;
    }

    /**
     * @return float|null
     */
    public function getCvdNumBedsOcc()
    {
        return $this->cvdNumBedsOcc;
    }

    /**
     * @param float|null $cvdNumBedsOcc
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCvdNumBedsOcc($cvdNumBedsOcc)
    {
        $types = array(
            "float",
            "null",
        );

        $cvdNumBedsOcc = self::checkTypes($cvdNumBedsOcc, $types);

        $this->cvdNumBedsOcc = $cvdNumBedsOcc;
    }

    /**
     * @return float|null
     */
    public function getCvdNumTotBeds()
    {
        return $this->cvdNumTotBeds;
    }

    /**
     * @param float|null $cvdNumTotBeds
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCvdNumTotBeds($cvdNumTotBeds)
    {
        $types = array(
            "float",
            "null",
        );

        $cvdNumTotBeds = self::checkTypes($cvdNumTotBeds, $types);

        $this->cvdNumTotBeds = $cvdNumTotBeds;
    }

    /**
     * @return float|null
     */
    public function getCvdNumVent()
    {
        return $this->cvdNumVent;
    }

    /**
     * @param float|null $cvdNumVent
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCvdNumVent($cvdNumVent)
    {
        $types = array(
            "float",
            "null",
        );

        $cvdNumVent = self::checkTypes($cvdNumVent, $types);

        $this->cvdNumVent = $cvdNumVent;
    }

    /**
     * @return float|null
     */
    public function getCvdNumC19HOPats()
    {
        return $this->cvdNumC19HOPats;
    }

    /**
     * @param float|null $cvdNumC19HOPats
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCvdNumC19HOPats($cvdNumC19HOPats)
    {
        $types = array(
            "float",
            "null",
        );

        $cvdNumC19HOPats = self::checkTypes($cvdNumC19HOPats, $types);

        $this->cvdNumC19HOPats = $cvdNumC19HOPats;
    }

    /**
     * @return float|null
     */
    public function getCvdNumICUBedsOcc()
    {
        return $this->cvdNumICUBedsOcc;
    }

    /**
     * @param float|null $cvdNumICUBedsOcc
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCvdNumICUBedsOcc($cvdNumICUBedsOcc)
    {
        $types = array(
            "float",
            "null",
        );

        $cvdNumICUBedsOcc = self::checkTypes($cvdNumICUBedsOcc, $types);

        $this->cvdNumICUBedsOcc = $cvdNumICUBedsOcc;
    }

    /**
     * @return float|null
     */
    public function getCvdNumC19HospPats()
    {
        return $this->cvdNumC19HospPats;
    }

    /**
     * @param float|null $cvdNumC19HospPats
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCvdNumC19HospPats($cvdNumC19HospPats)
    {
        $types = array(
            "float",
            "null",
        );

        $cvdNumC19HospPats = self::checkTypes($cvdNumC19HospPats, $types);

        $this->cvdNumC19HospPats = $cvdNumC19HospPats;
    }

    /**
     * @return float|null
     */
    public function getCvdNumC19OFMechVentPats()
    {
        return $this->cvdNumC19OFMechVentPats;
    }

    /**
     * @param float|null $cvdNumC19OFMechVentPats
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCvdNumC19OFMechVentPats($cvdNumC19OFMechVentPats)
    {
        $types = array(
            "float",
            "null",
        );

        $cvdNumC19OFMechVentPats = self::checkTypes($cvdNumC19OFMechVentPats, $types);

        $this->cvdNumC19OFMechVentPats = $cvdNumC19OFMechVentPats;
    }

    /**
     * @return float|null
     */
    public function getCvdNumICUBeds()
    {
        return $this->cvdNumICUBeds;
    }

    /**
     * @param float|null $cvdNumICUBeds
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCvdNumICUBeds($cvdNumICUBeds)
    {
        $types = array(
            "float",
            "null",
        );

        $cvdNumICUBeds = self::checkTypes($cvdNumICUBeds, $types);

        $this->cvdNumICUBeds = $cvdNumICUBeds;
    }

}
