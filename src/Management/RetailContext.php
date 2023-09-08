<?php

namespace Y2\Management;

class RetailContext
{
    /**
     * @var string $DatabaseId
     */
    protected $DatabaseId = null;

    public function __construct()
    {

    }

    /**
     * @return string
     */
    public function getDatabaseId(): ?string
    {
      return $this->DatabaseId;
    }

    /**
     * @param string $DatabaseId
     * @return RetailContext
     */
    public function setDatabaseId(?string $DatabaseId): RetailContext
    {
      $this->DatabaseId = $DatabaseId;
      return $this;
    }
}
