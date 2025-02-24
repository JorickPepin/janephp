<?php

namespace CreditSafe\API\Model;

class ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetails extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var int
     */
    protected $acceptListID;
    /**
     * 
     *
     * @var bool
     */
    protected $addedToAcceptList;
    /**
     * 
     *
     * @var string
     */
    protected $division;
    /**
     * 
     *
     * @var string
     */
    protected $dppa;
    /**
     * 
     *
     * @var string
     */
    protected $eftType;
    /**
     * 
     *
     * @var string
     */
    protected $entityType;
    /**
     * 
     *
     * @var string
     */
    protected $gender;
    /**
     * 
     *
     * @var int
     */
    protected $glb;
    /**
     * 
     *
     * @var list<ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsIDsItem>
     */
    protected $iDs;
    /**
     * 
     *
     * @var string
     */
    protected $lastUpdatedDate;
    /**
     * 
     *
     * @var ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsName
     */
    protected $name;
    /**
     * 
     *
     * @var ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsRecordState
     */
    protected $recordState;
    /**
     * 
     *
     * @var string
     */
    protected $searchDate;
    /**
     * 
     *
     * @return int
     */
    public function getAcceptListID(): int
    {
        return $this->acceptListID;
    }
    /**
     * 
     *
     * @param int $acceptListID
     *
     * @return self
     */
    public function setAcceptListID(int $acceptListID): self
    {
        $this->initialized['acceptListID'] = true;
        $this->acceptListID = $acceptListID;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getAddedToAcceptList(): bool
    {
        return $this->addedToAcceptList;
    }
    /**
     * 
     *
     * @param bool $addedToAcceptList
     *
     * @return self
     */
    public function setAddedToAcceptList(bool $addedToAcceptList): self
    {
        $this->initialized['addedToAcceptList'] = true;
        $this->addedToAcceptList = $addedToAcceptList;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDivision(): string
    {
        return $this->division;
    }
    /**
     * 
     *
     * @param string $division
     *
     * @return self
     */
    public function setDivision(string $division): self
    {
        $this->initialized['division'] = true;
        $this->division = $division;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDppa(): string
    {
        return $this->dppa;
    }
    /**
     * 
     *
     * @param string $dppa
     *
     * @return self
     */
    public function setDppa(string $dppa): self
    {
        $this->initialized['dppa'] = true;
        $this->dppa = $dppa;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEftType(): string
    {
        return $this->eftType;
    }
    /**
     * 
     *
     * @param string $eftType
     *
     * @return self
     */
    public function setEftType(string $eftType): self
    {
        $this->initialized['eftType'] = true;
        $this->eftType = $eftType;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEntityType(): string
    {
        return $this->entityType;
    }
    /**
     * 
     *
     * @param string $entityType
     *
     * @return self
     */
    public function setEntityType(string $entityType): self
    {
        $this->initialized['entityType'] = true;
        $this->entityType = $entityType;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getGender(): string
    {
        return $this->gender;
    }
    /**
     * 
     *
     * @param string $gender
     *
     * @return self
     */
    public function setGender(string $gender): self
    {
        $this->initialized['gender'] = true;
        $this->gender = $gender;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getGlb(): int
    {
        return $this->glb;
    }
    /**
     * 
     *
     * @param int $glb
     *
     * @return self
     */
    public function setGlb(int $glb): self
    {
        $this->initialized['glb'] = true;
        $this->glb = $glb;
        return $this;
    }
    /**
     * 
     *
     * @return list<ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsIDsItem>
     */
    public function getIDs(): array
    {
        return $this->iDs;
    }
    /**
     * 
     *
     * @param list<ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsIDsItem> $iDs
     *
     * @return self
     */
    public function setIDs(array $iDs): self
    {
        $this->initialized['iDs'] = true;
        $this->iDs = $iDs;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLastUpdatedDate(): string
    {
        return $this->lastUpdatedDate;
    }
    /**
     * 
     *
     * @param string $lastUpdatedDate
     *
     * @return self
     */
    public function setLastUpdatedDate(string $lastUpdatedDate): self
    {
        $this->initialized['lastUpdatedDate'] = true;
        $this->lastUpdatedDate = $lastUpdatedDate;
        return $this;
    }
    /**
     * 
     *
     * @return ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsName
     */
    public function getName(): ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsName
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsName $name
     *
     * @return self
     */
    public function setName(ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsName $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsRecordState
     */
    public function getRecordState(): ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsRecordState
    {
        return $this->recordState;
    }
    /**
     * 
     *
     * @param ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsRecordState $recordState
     *
     * @return self
     */
    public function setRecordState(ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsRecordState $recordState): self
    {
        $this->initialized['recordState'] = true;
        $this->recordState = $recordState;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSearchDate(): string
    {
        return $this->searchDate;
    }
    /**
     * 
     *
     * @param string $searchDate
     *
     * @return self
     */
    public function setSearchDate(string $searchDate): self
    {
        $this->initialized['searchDate'] = true;
        $this->searchDate = $searchDate;
        return $this;
    }
}