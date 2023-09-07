<?php

namespace Y2\SaleDocument;

class CustomersReservationCreate
{

    /**
     * @var CustomersReservationCreate_Request $customersReservationCreateRequest
     */
    protected $customersReservationCreateRequest = null;

    /**
     * @var RetailContext $clientContext
     */
    protected $clientContext = null;

    /**
     * @param CustomersReservationCreate_Request $customersReservationCreateRequest
     * @param RetailContext $clientContext
     */
    public function __construct(CustomersReservationCreate_Request $customersReservationCreateRequest, RetailContext $clientContext)
    {
      $this->customersReservationCreateRequest = $customersReservationCreateRequest;
      $this->clientContext = $clientContext;
    }

    /**
     * @return CustomersReservationCreate_Request
     */
    public function getCustomersReservationCreateRequest(): ?CustomersReservationCreate_Request
    {
      return $this->customersReservationCreateRequest;
    }

    /**
     * @param CustomersReservationCreate_Request $customersReservationCreateRequest
     * @return CustomersReservationCreate
     */
    public function setCustomersReservationCreateRequest(CustomersReservationCreate_Request $customersReservationCreateRequest): CustomersReservationCreate
    {
      $this->customersReservationCreateRequest = $customersReservationCreateRequest;
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
     * @return CustomersReservationCreate
     */
    public function setClientContext(RetailContext $clientContext): CustomersReservationCreate
    {
      $this->clientContext = $clientContext;
      return $this;
    }

}
