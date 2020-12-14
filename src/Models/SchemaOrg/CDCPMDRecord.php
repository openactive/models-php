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
            "cvdNumC19OverflowPats" => "cvdNumC19OverflowPats",
            "cvdCollectionDate" => "cvdCollectionDate",
            "datePosted" => "datePosted",
            "cvdNumBeds" => "cvdNumBeds",
            "cvdFacilityId" => "cvdFacilityId",
            "cvdNumC19HOPats" => "cvdNumC19HOPats",
            "cvdNumICUBeds" => "cvdNumICUBeds",
            "cvdNumC19Died" => "cvdNumC19Died",
            "cvdFacilityCounty" => "cvdFacilityCounty",
            "cvdNumC19OFMechVentPats" => "cvdNumC19OFMechVentPats",
            "cvdNumC19MechVentPats" => "cvdNumC19MechVentPats",
            "cvdNumICUBedsOcc" => "cvdNumICUBedsOcc",
            "cvdNumC19HospPats" => "cvdNumC19HospPats",
            "cvdNumVent" => "cvdNumVent",
            "cvdNumVentUse" => "cvdNumVentUse",
            "cvdNumBedsOcc" => "cvdNumBedsOcc",
            "cvdNumTotBeds" => "cvdNumTotBeds",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * numc19overflowpats - ED/OVERFLOW: Patients with suspected or confirmed COVID-19 who are in the ED or any overflow location awaiting an inpatient bed.
     *
     *
     * @var Number|null
     */
    protected $cvdNumC19OverflowPats;

    /**
     * collectiondate - Date for which patient counts are reported.
     *
     *
     * @var DateTime|string|null
     */
    protected $cvdCollectionDate;

    /**
     * Publication date of an online listing.
     *
     *
     * @var Date|DateTime|null
     */
    protected $datePosted;

    /**
     * numbeds - HOSPITAL INPATIENT BEDS: Inpatient beds, including all staffed, licensed, and overflow (surge) beds used for inpatients.
     *
     *
     * @var Number|null
     */
    protected $cvdNumBeds;

    /**
     * Identifier of the NHSN facility that this data record applies to. Use [[cvdFacilityCounty]] to indicate the county. To provide other details, [[healthcareReportingData]] can be used on a [[Hospital]] entry.
     *
     *
     * @var string
     */
    protected $cvdFacilityId;

    /**
     * numc19hopats - HOSPITAL ONSET: Patients hospitalized in an NHSN inpatient care location with onset of suspected or confirmed COVID-19 14 or more days after hospitalization.
     *
     *
     * @var Number|null
     */
    protected $cvdNumC19HOPats;

    /**
     * numicubeds - ICU BEDS: Total number of staffed inpatient intensive care unit (ICU) beds.
     *
     *
     * @var Number|null
     */
    protected $cvdNumICUBeds;

    /**
     * numc19died - DEATHS: Patients with suspected or confirmed COVID-19 who died in the hospital, ED, or any overflow location.
     *
     *
     * @var Number|null
     */
    protected $cvdNumC19Died;

    /**
     * Name of the County of the NHSN facility that this data record applies to. Use [[cvdFacilityId]] to identify the facility. To provide other details, [[healthcareReportingData]] can be used on a [[Hospital]] entry.
     *
     *
     * @var string
     */
    protected $cvdFacilityCounty;

    /**
     * numc19ofmechventpats - ED/OVERFLOW and VENTILATED: Patients with suspected or confirmed COVID-19 who are in the ED or any overflow location awaiting an inpatient bed and on a mechanical ventilator.
     *
     *
     * @var Number|null
     */
    protected $cvdNumC19OFMechVentPats;

    /**
     * numc19mechventpats - HOSPITALIZED and VENTILATED: Patients hospitalized in an NHSN inpatient care location who have suspected or confirmed COVID-19 and are on a mechanical ventilator.
     *
     *
     * @var Number|null
     */
    protected $cvdNumC19MechVentPats;

    /**
     * numicubedsocc - ICU BED OCCUPANCY: Total number of staffed inpatient ICU beds that are occupied.
     *
     *
     * @var Number|null
     */
    protected $cvdNumICUBedsOcc;

    /**
     * numc19hosppats - HOSPITALIZED: Patients currently hospitalized in an inpatient care location who have suspected or confirmed COVID-19.
     *
     *
     * @var Number|null
     */
    protected $cvdNumC19HospPats;

    /**
     * numvent - MECHANICAL VENTILATORS: Total number of ventilators available.
     *
     *
     * @var Number|null
     */
    protected $cvdNumVent;

    /**
     * numventuse - MECHANICAL VENTILATORS IN USE: Total number of ventilators in use.
     *
     *
     * @var Number|null
     */
    protected $cvdNumVentUse;

    /**
     * numbedsocc - HOSPITAL INPATIENT BED OCCUPANCY: Total number of staffed inpatient beds that are occupied.
     *
     *
     * @var Number|null
     */
    protected $cvdNumBedsOcc;

    /**
     * numtotbeds - ALL HOSPITAL BEDS: Total number of all Inpatient and outpatient beds, including all staffed,ICU, licensed, and overflow (surge) beds used for inpatients or outpatients.
     *
     *
     * @var Number|null
     */
    protected $cvdNumTotBeds;

    /**
     * @return Number|null
     */
    public function getCvdNumC19OverflowPats()
    {
        return $this->cvdNumC19OverflowPats;
    }

    /**
     * @param Number|null $cvdNumC19OverflowPats
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCvdNumC19OverflowPats($cvdNumC19OverflowPats)
    {
        $types = [
            "Number",
            "null",
        ];

        $cvdNumC19OverflowPats = self::checkTypes($cvdNumC19OverflowPats, $types);

        $this->cvdNumC19OverflowPats = $cvdNumC19OverflowPats;
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
        $types = [
            "DateTime",
            "string",
            "null",
        ];

        $cvdCollectionDate = self::checkTypes($cvdCollectionDate, $types);

        $this->cvdCollectionDate = $cvdCollectionDate;
    }

    /**
     * @return Date|DateTime|null
     */
    public function getDatePosted()
    {
        return $this->datePosted;
    }

    /**
     * @param Date|DateTime|null $datePosted
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDatePosted($datePosted)
    {
        $types = [
            "Date",
            "DateTime",
            "null",
        ];

        $datePosted = self::checkTypes($datePosted, $types);

        $this->datePosted = $datePosted;
    }

    /**
     * @return Number|null
     */
    public function getCvdNumBeds()
    {
        return $this->cvdNumBeds;
    }

    /**
     * @param Number|null $cvdNumBeds
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCvdNumBeds($cvdNumBeds)
    {
        $types = [
            "Number",
            "null",
        ];

        $cvdNumBeds = self::checkTypes($cvdNumBeds, $types);

        $this->cvdNumBeds = $cvdNumBeds;
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
        $types = [
            "string",
        ];

        $cvdFacilityId = self::checkTypes($cvdFacilityId, $types);

        $this->cvdFacilityId = $cvdFacilityId;
    }

    /**
     * @return Number|null
     */
    public function getCvdNumC19HOPats()
    {
        return $this->cvdNumC19HOPats;
    }

    /**
     * @param Number|null $cvdNumC19HOPats
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCvdNumC19HOPats($cvdNumC19HOPats)
    {
        $types = [
            "Number",
            "null",
        ];

        $cvdNumC19HOPats = self::checkTypes($cvdNumC19HOPats, $types);

        $this->cvdNumC19HOPats = $cvdNumC19HOPats;
    }

    /**
     * @return Number|null
     */
    public function getCvdNumICUBeds()
    {
        return $this->cvdNumICUBeds;
    }

    /**
     * @param Number|null $cvdNumICUBeds
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCvdNumICUBeds($cvdNumICUBeds)
    {
        $types = [
            "Number",
            "null",
        ];

        $cvdNumICUBeds = self::checkTypes($cvdNumICUBeds, $types);

        $this->cvdNumICUBeds = $cvdNumICUBeds;
    }

    /**
     * @return Number|null
     */
    public function getCvdNumC19Died()
    {
        return $this->cvdNumC19Died;
    }

    /**
     * @param Number|null $cvdNumC19Died
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCvdNumC19Died($cvdNumC19Died)
    {
        $types = [
            "Number",
            "null",
        ];

        $cvdNumC19Died = self::checkTypes($cvdNumC19Died, $types);

        $this->cvdNumC19Died = $cvdNumC19Died;
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
        $types = [
            "string",
        ];

        $cvdFacilityCounty = self::checkTypes($cvdFacilityCounty, $types);

        $this->cvdFacilityCounty = $cvdFacilityCounty;
    }

    /**
     * @return Number|null
     */
    public function getCvdNumC19OFMechVentPats()
    {
        return $this->cvdNumC19OFMechVentPats;
    }

    /**
     * @param Number|null $cvdNumC19OFMechVentPats
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCvdNumC19OFMechVentPats($cvdNumC19OFMechVentPats)
    {
        $types = [
            "Number",
            "null",
        ];

        $cvdNumC19OFMechVentPats = self::checkTypes($cvdNumC19OFMechVentPats, $types);

        $this->cvdNumC19OFMechVentPats = $cvdNumC19OFMechVentPats;
    }

    /**
     * @return Number|null
     */
    public function getCvdNumC19MechVentPats()
    {
        return $this->cvdNumC19MechVentPats;
    }

    /**
     * @param Number|null $cvdNumC19MechVentPats
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCvdNumC19MechVentPats($cvdNumC19MechVentPats)
    {
        $types = [
            "Number",
            "null",
        ];

        $cvdNumC19MechVentPats = self::checkTypes($cvdNumC19MechVentPats, $types);

        $this->cvdNumC19MechVentPats = $cvdNumC19MechVentPats;
    }

    /**
     * @return Number|null
     */
    public function getCvdNumICUBedsOcc()
    {
        return $this->cvdNumICUBedsOcc;
    }

    /**
     * @param Number|null $cvdNumICUBedsOcc
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCvdNumICUBedsOcc($cvdNumICUBedsOcc)
    {
        $types = [
            "Number",
            "null",
        ];

        $cvdNumICUBedsOcc = self::checkTypes($cvdNumICUBedsOcc, $types);

        $this->cvdNumICUBedsOcc = $cvdNumICUBedsOcc;
    }

    /**
     * @return Number|null
     */
    public function getCvdNumC19HospPats()
    {
        return $this->cvdNumC19HospPats;
    }

    /**
     * @param Number|null $cvdNumC19HospPats
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCvdNumC19HospPats($cvdNumC19HospPats)
    {
        $types = [
            "Number",
            "null",
        ];

        $cvdNumC19HospPats = self::checkTypes($cvdNumC19HospPats, $types);

        $this->cvdNumC19HospPats = $cvdNumC19HospPats;
    }

    /**
     * @return Number|null
     */
    public function getCvdNumVent()
    {
        return $this->cvdNumVent;
    }

    /**
     * @param Number|null $cvdNumVent
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCvdNumVent($cvdNumVent)
    {
        $types = [
            "Number",
            "null",
        ];

        $cvdNumVent = self::checkTypes($cvdNumVent, $types);

        $this->cvdNumVent = $cvdNumVent;
    }

    /**
     * @return Number|null
     */
    public function getCvdNumVentUse()
    {
        return $this->cvdNumVentUse;
    }

    /**
     * @param Number|null $cvdNumVentUse
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCvdNumVentUse($cvdNumVentUse)
    {
        $types = [
            "Number",
            "null",
        ];

        $cvdNumVentUse = self::checkTypes($cvdNumVentUse, $types);

        $this->cvdNumVentUse = $cvdNumVentUse;
    }

    /**
     * @return Number|null
     */
    public function getCvdNumBedsOcc()
    {
        return $this->cvdNumBedsOcc;
    }

    /**
     * @param Number|null $cvdNumBedsOcc
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCvdNumBedsOcc($cvdNumBedsOcc)
    {
        $types = [
            "Number",
            "null",
        ];

        $cvdNumBedsOcc = self::checkTypes($cvdNumBedsOcc, $types);

        $this->cvdNumBedsOcc = $cvdNumBedsOcc;
    }

    /**
     * @return Number|null
     */
    public function getCvdNumTotBeds()
    {
        return $this->cvdNumTotBeds;
    }

    /**
     * @param Number|null $cvdNumTotBeds
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCvdNumTotBeds($cvdNumTotBeds)
    {
        $types = [
            "Number",
            "null",
        ];

        $cvdNumTotBeds = self::checkTypes($cvdNumTotBeds, $types);

        $this->cvdNumTotBeds = $cvdNumTotBeds;
    }

}
