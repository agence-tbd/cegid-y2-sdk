<?php

namespace Y2\SaleDocument;

class Create_Tax
{

    /**
     * @var float $Amount
     */
    protected $Amount = null;

    /**
     * @var string $FamilyId
     */
    protected $FamilyId = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return float
     */
    public function getAmount(): ?float
    {
      return $this->Amount;
    }

    /**
     * @param float $Amount
     * @return Create_Tax
     */
    public function setAmount(?float $Amount): Create_Tax
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getFamilyId(): ?string
    {
      return $this->FamilyId;
    }

    /**
     * @param string $FamilyId
     * @return Create_Tax
     */
    public function setFamilyId(?string $FamilyId): Create_Tax
    {
      $this->FamilyId = $FamilyId;
      return $this;
    }

}
