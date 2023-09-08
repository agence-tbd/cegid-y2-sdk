<?php

namespace Y2\Customer;

class AddNewCustomer
{
    /**
     * @var CustomerInsertData|null $customerData
     */
    protected ?CustomerInsertData $customerData = null;

    /**
     * @var RetailContext|null $clientContext
     */
    protected ?RetailContext $clientContext = null;

    /**
     * @param CustomerInsertData $customerData
     * @param RetailContext      $clientContext
     */
    public function __construct(CustomerInsertData $customerData, RetailContext $clientContext)
    {
        $this->customerData  = $customerData;
        $this->clientContext = $clientContext;
    }

    /**
     * @return CustomerInsertData
     */
    public function getCustomerData(): ?CustomerInsertData
    {
        return $this->customerData;
    }

    /**
     * @param CustomerInsertData $customerData
     *
     * @return AddNewCustomer
     */
    public function setCustomerData(?CustomerInsertData $customerData): AddNewCustomer
    {
        $this->customerData = $customerData;
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
     * @return AddNewCustomer
     */
    public function setClientContext(?RetailContext $clientContext): AddNewCustomer
    {
        $this->clientContext = $clientContext;
        return $this;
    }

}
