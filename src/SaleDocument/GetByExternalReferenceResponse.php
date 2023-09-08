<?php

namespace Y2\SaleDocument;

class GetByExternalReferenceResponse
{

    /**
     * @var GetByExternalReference_Reply $GetByExternalReferenceResult
     */
    protected $GetByExternalReferenceResult = null;

    /**
     * @param GetByExternalReference_Reply $GetByExternalReferenceResult
     */
    public function __construct(GetByExternalReference_Reply $GetByExternalReferenceResult)
    {
      $this->GetByExternalReferenceResult = $GetByExternalReferenceResult;
    }

    /**
     * @return GetByExternalReference_Reply
     */
    public function getGetByExternalReferenceResult(): ?GetByExternalReference_Reply
    {
      return $this->GetByExternalReferenceResult;
    }

    /**
     * @param GetByExternalReference_Reply $GetByExternalReferenceResult
     * @return GetByExternalReferenceResponse
     */
    public function setGetByExternalReferenceResult(?GetByExternalReference_Reply $GetByExternalReferenceResult): GetByExternalReferenceResponse
    {
      $this->GetByExternalReferenceResult = $GetByExternalReferenceResult;
      return $this;
    }

}
