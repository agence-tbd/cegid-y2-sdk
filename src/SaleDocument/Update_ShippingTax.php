<?php

namespace Y2\SaleDocument;

class Update_ShippingTax
{

    /**
     * @var float $Amount
     */
    protected $Amount = null;

    /**
     * @var string $Id
     */
    protected $Id = null;

    
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
     * @return Update_ShippingTax
     */
    public function setAmount(float $Amount): Update_ShippingTax
    {
      $this->Amount = $Amount;
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
     * @return Update_ShippingTax
     */
    public function setId(string $Id): Update_ShippingTax
    {
      $this->Id = $Id;
      return $this;
    }

}
