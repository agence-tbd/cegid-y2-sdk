<?php

namespace Y2\Customer;

class UpdateCustomerResponse
{
    /**
     * @var string $UpdateCustomerResult
     */
    protected $UpdateCustomerResult = null;

    /**
     * @param string $UpdateCustomerResult
     */
    public function __construct(string $UpdateCustomerResult)
    {
        $this->UpdateCustomerResult = $UpdateCustomerResult;
    }

    /**
     * @return string
     */
    public function getUpdateCustomerResult(): string
    {
        return $this->UpdateCustomerResult;
    }

    /**
     * @param string $UpdateCustomerResult
     *
     * @return UpdateCustomerResponse
     */
    public function setUpdateCustomerResult(string $UpdateCustomerResult): UpdateCustomerResponse
    {
        $this->UpdateCustomerResult = $UpdateCustomerResult;
        return $this;
    }

}
