<?php

namespace Y2\SaleDocument;

class SaleDocumentIdentifier
{

    /**
     * @var SaleDocumentKey $Key
     */
    protected $Key = null;

    /**
     * @var SaleDocumentReference $Reference
     */
    protected $Reference = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SaleDocumentKey
     */
    public function getKey(): SaleDocumentKey
    {
      return $this->Key;
    }

    /**
     * @param SaleDocumentKey $Key
     * @return SaleDocumentIdentifier
     */
    public function setKey(SaleDocumentKey $Key): SaleDocumentIdentifier
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return SaleDocumentReference
     */
    public function getReference(): SaleDocumentReference
    {
      return $this->Reference;
    }

    /**
     * @param SaleDocumentReference $Reference
     * @return SaleDocumentIdentifier
     */
    public function setReference(SaleDocumentReference $Reference): SaleDocumentIdentifier
    {
      $this->Reference = $Reference;
      return $this;
    }

}
