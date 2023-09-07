<?php

namespace Y2\Customer;

class CustomerData extends CustomerDataBase
{
    /**
     * @var string $ActivityCode
     */
    protected $ActivityCode = null;

    /**
     * @var string $Barcode
     */
    protected $Barcode = null;

    /**
     * @var BirthDateDataType $BirthDateData
     */
    protected $BirthDateData = null;

    /**
     * @var string $CompanyIdNumber
     */
    protected $CompanyIdNumber = null;

    /**
     * @var string $CompanyTitleId
     */
    protected $CompanyTitleId = null;

    /**
     * @var string $CurrencyId
     */
    protected $CurrencyId = null;

    /**
     * @var boolean $DirectMail
     */
    protected $DirectMail = null;

    /**
     * @var string $FiscalId
     */
    protected $FiscalId = null;

    /**
     * @var string $ItalianFiscalId
     */
    protected $ItalianFiscalId = null;

    /**
     * @var string $LanguageId
     */
    protected $LanguageId = null;

    /**
     * @var string $LongDescription
     */
    protected $LongDescription = null;

    /**
     * @var string $NationalityId
     */
    protected $NationalityId = null;

    /**
     * @var string $OptinAlternativeEmail
     */
    protected $OptinAlternativeEmail = null;

    /**
     * @var string $OptinEmail
     */
    protected $OptinEmail = null;

    /**
     * @var string $OptinHomePhone
     */
    protected $OptinHomePhone = null;

    /**
     * @var string $OptinMobile
     */
    protected $OptinMobile = null;

    /**
     * @var string $OptinOfficePhone
     */
    protected $OptinOfficePhone = null;

    /**
     * @var string $OptinPostal
     */
    protected $OptinPostal = null;

    /**
     * @var string $PassportNumber
     */
    protected $PassportNumber = null;

    /**
     * @var string $Sex
     */
    protected $Sex = null;

    /**
     * @var string $ShortName
     */
    protected $ShortName = null;

    /**
     * @var ArrayOfUserField $UserFields
     */
    protected $UserFields = null;

    /**
     * @var string $VATSystem
     */
    protected $VATSystem = null;

    /**
     * @var boolean $ValidAlternativeEmail
     */
    protected $ValidAlternativeEmail = null;

    /**
     * @var boolean $ValidEmail
     */
    protected $ValidEmail = null;

    /**
     * @var boolean $ValidHomePhone
     */
    protected $ValidHomePhone = null;

    /**
     * @var boolean $ValidMobile
     */
    protected $ValidMobile = null;

    /**
     * @var boolean $ValidOfficePhone
     */
    protected $ValidOfficePhone = null;


    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return string
     */
    public function getActivityCode(): ?string
    {
        return $this->ActivityCode;
    }

