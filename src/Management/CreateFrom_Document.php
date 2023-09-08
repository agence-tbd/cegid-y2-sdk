<?php

namespace Y2\Management;

class CreateFrom_Document
{
    /**
     * @var ?string $InternalReference
     */
    protected $InternalReference = null;

    /**
     * @var CreateFromDocumentKey $Key
     */
    protected $Key = null;

    public function __construct()
    {

    }

    /**
     * @return string
     */
    public function getReference(): ?string
    {
        return $this->InternalReference;
    }

    /**
     * @param string $InternalReference
     * @return CreateFrom_Document
     */
    public function setReference(?string $InternalReference): CreateFrom_Document
    {
        $this->InternalReference = $InternalReference;
        return $this;
    }

    /**
     * @return CreateFromDocumentKey
     */
    public function getKey(): ?CreateFromDocumentKey
    {
      return $this->Key;
    }

    /**
     * @param CreateFromDocumentKey $Key
     * @return CreateFrom_Document
     */
    public function setKey(?CreateFromDocumentKey $Key): CreateFrom_Document
    {
      $this->Key = $Key;
      return $this;
    }


}
