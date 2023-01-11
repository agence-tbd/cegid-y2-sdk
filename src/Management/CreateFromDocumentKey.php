<?php

namespace Y2\Management;

class CreateFromDocumentKey
{
    /**
     * @var int $Number
     */
    protected $Number = null;

    /**
     * @var string $Stub
     */
    protected $Stub = null;

    /**
     * @var CreateFromCustomerOrderDocumentTypeCreatResult $Type
     */
    protected $Type = null;

    public function __construct()
    {

    }

    /**
     * @return int
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param int $Number
     * @return CreateFromDocumentKey
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return string
     */
    public function getStub()
    {
      return $this->Stub;
    }

    /**
     * @param string $Stub
     * @return CreateFromDocumentKey
     */
    public function setStub($Stub)
    {
      $this->Stub = $Stub;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param string $Type
     * @return CreateFromDocumentKey
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
