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
    public function __construct(CreateFrom_Reply $CreateFromResult)
    {
      $this->CreateFromResult = $CreateFromResult;
    }

    /**
     * @return CreateFrom_Reply
     */
    public function getCreateFromResult(): CreateFrom_Reply
    {
      return $this->CreateFromResult;
    }

    /**
     * @param CreateFrom_Reply $CreateFromResult
     * @return CreateFromResponse
     */
    public function setCreateFromResult(CreateFrom_Reply $CreateFromResult): CreateFromResponse
    {
      $this->CreateFromResult = $CreateFromResult;
      return $this;
    }
}
