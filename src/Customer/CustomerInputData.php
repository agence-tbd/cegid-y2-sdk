<?php

namespace Y2\Customer;

class CustomerInputData extends CustomerData
{
    /**
     * @var boolean $Closed
     */
    protected $Closed = null;

    /**
     * @var string $InvoiceCustomerId
     */
    protected $InvoiceCustomerId = null;

    /**
     * @var boolean $IsProspect
     */
    protected $IsProspect = null;

    /**
     * @var string $Notepad
     */
    protected $Notepad = null;

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return boolean
     */
    public function getClosed(): ?bool
    {
        return $this->Closed;
    }

    /**
     * @param boolean $Closed
     *
     * @return CustomerInputData
     */
    public function setClosed(?bool $Closed): CustomerInputData
    {
        $this->Closed = $Closed;
        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceCustomerId(): ?string
    {
        return $this->InvoiceCustomerId;
    }

    /**
     * @param string $InvoiceCustomerId
     *
     * @return CustomerInputData
     */
    public function setInvoiceCustomerId(?string $InvoiceCustomerId): CustomerInputData
    {
        $this->InvoiceCustomerId = $InvoiceCustomerId;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsProspect(): ?bool
    {
        return $this->IsProspect;
    }

    /**
     * @param boolean $IsProspect
     *
     * @return CustomerInputData
     */
    public function setIsProspect(?bool $IsProspect): CustomerInputData
    {
        $this->IsProspect = $IsProspect;
        return $this;
    }

    /**
     * @return string
     */
    public function getNotepad(): ?string
    {
        return $this->Notepad;
    }

    /**
     * @param string $Notepad
     *
     * @return CustomerInputData
     */
    public function setNotepad(?string $Notepad): CustomerInputData
    {
        $this->Notepad = $Notepad;
        return $this;
    }

}
