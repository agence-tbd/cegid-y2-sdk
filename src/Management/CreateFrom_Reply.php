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
    public function getDocumentCreated(): ?bool
    {
      return $this->DocumentCreated;
    }

    /**
     * @param boolean $DocumentCreated
     * @return CreateFrom_Reply
     */
    public function setDocumentCreated(bool $DocumentCreated): CreateFrom_Reply
    {
      $this->DocumentCreated = $DocumentCreated;
      return $this;
    }

    /**
     * @return ArrayOfCreateFrom_Document
     */
    public function getDocuments(): ?ArrayOfCreateFrom_Document
    {
        return $this->Documents;
    }

    /**
     * @param ArrayOfCreateFrom_Document $Documents
     * @return CreateFrom_Reply
     */
    public function setDocuments(ArrayOfCreateFrom_Document $Documents): CreateFrom_Reply
    {
        $this->Documents = $Documents;
        return $this;
    }

}
