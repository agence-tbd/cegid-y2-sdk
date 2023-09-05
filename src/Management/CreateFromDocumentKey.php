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
     * @var string $Type
     */
    protected $Type = null;

    public function __construct()
    {

    }

    /**
     * @return int
     */
    public function getNumber(): int
    {
      return $this->Number;
    }

    /**
     * @param int $Number
     * @return CreateFromDocumentKey
     */
    public function setNumber(int $Number): CreateFromDocumentKey
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return string
     */
    public function getStub(): string
    {
      return $this->Stub;
    }

    /**
     * @param string $Stub
     * @return CreateFromDocumentKey
     */
    public function setStub(string $Stub): CreateFromDocumentKey
    {
      $this->Stub = $Stub;
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
     * @return CreateFromDocumentKey
     */
    public function setType(string $Type): CreateFromDocumentKey
    {
      $this->Type = $Type;
      return $this;
    }

}
