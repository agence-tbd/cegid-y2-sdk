<?php

namespace Y2\SaleDocument;

class Get_Reply
{

    /**
     * @var Address $DeliveryAddress
     */
    protected $DeliveryAddress = null;

    /**
     * @var Get_Header $Header
     */
    protected $Header = null;

    /**
     * @var Address $InvoicingAddress
     */
    protected $InvoicingAddress = null;

    /**
     * @var ArrayOfGet_Line $Lines
     */
    protected $Lines = null;

    /**
     * @var ArrayOfGet_Payment $Payments
     */
    protected $Payments = null;

    /**
     * @var ArrayOfGet_ShippingTax $ShippingTaxes
     */
    protected $ShippingTaxes = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Address
     */
    public function getDeliveryAddress(): ?Address
    {
      return $this->DeliveryAddress;
    }

    /**
     * @param Address $DeliveryAddress
     * @return Get_Reply
     */
    public function setDeliveryAddress(Address $DeliveryAddress): Get_Reply
    {
      $this->DeliveryAddress = $DeliveryAddress;
      return $this;
    }

    /**
     * @return Get_Header
     */
    public function getHeader(): ?Get_Header
    {
      return $this->Header;
    }

    /**
     * @param Get_Header $Header
     * @return Get_Reply
     */
    public function setHeader(Get_Header $Header): Get_Reply
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
     * @return Get_Reply
     */
    public function setInvoicingAddress(Address $InvoicingAddress): Get_Reply
    {
      $this->InvoicingAddress = $InvoicingAddress;
      return $this;
    }

    /**
     * @return ArrayOfGet_Line
     */
    public function getLines(): ?ArrayOfGet_Line
    {
      return $this->Lines;
    }

    /**
     * @param ArrayOfGet_Line $Lines
     * @return Get_Reply
     */
    public function setLines(ArrayOfGet_Line $Lines): Get_Reply
    {
      $this->Lines = $Lines;
      return $this;
    }

    /**
     * @return ArrayOfGet_Payment
     */
    public function getPayments(): ?ArrayOfGet_Payment
    {
      return $this->Payments;
    }

    /**
     * @param ArrayOfGet_Payment $Payments
     * @return Get_Reply
     */
    public function setPayments(ArrayOfGet_Payment $Payments): Get_Reply
    {
      $this->Payments = $Payments;
      return $this;
    }

    /**
     * @return ArrayOfGet_ShippingTax
     */
    public function getShippingTaxes(): ?ArrayOfGet_ShippingTax
    {
      return $this->ShippingTaxes;
    }

    /**
     * @param ArrayOfGet_ShippingTax $ShippingTaxes
     * @return Get_Reply
     */
    public function setShippingTaxes(ArrayOfGet_ShippingTax $ShippingTaxes): Get_Reply
    {
      $this->ShippingTaxes = $ShippingTaxes;
      return $this;
    }

}
