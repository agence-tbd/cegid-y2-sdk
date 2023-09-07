<?php

namespace Y2\SaleDocument;

class Cancel_Request
{

    /**
     * @var SaleDocumentIdentifier $Identifier
     */
    protected $Identifier = null;

    /**
     * @var string $ReasonId
     */
    protected $ReasonId = null;

    
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
     * @return Cancel_Request
     */
    public function setIdentifier(SaleDocumentIdentifier $Identifier): Cancel_Request
    {
      $this->Identifier = $Identifier;
      return $this;
    }

    /**
     * @return string
     */
    public function getReasonId(): ?string
    {
      return $this->ReasonId;
    }

    /**
     * @param string $ReasonId
     * @return Cancel_Request
     */
    public function setReasonId(string $ReasonId): Cancel_Request
    {
      $this->ReasonId = $ReasonId;
      return $this;
    }

}
