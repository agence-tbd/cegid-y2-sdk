<?php

namespace Y2\SaleDocument;

class UserDefinedTable
{

    /**
     * @var UserDefinedId $Id
     */
    protected $Id = null;

    /**
     * @var string $Value
     */
    protected $Value = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return UserDefinedId
     */
    public function getId(): ?UserDefinedId
    {
      return $this->Id;
    }

    /**
     * @param UserDefinedId $Id
     * @return UserDefinedTable
     */
    public function setId(?UserDefinedId $Id): UserDefinedTable
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue(): ?string
    {
      return $this->Value;
    }

    /**
     * @param string $Value
     * @return UserDefinedTable
     */
    public function setValue(?string $Value): UserDefinedTable
    {
      $this->Value = $Value;
      return $this;
    }

}
