<?php

namespace Y2\SaleDocument;

class Create_Reply
{

    /**
     * @var SaleDocumentKey $Key
     */
    protected $Key = null;

    
    public function __construct()
    {
    
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
     * @return Create_Reply
     */
    public function setKey(SaleDocumentKey $Key): Create_Reply
    {
      $this->Key = $Key;
      return $this;
    }

}
