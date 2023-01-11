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
    public function getCloseDocument()
    {
      return $this->CloseDocument;
    }

    /**
     * @param boolean $CloseDocument
     * @return CreateFromRemainderManagement
     */
    public function setCloseDocument($CloseDocument)
    {
      $this->CloseDocument = $CloseDocument;
      return $this;
    }
}
