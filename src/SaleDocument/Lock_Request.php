<?php

namespace Y2\SaleDocument;

class Lock_Request
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
    public function getIdentifier(): SaleDocumentIdentifier
    {
      return $this->Identifier;
    }

    /**
     * @param SaleDocumentIdentifier $Identifier
     * @return Lock_Request
     */
    public function setIdentifier(SaleDocumentIdentifier $Identifier): Lock_Request
    {
      $this->Identifier = $Identifier;
      return $this;
    }

    /**
     * @return string
     */
    public function getReasonId(): string
    {
      return $this->ReasonId;
    }

    /**
     * @param string $ReasonId
     * @return Lock_Request
     */
    public function setReasonId(string $ReasonId): Lock_Request
    {
      $this->ReasonId = $ReasonId;
      return $this;
    }

}
