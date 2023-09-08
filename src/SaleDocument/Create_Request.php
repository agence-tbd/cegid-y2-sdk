<?php

namespace Y2\SaleDocument;

class Create_Request
{

    /**
     * @var ?Address $DeliveryAddress
     */
    protected $DeliveryAddress = null;

    /**
     * @var Create_Header $Header
     */
    protected $Header = null;

    /**
     * @var Address $InvoicingAddress
     */
    protected $InvoicingAddress = null;

    /**
     * @var ArrayOfCreate_Line $Lines
     */
    protected $Lines = null;

    /**
     * @var ArrayOfCreate_Payment $Payments
     */
    protected $Payments = null;

    /**
     * @var ArrayOfCreate_ShippingTax $ShippingTaxes
     */
    protected $ShippingTaxes = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ?Address
     */
    public function getDeliveryAddress(): ?Address
    {
      return $this->DeliveryAddress;
    }

    /**
     * @param ?Address $DeliveryAddress
     * @return Create_Request
     */
    public function setDeliveryAddress(?Address $DeliveryAddress): Create_Request
    {
      $this->DeliveryAddress = $DeliveryAddress;
      return $this;
    }

    /**
     * @return Create_Header
     */
    public function getHeader(): ?Create_Header
    {
      return $this->Header;
    }

    /**
     * @param Create_Header $Header
     * @return Create_Request
     */
    public function setHeader(?Create_Header $Header): Create_Request
    {
      $this->Header = $Header;
      return $this;
    }

    /**
     * @return Address
     */
    public function getInvoicingAddress(): ?Address
    {
      return $this->InvoicingAddress;
    }

    /**
     * @param Address $InvoicingAddress
     * @return Create_Request
     */
    public function setInvoicingAddress(?Address $InvoicingAddress): Create_Request
    {
      $this->InvoicingAddress = $InvoicingAddress;
      return $this;
    }

    /**
     * @return ArrayOfCreate_Line
     */
    public function getLines(): ?ArrayOfCreate_Line
    {
      return $this->Lines;
    }

    /**
     * @param ArrayOfCreate_Line $Lines
     * @return Create_Request
     */
    public function setLines(?ArrayOfCreate_Line $Lines): Create_Request
    {
      $this->Lines = $Lines;
      return $this;
    }

    /**
     * @return ArrayOfCreate_Payment
     */
    public function getPayments(): ?ArrayOfCreate_Payment
    {
      return $this->Payments;
    }

    /**
     * @param ArrayOfCreate_Payment $Payments
     * @return Create_Request
     */
    public function setPayments(?ArrayOfCreate_Payment $Payments): Create_Request
    {
      $this->Payments = $Payments;
      return $this;
    }

    /**
     * @return ArrayOfCreate_ShippingTax
     */
    public function getShippingTaxes(): ?ArrayOfCreate_ShippingTax
    {
      return $this->ShippingTaxes;
    }

    /**
     * @param ArrayOfCreate_ShippingTax $ShippingTaxes
     * @return Create_Request
     */
    public function setShippingTaxes(?ArrayOfCreate_ShippingTax $ShippingTaxes): Create_Request
    {
      $this->ShippingTaxes = $ShippingTaxes;
      return $this;
    }

}
