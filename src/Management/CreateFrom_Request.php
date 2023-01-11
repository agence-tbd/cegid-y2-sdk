<?php

namespace Y2\Management;

class CreateFrom_Request
{
    /**
     * @var CreateFrom_Header $Header
     */
    protected $Header = null;

    /**
     * @var ArrayOfCreateFrom_Line $Lines
     */
    protected $Lines = null;

    /**
     * @var ArrayOfCreateFrom_Payment $Payments
     */
    protected $Payments = null;

    public function __construct()
    {

    }

    /**
     * @return CreateFrom_Header
     */
    public function getHeader()
    {
      return $this->Header;
    }

    /**
     * @param CreateFrom_Header $Header
     * @return CreateFrom_Request
     */
    public function setHeader($Header)
    {
      $this->Header = $Header;
      return $this;
    }

    /**
     * @return ArrayOfCreateFrom_Line
     */
    public function getLines()
    {
      return $this->Lines;
    }

    /**
     * @param ArrayOfCreateFrom_Line $Lines
     * @return CreateFrom_Request
     */
    public function setLines($Lines)
    {
      $this->Lines = $Lines;
      return $this;
    }

    /**
     * @return ArrayOfCreateFrom_Payment
     */
    public function getPayments()
    {
      return $this->Payments;
    }

    /**
     * @param ArrayOfCreateFrom_Payment $Payments
     * @return CreateFrom_Request
     */
    public function setPayments($Payments)
    {
      $this->Payments = $Payments;
      return $this;
    }
}
