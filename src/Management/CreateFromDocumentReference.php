<?php

namespace Y2\Management;

class CreateFromDocumentReference
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
     * @return CreateFromDocumentReference
     */
    public function setCustomerId(string $CustomerId): CreateFromDocumentReference
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
     * @return CreateFromDocumentReference
     */
    public function setInternalReference(string $InternalReference): CreateFromDocumentReference
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
     * @return CreateFromDocumentReference
     */
    public function setType(string $Type): CreateFromDocumentReference
    {
      $this->Type = $Type;
      return $this;
    }

}
