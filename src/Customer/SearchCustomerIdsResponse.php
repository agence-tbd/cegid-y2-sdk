<?php

namespace Y2\Customer;

class SearchCustomerIdsResponse
{

    /**
     * @var ArrayOfCustomerQueryData $SearchCustomerIdsResult
     */
    protected $SearchCustomerIdsResult = null;

    /**
     * @param ArrayOfCustomerQueryData $SearchCustomerIdsResult
     */
    public function __construct(ArrayOfCustomerQueryData $SearchCustomerIdsResult)
    {
        $this->SearchCustomerIdsResult = $SearchCustomerIdsResult;
    }

    /**
     * @return ArrayOfCustomerQueryData
     */
    public function getSearchCustomerIdsResult(): ?ArrayOfCustomerQueryData
    {
        return $this->SearchCustomerIdsResult;
    }

    /**
     * @param ArrayOfCustomerQueryData $SearchCustomerIdsResult
     *
     * @return SearchCustomerIdsResponse
     */
    public function setSearchCustomerIdsResult(?ArrayOfCustomerQueryData $SearchCustomerIdsResult): SearchCustomerIdsResponse
    {
        $this->SearchCustomerIdsResult = $SearchCustomerIdsResult;
        return $this;
    }

}
