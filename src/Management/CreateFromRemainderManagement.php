<?php

namespace Y2\Management;

class CreateFromRemainderManagement
{
    /**
     * @var boolean $CloseDocument
     */
    protected $CloseDocument = null;

    public function __construct()
    {

    }

    /**
     * @return boolean
     */
    public function getCloseDocument(): ?bool
    {
      return $this->CloseDocument;
    }

    /**
     * @param boolean $CloseDocument
     * @return CreateFromRemainderManagement
     */
    public function setCloseDocument(bool $CloseDocument): CreateFromRemainderManagement
    {
      $this->CloseDocument = $CloseDocument;
      return $this;
    }
}
