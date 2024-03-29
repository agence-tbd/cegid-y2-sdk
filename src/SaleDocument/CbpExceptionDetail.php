<?php

namespace Y2\SaleDocument;

class CbpExceptionDetail extends ExceptionDetail
{

    /**
     * @var string $Id
     */
    protected $Id = null;

    /**
     * @var string $ToDo
     */
    protected $ToDo = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return CbpExceptionDetail
     */
    public function setId(?string $Id): CbpExceptionDetail
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return string
     */
    public function getToDo(): ?string
    {
      return $this->ToDo;
    }

    /**
     * @param string $ToDo
     * @return CbpExceptionDetail
     */
    public function setToDo(?string $ToDo): CbpExceptionDetail
    {
      $this->ToDo = $ToDo;
      return $this;
    }

}
