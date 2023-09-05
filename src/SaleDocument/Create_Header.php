<?php

namespace Y2\SaleDocument;

class Create_Header
{
    /**
     * @var boolean $Active
     */
    protected $Active = null;

    /**
     * @var string $Comment
     */
    protected $Comment = null;

    /**
     * @var string $CurrencyId
     */
    protected $CurrencyId = null;

    /**
     * @var string $CustomerId
     */
    protected $CustomerId = null;

    /**
     * @var \DateTime $Date
     */
    protected $Date = null;

    /**
     * @var SaleDocumentLineIdentifier $Deposit
     */
    protected $Deposit = null;

    /**
     * @var string $ExternalReference
     */
    protected $ExternalReference = null;

    /**
     * @var \DateTime $ExternalReferenceDate
     */
    protected $ExternalReferenceDate = null;

    /**
     * @var string $FollowedReference
     */
    protected $FollowedReference = null;

    /**
     * @var string $InternalReference
     */
    protected $InternalReference = null;

    /**
     * @var boolean $LinesUnmodifiable
     */
    protected $LinesUnmodifiable = null;

    /**
     * @var OmniChannel $OmniChannel
     */
    protected $OmniChannel = null;

    /**
     * @see DocumentOrigin
     * @var string $Origin
     */
    protected $Origin = null;

    /**
     * @var string $SalesPersonId
     */
    protected $SalesPersonId = null;

    /**
     * @var string $StoreId
     */
    protected $StoreId = null;

    /**
     * @var boolean $TaxExcluded
     */
    protected $TaxExcluded = null;

    /**
     * @var string $Type
     */
    protected $Type = null;

    /**
     * @var ArrayOfUserDefinedDate $UserDefinedDates
     */
    protected $UserDefinedDates = null;

    /**
     * @var ArrayOfUserDefinedTableCustomer $UserDefinedTableCustomers
     */
    protected $UserDefinedTableCustomers = null;

    /**
     * @var ArrayOfUserDefinedTable $UserDefinedTables
     */
    protected $UserDefinedTables = null;

    /**
     * @var ArrayOfUserField $UserFields
     */
    protected $UserFields = null;

    /**
     * @var string $WarehouseId
     */
    protected $WarehouseId = null;

    /**
     * @var string $TaxSystemId
     */
    protected $TaxSystemId = null;


    public function __construct()
    {

    }

    /**
     * @return boolean
     */
    public function getActive(): bool
    {
        return $this->Active;
    }

    /**
     * @param boolean $Active
     *
     * @return Create_Header
     */
    public function setActive(bool $Active): Create_Header
    {
        $this->Active = $Active;
        return $this;
    }

    /**
     * @return string
     */
    public function getComment(): string
    {
        return $this->Comment;
    }

