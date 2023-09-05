<?php

namespace Y2\SaleDocument;

class GetHeaderListResponse
{

    /**
     * @var GetHeaderList_Reply $GetHeaderListResult
     */
    protected $GetHeaderListResult = null;

    /**
     * @param GetHeaderList_Reply $GetHeaderListResult
     */
    public function __construct(GetHeaderList_Reply $GetHeaderListResult)
    {
      $this->GetHeaderListResult = $GetHeaderListResult;
    }

    /**
     * @return GetHeaderList_Reply
     */
    public function getGetHeaderListResult(): GetHeaderList_Reply
    {
      return $this->GetHeaderListResult;
    }

    /**
     * @param GetHeaderList_Reply $GetHeaderListResult
     * @return GetHeaderListResponse
     */
    public function setGetHeaderListResult(GetHeaderList_Reply $GetHeaderListResult): GetHeaderListResponse
    {
      $this->GetHeaderListResult = $GetHeaderListResult;
      return $this;
    }

}
