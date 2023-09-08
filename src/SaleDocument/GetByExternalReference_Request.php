<?php

namespace Y2\SaleDocument;

class GetByExternalReference_Request
{

    /**
     * @var string $ExternalReference
     */
    protected $ExternalReference = null;

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
    public function getExternalReference(): ?string
    {
      return $this->ExternalReference;
    }

    /**
     * @param string $ExternalReference
     * @return GetByExternalReference_Request
     */
    public function setExternalReference(?string $ExternalReference): GetByExternalReference_Request
    {
      $this->ExternalReference = $ExternalReference;
      return $this;
    }

    /**
     * @return string
     */
    public function getType(): ?string
    {
      return $this->Type;
    }

    /**
     * @param string $Type
     * @return GetByExternalReference_Request
     */
    public function setType(?string $Type): GetByExternalReference_Request
    {
      $this->Type = $Type;
      return $this;
    }

}
