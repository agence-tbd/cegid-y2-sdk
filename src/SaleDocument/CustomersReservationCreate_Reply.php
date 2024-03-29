<?php

namespace Y2\SaleDocument;

class CustomersReservationCreate_Reply
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
     * @return CustomersReservationCreate_Reply
     */
    public function setKey(?SaleDocumentKey $Key): CustomersReservationCreate_Reply
    {
      $this->Key = $Key;
      return $this;
    }

}
