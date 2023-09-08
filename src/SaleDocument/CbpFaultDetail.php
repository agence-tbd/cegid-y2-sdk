<?php

namespace Y2\SaleDocument;

class CbpFaultDetail
{

    /**
     * @var string $Cause
     */
    protected $Cause = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $Id
     */
    protected $Id = null;

    /**
     * @var string $Message
     */
    protected $Message = null;

    /**
     * @var string $SourceLocation
     */
    protected $SourceLocation = null;

    /**
     * @var string $ToDo
     */
    protected $ToDo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCause(): ?string
    {
      return $this->Cause;
    }

    /**
     * @param string $Cause
     * @return CbpFaultDetail
     */
    public function setCause(?string $Cause): CbpFaultDetail
    {
      $this->Cause = $Cause;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): ?string
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return CbpFaultDetail
     */
    public function setDescription(?string $Description): CbpFaultDetail
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return string
     */
    public function getId(): ?string
    {
      return $this->Id;
    }

    /**
     * @param string $Id
     * @return CbpFaultDetail
     */
    public function setId(?string $Id): CbpFaultDetail
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessage(): ?string
    {
      return $this->Message;
    }

    /**
     * @param string $Message
     * @return CbpFaultDetail
     */
    public function setMessage(?string $Message): CbpFaultDetail
    {
      $this->Message = $Message;
      return $this;
    }

    /**
     * @return string
     */
    public function getSourceLocation(): ?string
    {
      return $this->SourceLocation;
    }

    /**
     * @param string $SourceLocation
     * @return CbpFaultDetail
     */
    public function setSourceLocation(?string $SourceLocation): CbpFaultDetail
    {
      $this->SourceLocation = $SourceLocation;
      return $this;
    }

    /**
     * @return string
     */
    public function getToDo(): ?string
    {
      return $this->ToDo;
    }

    /**
     * @param string $ToDo
     * @return CbpFaultDetail
     */
    public function setToDo(?string $ToDo): CbpFaultDetail
    {
      $this->ToDo = $ToDo;
      return $this;
    }

}
