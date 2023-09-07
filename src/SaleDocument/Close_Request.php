<?php

namespace Y2\SaleDocument;

class Close_Request
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
     * @return Close_Request
     */
    public function setIdentifier(SaleDocumentIdentifier $Identifier): Close_Request
    {
      $this->Identifier = $Identifier;
      return $this;
    }

}
