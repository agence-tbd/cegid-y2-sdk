<?php

namespace Y2\Customer;

class SearchCustomerIds
{
    /**
     * @var CustomerSearchDataType $searchData
     */
    protected $searchData = null;

    /**
     * @var RetailContext $clientContext
     */
    protected $clientContext = null;

    /**
     * @param CustomerSearchDataType $searchData
     * @param RetailContext          $clientContext
     */
    public function __construct(CustomerSearchDataType $searchData, RetailContext $clientContext)
    {
        $this->searchData    = $searchData;
        $this->clientContext = $clientContext;
    }

    /**
     * @return CustomerSearchDataType
     */
    public function getSearchData(): CustomerSearchDataType
    {
        return $this->searchData;
    }

    /**
     * @param CustomerSearchDataType $searchData
     *
     * @return SearchCustomerIds
     */
    public function setSearchData(CustomerSearchDataType $searchData): SearchCustomerIds
    {
        $this->searchData = $searchData;
        return $this;
    }

    /**
     * @return RetailContext
     */
    public function getClientContext(): RetailContext
    {
        return $this->clientContext;
    }

    /**
     * @param RetailContext $clientContext
     *
     * @return SearchCustomerIds
     */
    public function setClientContext(RetailContext $clientContext): SearchCustomerIds
    {
        $this->clientContext = $clientContext;
        return $this;
    }

}
