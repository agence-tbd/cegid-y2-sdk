<?php

namespace Y2\SaleDocument;

class UpdatePayments
{

    /**
     * @var UpdatePayments_Request $updatePaymentsRequest
     */
    protected $updatePaymentsRequest = null;

    /**
     * @var RetailContext $clientContext
     */
    protected $clientContext = null;

    /**
     * @param UpdatePayments_Request $updatePaymentsRequest
     * @param RetailContext $clientContext
     */
    public function __construct(UpdatePayments_Request $updatePaymentsRequest, RetailContext $clientContext)
    {
      $this->updatePaymentsRequest = $updatePaymentsRequest;
      $this->clientContext = $clientContext;
    }

    /**
     * @return UpdatePayments_Request
     */
    public function getUpdatePaymentsRequest(): ?UpdatePayments_Request
    {
      return $this->updatePaymentsRequest;
    }

    /**
     * @param UpdatePayments_Request $updatePaymentsRequest
     * @return UpdatePayments
     */
    public function setUpdatePaymentsRequest(UpdatePayments_Request $updatePaymentsRequest): UpdatePayments
    {
      $this->updatePaymentsRequest = $updatePaymentsRequest;
      return $this;
    }

    /**
     * @return RetailContext
     */
    public function getClientContext(): ?RetailContext
    {
      return $this->clientContext;
    }

    /**
     * @param RetailContext $clientContext
     * @return UpdatePayments
     */
    public function setClientContext(RetailContext $clientContext): UpdatePayments
    {
      $this->clientContext = $clientContext;
      return $this;
    }

}
