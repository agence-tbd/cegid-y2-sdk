<?php

namespace Y2\Management;

class CreateFromDocumentIdentifier
{
    /**
     * @var CreateFromDocumentKey $Key
     */
    protected $Key = null;

    /**
     * @var CreateFromDocumentReference $Reference
     */
    protected $Reference = null;

    public function __construct()
    {

    }

    /**
     * @return CreateFromDocumentKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param CreateFromDocumentKey $Key
     * @return CreateFromDocumentIdentifier
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return CreateFromDocumentReference
     */
    public function getReference()
    {
      return $this->Reference;
    }

    /**
     * @param CreateFromDocumentReference $Reference
     * @return CreateFromDocumentIdentifier
     */
    public function setReference($Reference)
    {
      $this->Reference = $Reference;
      return $this;
    }

}
