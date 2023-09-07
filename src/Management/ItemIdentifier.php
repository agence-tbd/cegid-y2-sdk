<?php

namespace Y2\Management;

class ItemIdentifier
{
    /**
     * @var string $Id
     */
    protected $Id = null;

    /**
     * @var string $Reference
     */
    protected $Reference = null;

    public function __construct()
    {

    }

    /**
     * @return string
     */
    public function getId(): ?string
    {
      return $this->Id;
    }

    /**
     * @param string $Id
     * @return ItemIdentifier
     */
    public function setId(string $Id): ItemIdentifier
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return string
     */
    public function getReference(): ?string
    {
      return $this->Reference;
    }

    /**
     * @param string $Reference
     * @return ItemIdentifier
     */
    public function setReference(string $Reference): ItemIdentifier
    {
      $this->Reference = $Reference;
      return $this;
    }

}
