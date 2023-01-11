<?php

namespace Y2\Management;

class CreateFromResponse
{
    /**
     * @var CreateFrom_Reply $CreateFromResult
     */
    protected $CreateFromResult = null;

    /**
     * @param CreateFrom_Reply $CreateFromResult
     */
    public function __construct($CreateFromResult)
    {
      $this->CreateFromResult = $CreateFromResult;
    }

    /**
     * @return CreateFrom_Reply
     */
    public function getCreateFromResult()
    {
      return $this->CreateFromResult;
    }

    /**
     * @param CreateFrom_Reply $CreateFromResult
     * @return CreateFromResponse
     */
    public function setCreateFromResult($CreateFromResult)
    {
      $this->CreateFromResult = $CreateFromResult;
      return $this;
    }
}
