<?php

namespace Y2\SaleDocument;

class CreateResponse
{

    /**
     * @var Create_Reply $CreateResult
     */
    protected $CreateResult = null;

    /**
     * @param Create_Reply $CreateResult
     */
    public function __construct(Create_Reply $CreateResult)
    {
      $this->CreateResult = $CreateResult;
    }

    /**
     * @return Create_Reply
     */
    public function getCreateResult(): ?Create_Reply
    {
      return $this->CreateResult;
    }

    /**
     * @param Create_Reply $CreateResult
     * @return CreateResponse
     */
    public function setCreateResult(Create_Reply $CreateResult): CreateResponse
    {
      $this->CreateResult = $CreateResult;
      return $this;
    }

}
