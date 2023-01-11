<?php

namespace Y2\Management;

class CreateFrom_Reply
{
    /**
     * @var boolean $DocumentCreated
     */
    protected $DocumentCreated;

    /**
     * @var ArrayOfCreateFrom_Document
     */
    protected $Documents;

    public function __construct()
    {

    }

    /**
     * @return boolean
     */
    public function getDocumentCreated()
    {
      return $this->DocumentCreated;
    }

    /**
     * @param boolean $DocumentCreated
     * @return CreateFrom_Reply
     */
    public function setDocumentCreated($DocumentCreated)
    {
      $this->DocumentCreated = $DocumentCreated;
      return $this;
    }

    /**
     * @return ArrayOfCreateFrom_Document
     */
    public function getDocuments()
    {
        return $this->Documents;
    }

    /**
     * @param ArrayOfCreateFrom_Document $Documents
     * @return CreateFrom_Reply
     */
    public function setDocuments($Documents)
    {
        $this->Documents = $Documents;
        return $this;
    }

}
