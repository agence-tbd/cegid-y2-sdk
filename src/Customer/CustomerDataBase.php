<?php

namespace Y2\Customer;

class CustomerDataBase
{
    /**
     * @var string $ActivitySectorCode
     */
    protected $ActivitySectorCode = null;

    /**
     * @var AddressDataType $AddressData
     */
    protected $AddressData = null;

    /**
     * @var string $AlternateFirstName
     */
    protected $AlternateFirstName = null;

    /**
     * @var string $AlternateLastName
     */
    protected $AlternateLastName = null;

    /**
     * @var string $BusinessAreaCode
     */
    protected $BusinessAreaCode = null;

    /**
     * @var string $CpfCnpjCode
     */
    protected $CpfCnpjCode = null;

    /**
     * @var EmailDataType $EmailData
     */
    protected $EmailData = null;

    /**
     * @var string $FirstName
     */
    protected $FirstName = null;

    /**
     * @var boolean $IsCompany
     */
    protected $IsCompany = null;

    /**
     * @var \DateTime $LastModificationDate
     */
    protected $LastModificationDate = null;

    /**
     * @var string $LastName
     */
    protected $LastName = null;

    /**
     * @var string $MunicipalRegistration
     */
    protected $MunicipalRegistration = null;

    /**
     * @var string $OriginCode
     */
    protected $OriginCode = null;

    /**
     * @var PhoneDataType $PhoneData
     */
    protected $PhoneData = null;

    /**
     * @var string $PriceListCode
     */
    protected $PriceListCode = null;

    /**
     * @var string $RegionalRegistration
     */
    protected $RegionalRegistration = null;

    /**
     * @var string $RiskLevel
     */
    protected $RiskLevel = null;

    /**
     * @var string $SalesPerson2Id
     */
    protected $SalesPerson2Id = null;

    /**
     * @var string $SalesPerson3Id
     */
    protected $SalesPerson3Id = null;

    /**
     * @var string $SalesPersonId
     */
    protected $SalesPersonId = null;

    /**
     * @var string $TitleId
     */
    protected $TitleId = null;

    /**
     * @var ArrayOfUserDefinedBoolean $UserDefinedBooleans
     */
    protected $UserDefinedBooleans = null;

    /**
     * @var UserDefinedDataType $UserDefinedData
     */
    protected $UserDefinedData = null;

    /**
     * @var ArrayOfUserDefinedDate $UserDefinedDates
     */
    protected $UserDefinedDates = null;

    /**
     * @var ArrayOfUserDefinedText $UserDefinedTexts
     */
    protected $UserDefinedTexts = null;

    /**
     * @var ArrayOfUserDefinedValue $UserDefinedValues
     */
    protected $UserDefinedValues = null;

    /**
     * @var string $UsualStoreId
     */
    protected $UsualStoreId = null;


    public function __construct()
    {

    }

    /**
     * @return string
     */
    public function getActivitySectorCode(): ?string
    {
        return $this->ActivitySectorCode;
    }

    /**
     * @param string $ActivitySectorCode
     *
     * @return CustomerDataBase
     */
    public function setActivitySectorCode(string $ActivitySectorCode): CustomerDataBase
    {
        $this->ActivitySectorCode = $ActivitySectorCode;
        return $this;
    }

    /**
     * @return AddressDataType
     */
    public function getAddressData(): ?AddressDataType
    {
        return $this->AddressData;
    }

    /**
     * @param AddressDataType $AddressData
     *
     * @return CustomerDataBase
     */
    public function setAddressData(AddressDataType $AddressData): CustomerDataBase
    {
        $this->AddressData = $AddressData;
        return $this;
    }

    /**
     * @return string
     */
    public function getAlternateFirstName(): ?string
    {
        return $this->AlternateFirstName;
    }

