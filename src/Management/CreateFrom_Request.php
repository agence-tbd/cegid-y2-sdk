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
    public function getHeader(): ?CreateFrom_Header
    {
      return $this->Header;
    }

    /**
     * @param CreateFrom_Header $Header
     * @return CreateFrom_Request
     */
    public function setHeader(CreateFrom_Header $Header): CreateFrom_Request
    {
      $this->Header = $Header;
      return $this;
    }

    /**
     * @return ArrayOfCreateFrom_Line
     */
    public function getLines(): ?ArrayOfCreateFrom_Line
    {
      return $this->Lines;
    }

    /**
     * @param ArrayOfCreateFrom_Line $Lines
     * @return CreateFrom_Request
     */
    public function setLines(ArrayOfCreateFrom_Line $Lines): CreateFrom_Request
    {
      $this->Lines = $Lines;
      return $this;
    }

    /**
     * @return ArrayOfCreateFrom_Payment
     */
    public function getPayments(): ?ArrayOfCreateFrom_Payment
    {
      return $this->Payments;
    }

    /**
     * @param ArrayOfCreateFrom_Payment $Payments
     * @return CreateFrom_Request
     */
    public function setPayments(ArrayOfCreateFrom_Payment $Payments): CreateFrom_Request
    {
      $this->Payments = $Payments;
      return $this;
    }
}
