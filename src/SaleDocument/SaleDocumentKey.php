<?php

namespace Y2\SaleDocument;

class SaleDocumentKey
{

    /**
     * @var int $Number
     */
    protected $Number = null;

    /**
     * @var string $Stump
     */
    protected $Stump = null;

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
     * @return SaleDocumentKey
     */
    public function setNumber(int $Number): SaleDocumentKey
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return string
     */
    public function getStump(): string
    {
      return $this->Stump;
    }

    /**
     * @param string $Stump
     * @return SaleDocumentKey
     */
    public function setStump(string $Stump): SaleDocumentKey
    {
      $this->Stump = $Stump;
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
     * @return SaleDocumentKey
     */
    public function setType(string $Type): SaleDocumentKey
    {
      $this->Type = $Type;
      return $this;
    }

}