    /**
     * @param string $ActivityCode
     *
     * @return CustomerData
     */
    public function setActivityCode(string $ActivityCode): CustomerData
    {
        $this->ActivityCode = $ActivityCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getBarcode(): ?string
    {
        return $this->Barcode;
    }

    /**
     * @param string $Barcode
     *
     * @return CustomerData
     */
    public function setBarcode(string $Barcode): CustomerData
    {
        $this->Barcode = $Barcode;
        return $this;
    }

    /**
     * @return BirthDateDataType
     */
    public function getBirthDateData(): ?BirthDateDataType
    {
        return $this->BirthDateData;
    }

    /**
     * @param BirthDateDataType $BirthDateData
     *
     * @return CustomerData
     */
    public function setBirthDateData(BirthDateDataType $BirthDateData): CustomerData
    {
        $this->BirthDateData = $BirthDateData;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyIdNumber(): ?string
    {
        return $this->CompanyIdNumber;
    }

    /**
     * @param string $CompanyIdNumber
     *
     * @return CustomerData
     */
    public function setCompanyIdNumber(string $CompanyIdNumber): CustomerData
    {
        $this->CompanyIdNumber = $CompanyIdNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyTitleId(): ?string
    {
        return $this->CompanyTitleId;
    }

    /**
     * @param string $CompanyTitleId
     *
     * @return CustomerData
     */
    public function setCompanyTitleId(string $CompanyTitleId): CustomerData
    {
        $this->CompanyTitleId = $CompanyTitleId;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrencyId(): ?string
    {
        return $this->CurrencyId;
    }

    /**
     * @param string $CurrencyId
     *
     * @return CustomerData
     */
    public function setCurrencyId(string $CurrencyId): CustomerData
    {
        $this->CurrencyId = $CurrencyId;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getDirectMail(): ?bool
    {
        return $this->DirectMail;
    }

    /**
     * @param boolean $DirectMail
     *
     * @return CustomerData
     */
    public function setDirectMail(bool $DirectMail): CustomerData
    {
        $this->DirectMail = $DirectMail;
        return $this;
    }

    /**
     * @return string
     */
    public function getFiscalId(): ?string
    {
        return $this->FiscalId;
    }

    /**
     * @param string $FiscalId
     *
     * @return CustomerData
     */
    public function setFiscalId(string $FiscalId): CustomerData
    {
        $this->FiscalId = $FiscalId;
        return $this;
    }

    /**
     * @return string
     */
    public function getItalianFiscalId(): ?string
    {
        return $this->ItalianFiscalId;
    }

    /**
     * @param string $ItalianFiscalId
     *
     * @return CustomerData
     */
    public function setItalianFiscalId(string $ItalianFiscalId): CustomerData
    {
        $this->ItalianFiscalId = $ItalianFiscalId;
        return $this;
    }

    /**
     * @return string
     */
    public function getLanguageId(): ?string
    {
        return $this->LanguageId;
    }

    /**
     * @param string $LanguageId
     *
     * @return CustomerData
     */
    public function setLanguageId(string $LanguageId): CustomerData
    {
        $this->LanguageId = $LanguageId;
        return $this;
    }

    /**
     * @return string
     */
    public function getLongDescription(): ?string
    {
        return $this->LongDescription;
    }

    /**
     * @param string $LongDescription
     *
     * @return CustomerData
     */
    public function setLongDescription(string $LongDescription): CustomerData
    {
        $this->LongDescription = $LongDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getNationalityId(): ?string
    {
        return $this->NationalityId;
    }

    /**
     * @param string $NationalityId
     *
     * @return CustomerData
     */
    public function setNationalityId(string $NationalityId): CustomerData
    {
        $this->NationalityId = $NationalityId;
        return $this;
    }

    /**
     * @return string
     */
    public function getOptinAlternativeEmail(): ?string
    {
        return $this->OptinAlternativeEmail;
    }

    /**
     * @param string $OptinAlternativeEmail
     *
     * @return CustomerData
     */
    public function setOptinAlternativeEmail(string $OptinAlternativeEmail): CustomerData
    {
        $this->OptinAlternativeEmail = $OptinAlternativeEmail;
        return $this;
    }

    /**
     * @return string
     */
    public function getOptinEmail(): ?string
    {
        return $this->OptinEmail;
    }

    /**
     * @param string $OptinEmail
     *
     * @return CustomerData
     */
    public function setOptinEmail(string $OptinEmail): CustomerData
    {
        $this->OptinEmail = $OptinEmail;
        return $this;
    }

    /**
     * @return string
     */
    public function getOptinHomePhone(): ?string
    {
        return $this->OptinHomePhone;
    }

    /**
     * @param string $OptinHomePhone
     *
     * @return CustomerData
     */
    public function setOptinHomePhone(string $OptinHomePhone): CustomerData
    {
        $this->OptinHomePhone = $OptinHomePhone;
        return $this;
    }

    /**
     * @return string
     */
    public function getOptinMobile(): ?string
    {
        return $this->OptinMobile;
    }

    /**
     * @param string $OptinMobile
     *
     * @return CustomerData
     */
    public function setOptinMobile(string $OptinMobile): CustomerData
    {
        $this->OptinMobile = $OptinMobile;
        return $this;
    }

    /**
     * @return string
     */
    public function getOptinOfficePhone(): ?string
    {
        return $this->OptinOfficePhone;
    }

    /**
     * @param string $OptinOfficePhone
     *
     * @return CustomerData
     */
    public function setOptinOfficePhone(string $OptinOfficePhone): CustomerData
    {
        $this->OptinOfficePhone = $OptinOfficePhone;
        return $this;
    }

    /**
     * @return string
     */
    public function getOptinPostal(): ?string
    {
        return $this->OptinPostal;
    }

    /**
     * @param string $OptinPostal
     *
     * @return CustomerData
     */
    public function setOptinPostal(string $OptinPostal): CustomerData
    {
        $this->OptinPostal = $OptinPostal;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassportNumber(): ?string
    {
        return $this->PassportNumber;
    }

    /**
     * @param string $PassportNumber
     *
     * @return CustomerData
     */
    public function setPassportNumber(string $PassportNumber): CustomerData
    {
        $this->PassportNumber = $PassportNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getSex(): ?string
    {
        return $this->Sex;
    }

    /**
     * @param string $Sex
     *
     * @return CustomerData
     */
    public function setSex(string $Sex): CustomerData
    {
        $this->Sex = $Sex;
        return $this;
    }

    /**
     * @return string
     */
    public function getShortName(): ?string
    {
        return $this->ShortName;
    }

    /**
     * @param string $ShortName
     *
     * @return CustomerData
     */
    public function setShortName(string $ShortName): CustomerData
    {
        $this->ShortName = $ShortName;
        return $this;
    }

    /**
     * @return ArrayOfUserField
     */
    public function getUserFields(): ?ArrayOfUserField
    {
        return $this->UserFields;
    }

    /**
     * @param ArrayOfUserField $UserFields
     *
     * @return CustomerData
     */
    public function setUserFields(ArrayOfUserField $UserFields): CustomerData
    {
        $this->UserFields = $UserFields;
        return $this;
    }

    /**
     * @return string
     */
    public function getVATSystem(): ?string
    {
        return $this->VATSystem;
    }

    /**
     * @param string $VATSystem
     *
     * @return CustomerData
     */
    public function setVATSystem(string $VATSystem): CustomerData
    {
        $this->VATSystem = $VATSystem;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getValidAlternativeEmail(): ?bool
    {
        return $this->ValidAlternativeEmail;
    }

    /**
     * @param boolean $ValidAlternativeEmail
     *
     * @return CustomerData
     */
    public function setValidAlternativeEmail(bool $ValidAlternativeEmail): CustomerData
    {
        $this->ValidAlternativeEmail = $ValidAlternativeEmail;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getValidEmail(): ?bool
    {
        return $this->ValidEmail;
    }

    /**
     * @param boolean $ValidEmail
     *
     * @return CustomerData
     */
    public function setValidEmail(bool $ValidEmail): CustomerData
    {
        $this->ValidEmail = $ValidEmail;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getValidHomePhone(): ?bool
    {
        return $this->ValidHomePhone;
    }

    /**
     * @param boolean $ValidHomePhone
     *
     * @return CustomerData
     */
    public function setValidHomePhone(bool $ValidHomePhone): CustomerData
    {
        $this->ValidHomePhone = $ValidHomePhone;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getValidMobile(): ?bool
    {
        return $this->ValidMobile;
    }

    /**
     * @param boolean $ValidMobile
     *
     * @return CustomerData
     */
    public function setValidMobile(bool $ValidMobile): CustomerData
    {
        $this->ValidMobile = $ValidMobile;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getValidOfficePhone(): ?bool
    {
        return $this->ValidOfficePhone;
    }

    /**
     * @param boolean $ValidOfficePhone
     *
     * @return CustomerData
     */
    public function setValidOfficePhone(bool $ValidOfficePhone): CustomerData
    {
        $this->ValidOfficePhone = $ValidOfficePhone;
        return $this;
    }

}
