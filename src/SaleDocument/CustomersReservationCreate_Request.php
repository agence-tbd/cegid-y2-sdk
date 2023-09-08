<?php

namespace Y2\SaleDocument;

class CustomersReservationCreate_Request
{

    /**
     * @var CustomersReservationCreate_Header $Header
     */
    protected $Header = null;

    /**
     * @var ArrayOfCustomersReservationCreate_Line $Lines
     */
    protected $Lines = null;

    /**
     * @var ArrayOfCreate_Payment $Payments
     */
    protected $Payments = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CustomersReservationCreate_Header
     */
    public function getHeader(): ?CustomersReservationCreate_Header
    {
      return $this->Header;
    }

    /**
     * @param CustomersReservationCreate_Header $Header
     * @return CustomersReservationCreate_Request
     */
    public function setHeader(?CustomersReservationCreate_Header $Header): CustomersReservationCreate_Request
    {
      $this->Header = $Header;
      return $this;
    }

    /**
     * @return ArrayOfCustomersReservationCreate_Line
     */
    public function getLines(): ?ArrayOfCustomersReservationCreate_Line
    {
      return $this->Lines;
    }

    /**
     * @param ArrayOfCustomersReservationCreate_Line $Lines
     * @return CustomersReservationCreate_Request
     */
    public function setLines(?ArrayOfCustomersReservationCreate_Line $Lines): CustomersReservationCreate_Request
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
     * @return CustomersReservationCreate_Request
     */
    public function setPayments(?ArrayOfCreate_Payment $Payments): CustomersReservationCreate_Request
    {
      $this->Payments = $Payments;
      return $this;
    }

}
