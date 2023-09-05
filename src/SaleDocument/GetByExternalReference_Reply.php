<?php

namespace Y2\SaleDocument;

class GetByExternalReference_Reply
{

    /**
     * @var ArrayOfGet_Reply $Get_Replies
     */
    protected $Get_Replies = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfGet_Reply
     */
    public function getGet_Replies(): ArrayOfGet_Reply
    {
      return $this->Get_Replies;
    }

    /**
     * @param ArrayOfGet_Reply $Get_Replies
     * @return GetByExternalReference_Reply
     */
    public function setGet_Replies(ArrayOfGet_Reply $Get_Replies): GetByExternalReference_Reply
    {
      $this->Get_Replies = $Get_Replies;
      return $this;
    }

}