    /**
     * @param string $Comment
     *
     * @return Create_Header
     */
    public function setComment(string $Comment): Create_Header
    {
        $this->Comment = $Comment;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrencyId(): string
    {
        return $this->CurrencyId;
    }

    /**
     * @param string $CurrencyId
     *
     * @return Create_Header
     */
    public function setCurrencyId(string $CurrencyId): Create_Header
    {
        $this->CurrencyId = $CurrencyId;
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
     * @return Create_Header
     */
    public function setCustomerId(string $CustomerId): Create_Header
    {
        $this->CustomerId = $CustomerId;
        return $this;
    }

    /**
     * @return \DateTime|false|null
     */
    public function getDate()
    {
        if ($this->Date == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->Date);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime|null $Date
     * @param string $format
     * @return Create_Header
     */
    public function setDate(\DateTime $Date = null, string $format=\DateTime::ATOM): Create_Header
    {
        if ($Date == null) {
            $this->Date = null;
        } else {
            $this->Date = $Date->format($format);
        }
        return $this;
    }

    /**
     * @return SaleDocumentLineIdentifier
     */
    public function getDeposit(): SaleDocumentLineIdentifier
    {
        return $this->Deposit;
    }

    /**
     * @param SaleDocumentLineIdentifier $Deposit
     *
     * @return Create_Header
     */
    public function setDeposit(SaleDocumentLineIdentifier $Deposit): Create_Header
    {
        $this->Deposit = $Deposit;
        return $this;
    }

    /**
     * @return string
     */
    public function getExternalReference(): string
    {
        return $this->ExternalReference;
    }

    /**
     * @param string $ExternalReference
     *
     * @return Create_Header
     */
    public function setExternalReference(string $ExternalReference): Create_Header
    {
        $this->ExternalReference = $ExternalReference;
        return $this;
    }

    /**
     * @return \DateTime|false|null
     */
    public function getExternalReferenceDate()
    {
        if ($this->ExternalReferenceDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->ExternalReferenceDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime|null $ExternalReferenceDate
     * @param string $format
     * @return Create_Header
     */
    public function setExternalReferenceDate(\DateTime $ExternalReferenceDate = null, string $format=\DateTime::ATOM): Create_Header
    {
        if ($ExternalReferenceDate == null) {
            $this->ExternalReferenceDate = null;
        } else {
            $this->ExternalReferenceDate = $ExternalReferenceDate->format($format);
        }
        return $this;
    }

    /**
     * @return string
     */
    public function getFollowedReference(): string
    {
        return $this->FollowedReference;
    }

    /**
     * @param string $FollowedReference
     *
     * @return Create_Header
     */
    public function setFollowedReference(string $FollowedReference): Create_Header
    {
        $this->FollowedReference = $FollowedReference;
        return $this;
    }

    /**
     * @return string
     */
    public function getInternalReference(): string
    {
        return $this->InternalReference;
    }

    /**
     * @param string $InternalReference
     *
     * @return Create_Header
     */
    public function setInternalReference(string $InternalReference): Create_Header
    {
        $this->InternalReference = $InternalReference;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getLinesUnmodifiable(): bool
    {
        return $this->LinesUnmodifiable;
    }

    /**
     * @param boolean $LinesUnmodifiable
     *
     * @return Create_Header
     */
    public function setLinesUnmodifiable(bool $LinesUnmodifiable): Create_Header
    {
        $this->LinesUnmodifiable = $LinesUnmodifiable;
        return $this;
    }

    /**
     * @return OmniChannel
     */
    public function getOmniChannel(): OmniChannel
    {
        return $this->OmniChannel;
    }

    /**
     * @param OmniChannel $OmniChannel
     *
     * @return Create_Header
     */
    public function setOmniChannel(OmniChannel $OmniChannel): Create_Header
    {
        $this->OmniChannel = $OmniChannel;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrigin(): string
    {
        return $this->Origin;
    }

    /**
     * @param string $Origin
     *
     * @return Create_Header
     */
    public function setOrigin(string $Origin): Create_Header
    {
        $this->Origin = $Origin;
        return $this;
    }

    /**
     * @return string
     */
    public function getSalesPersonId(): string
    {
        return $this->SalesPersonId;
    }

    /**
     * @param string $SalesPersonId
     *
     * @return Create_Header
     */
    public function setSalesPersonId(string $SalesPersonId): Create_Header
    {
        $this->SalesPersonId = $SalesPersonId;
        return $this;
    }

    /**
     * @return string
     */
    public function getStoreId(): string
    {
        return $this->StoreId;
    }

    /**
     * @param string $StoreId
     *
     * @return Create_Header
     */
    public function setStoreId(string $StoreId): Create_Header
    {
        $this->StoreId = $StoreId;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getTaxExcluded(): bool
    {
        return $this->TaxExcluded;
    }

    /**
     * @param boolean $TaxExcluded
     *
     * @return Create_Header
     */
    public function setTaxExcluded(bool $TaxExcluded): Create_Header
    {
        $this->TaxExcluded = $TaxExcluded;
        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->Type;
    }

    /**
     * @param string $Type
     *
     * @return Create_Header
     */
    public function setType(string $Type): Create_Header
    {
        $this->Type = $Type;
        return $this;
    }

    /**
     * @return ArrayOfUserDefinedDate
     */
    public function getUserDefinedDates(): ArrayOfUserDefinedDate
    {
        return $this->UserDefinedDates;
    }

    /**
     * @param ArrayOfUserDefinedDate $UserDefinedDates
     *
     * @return Create_Header
     */
    public function setUserDefinedDates(ArrayOfUserDefinedDate $UserDefinedDates): Create_Header
    {
        $this->UserDefinedDates = $UserDefinedDates;
        return $this;
    }

    /**
     * @return ArrayOfUserDefinedTableCustomer
     */
    public function getUserDefinedTableCustomers(): ArrayOfUserDefinedTableCustomer
    {
        return $this->UserDefinedTableCustomers;
    }

    /**
     * @param ArrayOfUserDefinedTableCustomer $UserDefinedTableCustomers
     *
     * @return Create_Header
     */
    public function setUserDefinedTableCustomers(ArrayOfUserDefinedTableCustomer $UserDefinedTableCustomers): Create_Header
    {
        $this->UserDefinedTableCustomers = $UserDefinedTableCustomers;
        return $this;
    }

    /**
     * @return ArrayOfUserDefinedTable
     */
    public function getUserDefinedTables(): ArrayOfUserDefinedTable
    {
        return $this->UserDefinedTables;
    }

    /**
     * @param ArrayOfUserDefinedTable $UserDefinedTables
     *
     * @return Create_Header
     */
    public function setUserDefinedTables(ArrayOfUserDefinedTable $UserDefinedTables): Create_Header
    {
        $this->UserDefinedTables = $UserDefinedTables;
        return $this;
    }

    /**
     * @return ArrayOfUserField
     */
    public function getUserFields(): ArrayOfUserField
    {
        return $this->UserFields;
    }

    /**
     * @param ArrayOfUserField $UserFields
     *
     * @return Create_Header
     */
    public function setUserFields(ArrayOfUserField $UserFields): Create_Header
    {
        $this->UserFields = $UserFields;
        return $this;
    }

    /**
     * @return string
     */
    public function getWarehouseId(): string
    {
        return $this->WarehouseId;
    }

    /**
     * @param string $WarehouseId
     *
     * @return Create_Header
     */
    public function setWarehouseId(string $WarehouseId): Create_Header
    {
        $this->WarehouseId = $WarehouseId;
        return $this;
    }

    /**
     * @return string
     */
    public function getTaxSystemId(): string
    {
        return $this->TaxSystemId;
    }

    /**
     * @param string $taxSystemId
     *
     * @return Create_Header
     */
    public function setTaxSystemId(string $taxSystemId = null): Create_Header
    {
        if ($taxSystemId == null) {
            $this->TaxSystemId = null;
        } else {
            $this->TaxSystemId = $taxSystemId;
        }
        return $this;
    }
}
