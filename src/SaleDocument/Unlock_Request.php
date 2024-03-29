<?php

namespace Y2\SaleDocument;

class Unlock_Request
{

    /**
     * @var SaleDocumentIdentifier $Identifier
     */
    protected $Identifier = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SaleDocumentIdentifier
     */
    public function getIdentifier(): ?SaleDocumentIdentifier
    {
      return $this->Identifier;
    }

    /**
     * @param SaleDocumentIdentifier $Identifier
     * @return Unlock_Request
     */
    public function setIdentifier(?SaleDocumentIdentifier $Identifier): Unlock_Request
    {
      $this->Identifier = $Identifier;
      return $this;
    }

}
