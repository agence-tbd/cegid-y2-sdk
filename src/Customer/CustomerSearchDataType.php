<?php

namespace Y2\Customer;

class CustomerSearchDataType extends CustomerDataBase
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
     * @var boolean $Closed
     */
    protected $Closed = null;

    /**
     * @var string $CompanyIdNumber
     */
    protected $CompanyIdNumber = null;

    /**
     * @var string $CreationStoreId
     */
    protected $CreationStoreId = null;

    /**
     * @var string $CustomerId
     */
    protected $CustomerId = null;

    /**
     * @var string $CustomerReference
     */
    protected $CustomerReference = null;

    /**
     * @var boolean $DirectMail
     */
    protected $DirectMail = null;

    /**
     * @var string $FiscalId
     */
    protected $FiscalId = null;

    /**
     * @var string $InvoiceCustomerId
     */
    protected $InvoiceCustomerId = null;

    /**
     * @var boolean $IsCustomer
     */
    protected $IsCustomer = null;

    /**
     * @var boolean $IsProspect
     */
    protected $IsProspect = null;

    /**
     * @var string $ItalianFiscalId
     */
    protected $ItalianFiscalId = null;

    /**
     * @var int $MaxNumberOfCustomers
     */
    protected $MaxNumberOfCustomers = null;

    /**
     * @var NationalityDataType $NationalityData
     */
    protected $NationalityData = null;

    /**
     * @var string $PassportNumber
     */
    protected $PassportNumber = null;


    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return string
     */
    public function getActivityCode(): string
    {
        return $this->ActivityCode;
    }

    /**
     * @param string $ActivityCode
     *
     * @return CustomerSearchDataType
     */
    public function setActivityCode(string $ActivityCode): CustomerSearchDataType
    {
        $this->ActivityCode = $ActivityCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getBarcode(): string
    {
        return $this->Barcode;
    }

    /**
     * @param string $Barcode
     *
     * @return CustomerSearchDataType
     */
    public function setBarcode(string $Barcode): CustomerSearchDataType
    {
        $this->Barcode = $Barcode;
        return $this;
    }

    /**
     * @return BirthDateDataType
     */
    public function getBirthDateData(): BirthDateDataType
    {
        return $this->BirthDateData;
    }

    /**
     * @param BirthDateDataType $BirthDateData
     *
     * @return CustomerSearchDataType
     */
    public function setBirthDateData(BirthDateDataType $BirthDateData): CustomerSearchDataType
    {
        $this->BirthDateData = $BirthDateData;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getClosed(): bool
    {
        return $this->Closed;
    }

    /**
     * @param boolean $Closed
     *
     * @return CustomerSearchDataType
     */
    public function setClosed(bool $Closed): CustomerSearchDataType
    {
        $this->Closed = $Closed;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyIdNumber(): string
    {
        return $this->CompanyIdNumber;
    }

    /**
     * @param string $CompanyIdNumber
     *
     * @return CustomerSearchDataType
     */
    public function setCompanyIdNumber(string $CompanyIdNumber): CustomerSearchDataType
    {
        $this->CompanyIdNumber = $CompanyIdNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreationStoreId(): string
    {
        return $this->CreationStoreId;
    }

    /**
     * @param string $CreationStoreId
     *
     * @return CustomerSearchDataType
     */
    public function setCreationStoreId(string $CreationStoreId): CustomerSearchDataType
    {
        $this->CreationStoreId = $CreationStoreId;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerId(): string
    {
        return $this->CustomerId;
    }

    /**
     * @param string $CustomerId
     *
     * @return CustomerSearchDataType
     */
    public function setCustomerId(string $CustomerId): CustomerSearchDataType
    {
        $this->CustomerId = $CustomerId;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerReference(): string
    {
        return $this->CustomerReference;
    }

    /**
     * @param string $CustomerReference
     *
     * @return CustomerSearchDataType
     */
    public function setCustomerReference(string $CustomerReference): CustomerSearchDataType
    {
        $this->CustomerReference = $CustomerReference;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getDirectMail(): bool
    {
        return $this->DirectMail;
    }

    /**
     * @param boolean $DirectMail
     *
     * @return CustomerSearchDataType
     */
    public function setDirectMail(bool $DirectMail): CustomerSearchDataType
    {
        $this->DirectMail = $DirectMail;
        return $this;
    }

    /**
     * @return string
     */
    public function getFiscalId(): string
    {
        return $this->FiscalId;
    }

    /**
     * @param string $FiscalId
     *
     * @return CustomerSearchDataType
     */
    public function setFiscalId(string $FiscalId): CustomerSearchDataType
    {
        $this->FiscalId = $FiscalId;
        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceCustomerId(): string
    {
        return $this->InvoiceCustomerId;
    }

    /**
     * @param string $InvoiceCustomerId
     *
     * @return CustomerSearchDataType
     */
    public function setInvoiceCustomerId(string $InvoiceCustomerId): CustomerSearchDataType
    {
        $this->InvoiceCustomerId = $InvoiceCustomerId;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsCustomer(): bool
    {
        return $this->IsCustomer;
    }

    /**
     * @param boolean $IsCustomer
     *
     * @return CustomerSearchDataType
     */
    public function setIsCustomer(bool $IsCustomer): CustomerSearchDataType
    {
        $this->IsCustomer = $IsCustomer;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsProspect(): bool
    {
        return $this->IsProspect;
    }

    /**
     * @param boolean $IsProspect
     *
     * @return CustomerSearchDataType
     */
    public function setIsProspect(bool $IsProspect): CustomerSearchDataType
    {
        $this->IsProspect = $IsProspect;
        return $this;
    }

    /**
     * @return string
     */
    public function getItalianFiscalId(): string
    {
        return $this->ItalianFiscalId;
    }

    /**
     * @param string $ItalianFiscalId
     *
     * @return CustomerSearchDataType
     */
    public function setItalianFiscalId(string $ItalianFiscalId): CustomerSearchDataType
    {
        $this->ItalianFiscalId = $ItalianFiscalId;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxNumberOfCustomers(): int
    {
        return $this->MaxNumberOfCustomers;
    }

    /**
     * @param int $MaxNumberOfCustomers
     *
     * @return CustomerSearchDataType
     */
    public function setMaxNumberOfCustomers(int $MaxNumberOfCustomers): CustomerSearchDataType
    {
        $this->MaxNumberOfCustomers = $MaxNumberOfCustomers;
        return $this;
    }

    /**
     * @return NationalityDataType
     */
    public function getNationalityData(): NationalityDataType
    {
        return $this->NationalityData;
    }

    /**
     * @param NationalityDataType $NationalityData
     *
     * @return CustomerSearchDataType
     */
    public function setNationalityData(NationalityDataType $NationalityData): CustomerSearchDataType
    {
        $this->NationalityData = $NationalityData;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassportNumber(): string
    {
        return $this->PassportNumber;
    }

    /**
     * @param string $PassportNumber
     *
     * @return CustomerSearchDataType
     */
    public function setPassportNumber(string $PassportNumber): CustomerSearchDataType
    {
        $this->PassportNumber = $PassportNumber;
        return $this;
    }

}
