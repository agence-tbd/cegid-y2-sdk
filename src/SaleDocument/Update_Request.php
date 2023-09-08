<?php

namespace Y2\SaleDocument;

class Update_Request
{

    /**
     * @var Address $DeliveryAddress
     */
    protected $DeliveryAddress = null;

    /**
     * @var Update_Header $Header
     */
    protected $Header = null;

    /**
     * @var SaleDocumentIdentifier $Identifier
     */
    protected $Identifier = null;

    /**
     * @var Address $InvoicingAddress
     */
    protected $InvoicingAddress = null;

    /**
     * @var ArrayOfUpdate_Line $Lines
     */
    protected $Lines = null;

    /**
     * @var ArrayOfUpdate_Payment $Payments
     */
    protected $Payments = null;

    /**
     * @var ArrayOfUpdate_ShippingTax $ShippingTaxes
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
     * @return Update_Request
     */
    public function setDeliveryAddress(?Address $DeliveryAddress): Update_Request
    {
      $this->DeliveryAddress = $DeliveryAddress;
      return $this;
    }

    /**
     * @return Update_Header
     */
    public function getHeader(): ?Update_Header
    {
      return $this->Header;
    }

    /**
     * @param Update_Header $Header
     * @return Update_Request
     */
    public function setHeader(?Update_Header $Header): Update_Request
    {
      $this->Header = $Header;
      return $this;
    }

    /**
     * @return SaleDocumentIdentifier
     */
    public function getIdentifier(): ?SaleDocumentIdentifier
    {
      return $this->Identifier;
    }

    /**
     * @param SaleDocumentIdentifier $Identifier
     * @return Update_Request
     */
    public function setIdentifier(?SaleDocumentIdentifier $Identifier): Update_Request
    {
      $this->Identifier = $Identifier;
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
     * @return Update_Request
     */
    public function setInvoicingAddress(?Address $InvoicingAddress): Update_Request
    {
      $this->InvoicingAddress = $InvoicingAddress;
      return $this;
    }

    /**
     * @return ArrayOfUpdate_Line
     */
    public function getLines(): ?ArrayOfUpdate_Line
    {
      return $this->Lines;
    }

    /**
     * @param ArrayOfUpdate_Line $Lines
     * @return Update_Request
     */
    public function setLines(?ArrayOfUpdate_Line $Lines): Update_Request
    {
      $this->Lines = $Lines;
      return $this;
    }

    /**
     * @return ArrayOfUpdate_Payment
     */
    public function getPayments(): ?ArrayOfUpdate_Payment
    {
      return $this->Payments;
    }

    /**
     * @param ArrayOfUpdate_Payment $Payments
     * @return Update_Request
     */
    public function setPayments(?ArrayOfUpdate_Payment $Payments): Update_Request
    {
      $this->Payments = $Payments;
      return $this;
    }

    /**
     * @return ArrayOfUpdate_ShippingTax
     */
    public function getShippingTaxes(): ?ArrayOfUpdate_ShippingTax
    {
      return $this->ShippingTaxes;
    }

    /**
     * @param ArrayOfUpdate_ShippingTax $ShippingTaxes
     * @return Update_Request
     */
    public function setShippingTaxes(?ArrayOfUpdate_ShippingTax $ShippingTaxes): Update_Request
    {
      $this->ShippingTaxes = $ShippingTaxes;
      return $this;
    }

}
