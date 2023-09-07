<?php

namespace Y2\SaleDocument;

class GetHeaderList_Request
{

    /**
     * @var boolean $Active
     */
    protected $Active = null;

    /**
     * @var \DateTime $BeginDate
     */
    protected $BeginDate = null;

    /**
     * @var string $CustomerId
     */
    protected $CustomerId = null;

    /**
     * @var ArrayOfSaleDocumentType $DocumentTypes
     */
    protected $DocumentTypes = null;

    /**
     * @var \DateTime $EndDate
     */
    protected $EndDate = null;

    /**
     * @var Pager $Pager
     */
    protected $Pager = null;

    /**
     * @var ArrayOfstring $StoreIds
     */
    protected $StoreIds = null;


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
     * @return GetHeaderList_Request
     */
    public function setActive(bool $Active): GetHeaderList_Request
    {
      $this->Active = $Active;
      return $this;
    }

    /**
     * @return \DateTime|false|null
     */
    public function getBeginDate()
    {
      if ($this->BeginDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->BeginDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime|null $BeginDate
     * @param string $format
     * @return GetHeaderList_Request
     */
    public function setBeginDate(\DateTime $BeginDate = null, string $format=\DateTime::ATOM): GetHeaderList_Request
    {
      if ($BeginDate == null) {
       $this->BeginDate = null;
      } else {
        $this->BeginDate = $BeginDate->format($format);
      }
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
     * @return GetHeaderList_Request
     */
    public function setCustomerId(string $CustomerId): GetHeaderList_Request
    {
      $this->CustomerId = $CustomerId;
      return $this;
    }

    /**
     * @return ArrayOfSaleDocumentType
     */
    public function getDocumentTypes(): ?ArrayOfSaleDocumentType
    {
      return $this->DocumentTypes;
    }

    /**
     * @param ArrayOfSaleDocumentType $DocumentTypes
     * @return GetHeaderList_Request
     */
    public function setDocumentTypes(ArrayOfSaleDocumentType $DocumentTypes): GetHeaderList_Request
    {
      $this->DocumentTypes = $DocumentTypes;
      return $this;
    }

    /**
     * @return \DateTime|false|null
     */
    public function getEndDate()
    {
      if ($this->EndDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EndDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime|null $EndDate
     * @param string $format
     * @return GetHeaderList_Request
     */
    public function setEndDate(\DateTime $EndDate = null, string $format=\DateTime::ATOM): GetHeaderList_Request
    {
      if ($EndDate == null) {
       $this->EndDate = null;
      } else {
        $this->EndDate = $EndDate->format($format);
      }
      return $this;
    }

    /**
     * @return Pager
     */
    public function getPager(): ?Pager
    {
      return $this->Pager;
    }

    /**
     * @param Pager $Pager
     * @return GetHeaderList_Request
     */
    public function setPager(Pager $Pager): GetHeaderList_Request
    {
      $this->Pager = $Pager;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getStoreIds(): ?ArrayOfstring
    {
      return $this->StoreIds;
    }

    /**
     * @param ArrayOfstring $StoreIds
     * @return GetHeaderList_Request
     */
    public function setStoreIds(ArrayOfstring $StoreIds): GetHeaderList_Request
    {
      $this->StoreIds = $StoreIds;
      return $this;
    }

}
