<?php

namespace Y2\SaleDocument;

class CustomersReservationCreate_Header
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
     * @var \DateTime $ExpirationDate
     */
    protected $ExpirationDate = null;

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


    public function __construct()
    {

    }

    /**
     * @return boolean
     */
    public function getActive(): ?bool
    {
      return $this->Active;
    }

    /**
     * @param boolean $Active
     * @return CustomersReservationCreate_Header
     */
    public function setActive(bool $Active): CustomersReservationCreate_Header
    {
      $this->Active = $Active;
      return $this;
    }

    /**
     * @return string
     */
    public function getComment(): ?string
    {
      return $this->Comment;
    }

    /**
     * @param string $Comment
     * @return CustomersReservationCreate_Header
     */
    public function setComment(string $Comment): CustomersReservationCreate_Header
    {
      $this->Comment = $Comment;
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
     * @return CustomersReservationCreate_Header
     */
    public function setCurrencyId(string $CurrencyId): CustomersReservationCreate_Header
    {
      $this->CurrencyId = $CurrencyId;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerId(): ?string
    {
      return $this->CustomerId;
    }

    /**
     * @param string $CustomerId
     * @return CustomersReservationCreate_Header
     */
    public function setCustomerId(string $CustomerId): CustomersReservationCreate_Header
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
     * @return CustomersReservationCreate_Header
     */
    public function setDate(\DateTime $Date = null, string $format=\DateTime::ATOM): CustomersReservationCreate_Header
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
    public function getDeposit(): ?SaleDocumentLineIdentifier
    {
      return $this->Deposit;
    }

    /**
     * @param SaleDocumentLineIdentifier $Deposit
     * @return CustomersReservationCreate_Header
     */
    public function setDeposit(SaleDocumentLineIdentifier $Deposit): CustomersReservationCreate_Header
    {
      $this->Deposit = $Deposit;
      return $this;
    }

    /**
     * @return \DateTime|false|null
     */
    public function getExpirationDate()
    {
      if ($this->ExpirationDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ExpirationDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime|null $ExpirationDate
     * @param string $format
     * @return CustomersReservationCreate_Header
     */
    public function setExpirationDate(\DateTime $ExpirationDate = null, string $format=\DateTime::ATOM): CustomersReservationCreate_Header
    {
      if ($ExpirationDate == null) {
       $this->ExpirationDate = null;
      } else {
        $this->ExpirationDate = $ExpirationDate->format($format);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalReference(): ?string
    {
      return $this->ExternalReference;
    }

    /**
     * @param string $ExternalReference
     * @return CustomersReservationCreate_Header
     */
    public function setExternalReference(string $ExternalReference): CustomersReservationCreate_Header
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
     * @return CustomersReservationCreate_Header
     */
    public function setExternalReferenceDate(\DateTime $ExternalReferenceDate = null, string $format=\DateTime::ATOM): CustomersReservationCreate_Header
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
    public function getFollowedReference(): ?string
    {
      return $this->FollowedReference;
    }

    /**
     * @param string $FollowedReference
     * @return CustomersReservationCreate_Header
     */
    public function setFollowedReference(string $FollowedReference): CustomersReservationCreate_Header
    {
      $this->FollowedReference = $FollowedReference;
      return $this;
    }

    /**
     * @return string
     */
    public function getInternalReference(): ?string
    {
      return $this->InternalReference;
    }

    /**
     * @param string $InternalReference
     * @return CustomersReservationCreate_Header
     */
    public function setInternalReference(string $InternalReference): CustomersReservationCreate_Header
    {
      $this->InternalReference = $InternalReference;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLinesUnmodifiable(): ?bool
    {
      return $this->LinesUnmodifiable;
    }

    /**
     * @param boolean $LinesUnmodifiable
     * @return CustomersReservationCreate_Header
     */
    public function setLinesUnmodifiable(bool $LinesUnmodifiable): CustomersReservationCreate_Header
    {
      $this->LinesUnmodifiable = $LinesUnmodifiable;
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
     * @return CustomersReservationCreate_Header
     */
    public function setSalesPersonId(string $SalesPersonId): CustomersReservationCreate_Header
    {
      $this->SalesPersonId = $SalesPersonId;
      return $this;
    }

    /**
     * @return string
     */
    public function getStoreId(): ?string
    {
      return $this->StoreId;
    }

    /**
     * @param string $StoreId
     * @return CustomersReservationCreate_Header
     */
    public function setStoreId(string $StoreId): CustomersReservationCreate_Header
    {
      $this->StoreId = $StoreId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTaxExcluded(): ?bool
    {
      return $this->TaxExcluded;
    }

    /**
     * @param boolean $TaxExcluded
     * @return CustomersReservationCreate_Header
     */
    public function setTaxExcluded(bool $TaxExcluded): CustomersReservationCreate_Header
    {
      $this->TaxExcluded = $TaxExcluded;
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
     * @return CustomersReservationCreate_Header
     */
    public function setUserDefinedDates(ArrayOfUserDefinedDate $UserDefinedDates): CustomersReservationCreate_Header
    {
      $this->UserDefinedDates = $UserDefinedDates;
      return $this;
    }

    /**
     * @return ArrayOfUserDefinedTableCustomer
     */
    public function getUserDefinedTableCustomers(): ?ArrayOfUserDefinedTableCustomer
    {
      return $this->UserDefinedTableCustomers;
    }

    /**
     * @param ArrayOfUserDefinedTableCustomer $UserDefinedTableCustomers
     * @return CustomersReservationCreate_Header
     */
    public function setUserDefinedTableCustomers(ArrayOfUserDefinedTableCustomer $UserDefinedTableCustomers): CustomersReservationCreate_Header
    {
      $this->UserDefinedTableCustomers = $UserDefinedTableCustomers;
      return $this;
    }

    /**
     * @return ArrayOfUserDefinedTable
     */
    public function getUserDefinedTables(): ?ArrayOfUserDefinedTable
    {
      return $this->UserDefinedTables;
    }

    /**
     * @param ArrayOfUserDefinedTable $UserDefinedTables
     * @return CustomersReservationCreate_Header
     */
    public function setUserDefinedTables(ArrayOfUserDefinedTable $UserDefinedTables): CustomersReservationCreate_Header
    {
      $this->UserDefinedTables = $UserDefinedTables;
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
     * @return CustomersReservationCreate_Header
     */
    public function setUserFields(ArrayOfUserField $UserFields): CustomersReservationCreate_Header
    {
      $this->UserFields = $UserFields;
      return $this;
    }

    /**
     * @return string
     */
    public function getWarehouseId(): ?string
    {
      return $this->WarehouseId;
    }

    /**
     * @param string $WarehouseId
     * @return CustomersReservationCreate_Header
     */
    public function setWarehouseId(string $WarehouseId): CustomersReservationCreate_Header
    {
      $this->WarehouseId = $WarehouseId;
      return $this;
    }

}
