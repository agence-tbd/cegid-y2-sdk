<?php

namespace Y2\Customer;

class GetCustomerIdByReferenceResponse
{
    /**
     * @var string $GetCustomerIdByReferenceResult
     */
    protected $GetCustomerIdByReferenceResult = null;

    /**
     * @param string $GetCustomerIdByReferenceResult
     */
    public function __construct(string $GetCustomerIdByReferenceResult)
    {
        $this->GetCustomerIdByReferenceResult = $GetCustomerIdByReferenceResult;
    }

    /**
     * @return string
     */
    public function getGetCustomerIdByReferenceResult(): ?string
    {
        return $this->GetCustomerIdByReferenceResult;
    }

    /**
     * @param string $GetCustomerIdByReferenceResult
     *
     * @return GetCustomerIdByReferenceResponse
     */
    public function setGetCustomerIdByReferenceResult(string $GetCustomerIdByReferenceResult): GetCustomerIdByReferenceResponse
    {
        $this->GetCustomerIdByReferenceResult = $GetCustomerIdByReferenceResult;
        return $this;
    }

}
