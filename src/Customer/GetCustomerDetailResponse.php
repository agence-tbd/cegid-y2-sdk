<?php

namespace Y2\Customer;

class GetCustomerDetailResponse
{
    /**
     * @var CustomerQueryData $GetCustomerDetailResult
     */
    protected $GetCustomerDetailResult = null;

    /**
     * @param CustomerQueryData $GetCustomerDetailResult
     */
    public function __construct(CustomerQueryData $GetCustomerDetailResult)
    {
        $this->GetCustomerDetailResult = $GetCustomerDetailResult;
    }

    /**
     * @return CustomerQueryData
     */
    public function getGetCustomerDetailResult(): ?CustomerQueryData
    {
        return $this->GetCustomerDetailResult;
    }

    /**
     * @param CustomerQueryData $GetCustomerDetailResult
     *
     * @return GetCustomerDetailResponse
     */
    public function setGetCustomerDetailResult(CustomerQueryData $GetCustomerDetailResult): GetCustomerDetailResponse
    {
        $this->GetCustomerDetailResult = $GetCustomerDetailResult;
        return $this;
    }

}
