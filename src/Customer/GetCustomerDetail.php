<?php

namespace Y2\Customer;

class GetCustomerDetail
{
    /**
     * @var string $customerId
     */
    protected $customerId = null;

    /**
     * @var RetailContext $clientContext
     */
    protected $clientContext = null;

    /**
     * @param string        $customerId
     * @param RetailContext $clientContext
     */
    public function __construct(string $customerId, RetailContext $clientContext)
    {
        $this->customerId    = $customerId;
        $this->clientContext = $clientContext;
    }

    /**
     * @return string
     */
    public function getCustomerId(): ?string
    {
        return $this->customerId;
    }

    /**
     * @param string $customerId
     *
     * @return GetCustomerDetail
     */
    public function setCustomerId(string $customerId): GetCustomerDetail
    {
        $this->customerId = $customerId;
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
     *
     * @return GetCustomerDetail
     */
    public function setClientContext(RetailContext $clientContext): GetCustomerDetail
    {
        $this->clientContext = $clientContext;
        return $this;
    }

}
