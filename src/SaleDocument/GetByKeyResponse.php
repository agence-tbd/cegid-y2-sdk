<?php

namespace Y2\SaleDocument;

class GetByKeyResponse
{

    /**
     * @var Get_Reply $GetByKeyResult
     */
    protected $GetByKeyResult = null;

    /**
     * @param Get_Reply $GetByKeyResult
     */
    public function __construct(Get_Reply $GetByKeyResult)
    {
      $this->GetByKeyResult = $GetByKeyResult;
    }

    /**
     * @return Get_Reply
     */
    public function getGetByKeyResult(): Get_Reply
    {
      return $this->GetByKeyResult;
    }

    /**
     * @param Get_Reply $GetByKeyResult
     * @return GetByKeyResponse
     */
    public function setGetByKeyResult(Get_Reply $GetByKeyResult): GetByKeyResponse
    {
      $this->GetByKeyResult = $GetByKeyResult;
      return $this;
    }

}
