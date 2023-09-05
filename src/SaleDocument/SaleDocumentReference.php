<?php

namespace Y2\SaleDocument;

class SaleDocumentReference
{

    /**
     * @var string $CustomerId
     */
    protected $CustomerId = null;

    /**
     * @var string $InternalReference
     */
    protected $InternalReference = null;

    /**
     * @var string $Type
     */
    protected $Type = null;

    
    public function __construct()
    {
    
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
     * @return SaleDocumentReference
     */
    public function setCustomerId(string $CustomerId): SaleDocumentReference
    {
      $this->CustomerId = $CustomerId;
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
     * @return SaleDocumentReference
     */
    public function setInternalReference(string $InternalReference): SaleDocumentReference
    {
      $this->InternalReference = $InternalReference;
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
     * @return SaleDocumentReference
     */
    public function setType(string $Type): SaleDocumentReference
    {
      $this->Type = $Type;
      return $this;
    }

}
