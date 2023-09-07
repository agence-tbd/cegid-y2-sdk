<?php

namespace Y2\Customer;

class AddNewCustomerResponse
{
    /**
     * @var string $AddNewCustomerResult
     */
    protected $AddNewCustomerResult = null;

    /**
     * @param string $AddNewCustomerResult
     */
    public function __construct(string $AddNewCustomerResult)
    {
        $this->AddNewCustomerResult = $AddNewCustomerResult;
    }

    /**
     * @return string
     */
    public function getAddNewCustomerResult(): ?string
    {
        return $this->AddNewCustomerResult;
    }

    /**
     * @param string $AddNewCustomerResult
     *
     * @return AddNewCustomerResponse
     */
    public function setAddNewCustomerResult(string $AddNewCustomerResult): AddNewCustomerResponse
    {
        $this->AddNewCustomerResult = $AddNewCustomerResult;
        return $this;
    }

}
