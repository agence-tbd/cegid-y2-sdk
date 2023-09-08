<?php

namespace Y2\SaleDocument;

class Get_ShippingTax
{

    /**
     * @var string $ShippingTaxCode
     */
    protected $ShippingTaxCode = null;

    /**
     * @var float $TaxExcludedAmount
     */
    protected $TaxExcludedAmount = null;

    /**
     * @var float $TaxIncludedAmount
     */
    protected $TaxIncludedAmount = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getShippingTaxCode(): ?string
    {
      return $this->ShippingTaxCode;
    }

    /**
     * @param string $ShippingTaxCode
     * @return Get_ShippingTax
     */
    public function setShippingTaxCode(?string $ShippingTaxCode): Get_ShippingTax
    {
      $this->ShippingTaxCode = $ShippingTaxCode;
      return $this;
    }

    /**
     * @return float
     */
    public function getTaxExcludedAmount(): ?float
    {
      return $this->TaxExcludedAmount;
    }

    /**
     * @param float $TaxExcludedAmount
     * @return Get_ShippingTax
     */
    public function setTaxExcludedAmount(?float $TaxExcludedAmount): Get_ShippingTax
    {
      $this->TaxExcludedAmount = $TaxExcludedAmount;
      return $this;
    }

    /**
     * @return float
     */
    public function getTaxIncludedAmount(): ?float
    {
      return $this->TaxIncludedAmount;
    }

    /**
     * @param float $TaxIncludedAmount
     * @return Get_ShippingTax
     */
    public function setTaxIncludedAmount(?float $TaxIncludedAmount): Get_ShippingTax
    {
      $this->TaxIncludedAmount = $TaxIncludedAmount;
      return $this;
    }

}
