<?php

namespace Y2\SaleDocument;

class GetByReferenceResponse
{

    /**
     * @var Get_Reply $GetByReferenceResult
     */
    protected $GetByReferenceResult = null;

    /**
     * @param Get_Reply $GetByReferenceResult
     */
    public function __construct(Get_Reply $GetByReferenceResult)
    {
      $this->GetByReferenceResult = $GetByReferenceResult;
    }

    /**
     * @return Get_Reply
     */
    public function getGetByReferenceResult(): Get_Reply
    {
      return $this->GetByReferenceResult;
    }

    /**
     * @param Get_Reply $GetByReferenceResult
     * @return GetByReferenceResponse
     */
    public function setGetByReferenceResult(Get_Reply $GetByReferenceResult): GetByReferenceResponse
    {
      $this->GetByReferenceResult = $GetByReferenceResult;
      return $this;
    }

}
