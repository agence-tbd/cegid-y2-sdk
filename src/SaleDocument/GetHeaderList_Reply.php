<?php

namespace Y2\SaleDocument;

class GetHeaderList_Reply
{

    /**
     * @var ArrayOfGet_Header $Headers
     */
    protected $Headers = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfGet_Header
     */
    public function getHeaders(): ArrayOfGet_Header
    {
      return $this->Headers;
    }

    /**
     * @param ArrayOfGet_Header $Headers
     * @return GetHeaderList_Reply
     */
    public function setHeaders(ArrayOfGet_Header $Headers): GetHeaderList_Reply
    {
      $this->Headers = $Headers;
      return $this;
    }

}