    /**
     * @param string $AlternateFirstName
     *
     * @return CustomerDataBase
     */
    public function setAlternateFirstName(string $AlternateFirstName): CustomerDataBase
    {
        $this->AlternateFirstName = $AlternateFirstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getAlternateLastName(): ?string
    {
        return $this->AlternateLastName;
    }

    /**
     * @param string $AlternateLastName
     *
     * @return CustomerDataBase
     */
    public function setAlternateLastName(string $AlternateLastName): CustomerDataBase
    {
        $this->AlternateLastName = $AlternateLastName;
        return $this;
    }

    /**
     * @return string
     */
    public function getBusinessAreaCode(): ?string
    {
        return $this->BusinessAreaCode;
    }

    /**
     * @param string $BusinessAreaCode
     *
     * @return CustomerDataBase
     */
    public function setBusinessAreaCode(string $BusinessAreaCode): CustomerDataBase
    {
        $this->BusinessAreaCode = $BusinessAreaCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCpfCnpjCode(): ?string
    {
        return $this->CpfCnpjCode;
    }

    /**
     * @param string $CpfCnpjCode
     *
     * @return CustomerDataBase
     */
    public function setCpfCnpjCode(string $CpfCnpjCode): CustomerDataBase
    {
        $this->CpfCnpjCode = $CpfCnpjCode;
        return $this;
    }

    /**
     * @return EmailDataType
     */
    public function getEmailData(): ?EmailDataType
    {
        return $this->EmailData;
    }

    /**
     * @param EmailDataType $EmailData
     *
     * @return CustomerDataBase
     */
    public function setEmailData(EmailDataType $EmailData): CustomerDataBase
    {
        $this->EmailData = $EmailData;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName(): ?string
    {
        return $this->FirstName;
    }

    /**
     * @param string $FirstName
     *
     * @return CustomerDataBase
     */
    public function setFirstName(string $FirstName): CustomerDataBase
    {
        $this->FirstName = $FirstName;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsCompany(): ?bool
    {
        return $this->IsCompany;
    }

    /**
     * @param boolean $IsCompany
     *
     * @return CustomerDataBase
     */
    public function setIsCompany(bool $IsCompany): CustomerDataBase
    {
        $this->IsCompany = $IsCompany;
        return $this;
    }

    /**
     * @return \DateTime|false|null
     */
    public function getLastModificationDate()
    {
        if ($this->LastModificationDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->LastModificationDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime|null $LastModificationDate
     * @param string $format
     * @return CustomerDataBase
     */
    public function setLastModificationDate(\DateTime $LastModificationDate = null, string $format=\DateTime::ATOM): CustomerDataBase
    {
        $this->LastModificationDate = $LastModificationDate?->format($format);
        return $this;
    }

    /**
     * @return string
     */
    public function getLastName(): ?string
    {
        return $this->LastName;
    }

    /**
     * @param string $LastName
     *
     * @return CustomerDataBase
     */
    public function setLastName(string $LastName): CustomerDataBase
    {
        $this->LastName = $LastName;
        return $this;
    }

    /**
     * @return string
     */
    public function getMunicipalRegistration(): ?string
    {
        return $this->MunicipalRegistration;
    }

    /**
     * @param string $MunicipalRegistration
     *
     * @return CustomerDataBase
     */
    public function setMunicipalRegistration(string $MunicipalRegistration): CustomerDataBase
    {
        $this->MunicipalRegistration = $MunicipalRegistration;
        return $this;
    }

    /**
     * @return string
     */
    public function getOriginCode(): ?string
    {
        return $this->OriginCode;
    }

    /**
     * @param string $OriginCode
     *
     * @return CustomerDataBase
     */
    public function setOriginCode(string $OriginCode): CustomerDataBase
    {
        $this->OriginCode = $OriginCode;
        return $this;
    }

    /**
     * @return PhoneDataType
     */
    public function getPhoneData(): ?PhoneDataType
    {
        return $this->PhoneData;
    }

    /**
     * @param PhoneDataType $PhoneData
     *
     * @return CustomerDataBase
     */
    public function setPhoneData(PhoneDataType $PhoneData): CustomerDataBase
    {
        $this->PhoneData = $PhoneData;
        return $this;
    }

    /**
     * @return string
     */
    public function getPriceListCode(): ?string
    {
        return $this->PriceListCode;
    }

    /**
     * @param string $PriceListCode
     *
     * @return CustomerDataBase
     */
    public function setPriceListCode(string $PriceListCode): CustomerDataBase
    {
        $this->PriceListCode = $PriceListCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getRegionalRegistration(): ?string
    {
        return $this->RegionalRegistration;
    }

    /**
     * @param string $RegionalRegistration
     *
     * @return CustomerDataBase
     */
    public function setRegionalRegistration(string $RegionalRegistration): CustomerDataBase
    {
        $this->RegionalRegistration = $RegionalRegistration;
        return $this;
    }

    /**
     * @return string
     */
    public function getRiskLevel(): ?string
    {
        return $this->RiskLevel;
    }

    /**
     * @param string $RiskLevel
     *
     * @return CustomerDataBase
     */
    public function setRiskLevel(string $RiskLevel): CustomerDataBase
    {
        $this->RiskLevel = $RiskLevel;
        return $this;
    }

    /**
     * @return string
     */
    public function getSalesPerson2Id(): string
    {
        return $this->SalesPerson2Id;
    }

    /**
     * @param string $SalesPerson2Id
     *
     * @return CustomerDataBase
     */
    public function setSalesPerson2Id(string $SalesPerson2Id): CustomerDataBase
    {
        $this->SalesPerson2Id = $SalesPerson2Id;
        return $this;
    }

    /**
     * @return string
     */
    public function getSalesPerson3Id(): string
    {
        return $this->SalesPerson3Id;
    }

    /**
     * @param string $SalesPerson3Id
     *
     * @return CustomerDataBase
     */
    public function setSalesPerson3Id(string $SalesPerson3Id): CustomerDataBase
    {
        $this->SalesPerson3Id = $SalesPerson3Id;
        return $this;
    }

    /**
     * @return string
     */
    public function getSalesPersonId(): ?string
    {
        return $this->SalesPersonId;
    }

    /**
     * @param string $SalesPersonId
     *
     * @return CustomerDataBase
     */
    public function setSalesPersonId(string $SalesPersonId): CustomerDataBase
    {
        $this->SalesPersonId = $SalesPersonId;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitleId(): ?string
    {
        return $this->TitleId;
    }

    /**
     * @param string $TitleId
     *
     * @return CustomerDataBase
     */
    public function setTitleId(string $TitleId): CustomerDataBase
    {
        $this->TitleId = $TitleId;
        return $this;
    }

    /**
     * @return ArrayOfUserDefinedBoolean
     */
    public function getUserDefinedBooleans(): ?ArrayOfUserDefinedBoolean
    {
        return $this->UserDefinedBooleans;
    }

    /**
     * @param ArrayOfUserDefinedBoolean $UserDefinedBooleans
     *
     * @return CustomerDataBase
     */
    public function setUserDefinedBooleans(ArrayOfUserDefinedBoolean $UserDefinedBooleans): CustomerDataBase
    {
        $this->UserDefinedBooleans = $UserDefinedBooleans;
        return $this;
    }

    /**
     * @return UserDefinedDataType
     */
    public function getUserDefinedData(): ?UserDefinedDataType
    {
        return $this->UserDefinedData;
    }

    /**
     * @param UserDefinedDataType $UserDefinedData
     *
     * @return CustomerDataBase
     */
    public function setUserDefinedData(UserDefinedDataType $UserDefinedData): CustomerDataBase
    {
        $this->UserDefinedData = $UserDefinedData;
        return $this;
    }

    /**
     * @return ArrayOfUserDefinedDate
     */
    public function getUserDefinedDates(): ?ArrayOfUserDefinedDate
    {
        return $this->UserDefinedDates;
    }

    /**
     * @param ArrayOfUserDefinedDate $UserDefinedDates
     *
     * @return CustomerDataBase
     */
    public function setUserDefinedDates(ArrayOfUserDefinedDate $UserDefinedDates): CustomerDataBase
    {
        $this->UserDefinedDates = $UserDefinedDates;
        return $this;
    }

    /**
     * @return ArrayOfUserDefinedText
     */
    public function getUserDefinedTexts(): ?ArrayOfUserDefinedText
    {
        return $this->UserDefinedTexts;
    }

    /**
     * @param ArrayOfUserDefinedText $UserDefinedTexts
     *
     * @return CustomerDataBase
     */
    public function setUserDefinedTexts(ArrayOfUserDefinedText $UserDefinedTexts): CustomerDataBase
    {
        $this->UserDefinedTexts = $UserDefinedTexts;
        return $this;
    }

    /**
     * @return ArrayOfUserDefinedValue
     */
    public function getUserDefinedValues(): ?ArrayOfUserDefinedValue
    {
        return $this->UserDefinedValues;
    }

    /**
     * @param ArrayOfUserDefinedValue $UserDefinedValues
     *
     * @return CustomerDataBase
     */
    public function setUserDefinedValues(ArrayOfUserDefinedValue $UserDefinedValues): CustomerDataBase
    {
        $this->UserDefinedValues = $UserDefinedValues;
        return $this;
    }

    /**
     * @return string
     */
    public function getUsualStoreId(): ?string
    {
        return $this->UsualStoreId;
    }

    /**
     * @param string $UsualStoreId
     *
     * @return CustomerDataBase
     */
    public function setUsualStoreId(string $UsualStoreId): CustomerDataBase
    {
        $this->UsualStoreId = $UsualStoreId;
        return $this;
    }

}
