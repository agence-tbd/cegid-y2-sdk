<?php

namespace Y2\SaleDocument;

class Get_Header
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
     * @var string $InternalReference
     */
    protected $InternalReference = null;

    /**
     * @var SaleDocumentKey $Key
     */
    protected $Key = null;

    /**
     * @var OmniChannel $OmniChannel
     */
    protected $OmniChannel = null;

    /**
     * @var DocumentOrigin $Origin
     */
    protected $Origin = null;

    /**
     * @var string $SalesPersonId
     */
    protected $SalesPersonId = null;

    /**
     * @var DocumentStatus $Status
     */
    protected $Status = null;

    /**
     * @var string $StoreId
     */
    protected $StoreId = null;

    /**
     * @var float $TaxExcludedTotalAmount
     */
    protected $TaxExcludedTotalAmount = null;

    /**
     * @var float $TaxIncludedTotalAmount
     */
    protected $TaxIncludedTotalAmount = null;

    /**
     * @var float $TotalQuantity
     */
    protected $TotalQuantity = null;

    /**
     * @var ArrayOfUserDefinedDate $UserDefinedDates
     */
    protected $UserDefinedDates = null;

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
     * @return Get_Header
     */
    public function setActive(bool $Active): Get_Header
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
     * @return Get_Header
     */
    public function setComment(string $Comment): Get_Header
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
     * @return Get_Header
     */
    public function setCurrencyId(string $CurrencyId): Get_Header
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
     * @return Get_Header
     */
    public function setCustomerId(string $CustomerId): Get_Header
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
     * @return Get_Header
     */
    public function setDate(\DateTime $Date = null, string $format=\DateTime::ATOM): Get_Header
    {
      if ($Date == null) {
       $this->Date = null;
      } else {
        $this->Date = $Date->format($format);
      }
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
     * @return Get_Header
     */
    public function setInternalReference(string $InternalReference): Get_Header
    {
      $this->InternalReference = $InternalReference;
      return $this;
    }

    /**
     * @return SaleDocumentKey
     */
    public function getKey(): ?SaleDocumentKey
    {
      return $this->Key;
    }

    /**
     * @param SaleDocumentKey $Key
     * @return Get_Header
     */
    public function setKey(SaleDocumentKey $Key): Get_Header
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return OmniChannel
     */
    public function getOmniChannel(): ?OmniChannel
    {
      return $this->OmniChannel;
    }

    /**
     * @param OmniChannel $OmniChannel
     * @return Get_Header
     */
    public function setOmniChannel(OmniChannel $OmniChannel): Get_Header
    {
      $this->OmniChannel = $OmniChannel;
      return $this;
    }

    /**
     * @return DocumentOrigin
     */
    public function getOrigin(): ?DocumentOrigin
    {
      return $this->Origin;
    }

    /**
     * @param DocumentOrigin $Origin
     * @return Get_Header
     */
    public function setOrigin(DocumentOrigin $Origin): Get_Header
    {
      $this->Origin = $Origin;
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
     * @return Get_Header
     */
    public function setSalesPersonId(string $SalesPersonId): Get_Header
    {
      $this->SalesPersonId = $SalesPersonId;
      return $this;
    }

    /**
     * @return DocumentStatus
     */
    public function getStatus(): ?DocumentStatus
    {
      return $this->Status;
    }

    /**
     * @param DocumentStatus $Status
     * @return Get_Header
     */
    public function setStatus(DocumentStatus $Status): Get_Header
    {
      $this->Status = $Status;
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
     * @return Get_Header
     */
    public function setStoreId(string $StoreId): Get_Header
    {
      $this->StoreId = $StoreId;
      return $this;
    }

    /**
     * @return float
     */
    public function getTaxExcludedTotalAmount(): ?float
    {
      return $this->TaxExcludedTotalAmount;
    }

    /**
     * @param float $TaxExcludedTotalAmount
     * @return Get_Header
     */
    public function setTaxExcludedTotalAmount(float $TaxExcludedTotalAmount): Get_Header
    {
      $this->TaxExcludedTotalAmount = $TaxExcludedTotalAmount;
      return $this;
    }

    /**
     * @return float
     */
    public function getTaxIncludedTotalAmount(): ?float
    {
      return $this->TaxIncludedTotalAmount;
    }

    /**
     * @param float $TaxIncludedTotalAmount
     * @return Get_Header
     */
    public function setTaxIncludedTotalAmount(float $TaxIncludedTotalAmount): Get_Header
    {
      $this->TaxIncludedTotalAmount = $TaxIncludedTotalAmount;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotalQuantity(): ?float
    {
      return $this->TotalQuantity;
    }

    /**
     * @param float $TotalQuantity
     * @return Get_Header
     */
    public function setTotalQuantity(float $TotalQuantity): Get_Header
    {
      $this->TotalQuantity = $TotalQuantity;
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
     * @return Get_Header
     */
    public function setUserDefinedDates(ArrayOfUserDefinedDate $UserDefinedDates): Get_Header
    {
      $this->UserDefinedDates = $UserDefinedDates;
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
     * @return Get_Header
     */
    public function setUserDefinedTables(ArrayOfUserDefinedTable $UserDefinedTables): Get_Header
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
     * @return Get_Header
     */
    public function setUserFields(ArrayOfUserField $UserFields): Get_Header
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
     * @return Get_Header
     */
    public function setWarehouseId(string $WarehouseId): Get_Header
    {
      $this->WarehouseId = $WarehouseId;
      return $this;
    }

}
