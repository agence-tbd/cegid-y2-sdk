<?php

namespace Y2\SaleDocument;

class Create_ShippingTax
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
    public function getAmount(): float
    {
      return $this->Amount;
    }

    /**
     * @param float $Amount
     * @return Create_ShippingTax
     */
    public function setAmount(float $Amount): Create_ShippingTax
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
      return $this->Id;
    }

    /**
     * @param string $Id
     * @return Create_ShippingTax
     */
    public function setId(string $Id): Create_ShippingTax
    {
      $this->Id = $Id;
      return $this;
    }

}
