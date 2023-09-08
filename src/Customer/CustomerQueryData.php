<?php

namespace Y2\Customer;

class CustomerQueryData extends CustomerData
{
    /**
     * @var boolean $Closed
     */
    protected $Closed = null;

    /**
     * @var string $CreationStoreId
     */
    protected $CreationStoreId = null;

    /**
     * @var string $CustomerId
     */
    protected $CustomerId = null;

    /**
     * @var string $InvoiceCustomerId
     */
    protected $InvoiceCustomerId = null;

    /**
     * @var boolean $IsProspect
     */
    protected $IsProspect = null;

    /**
     * @var boolean $IsVirtual
     */
    protected $IsVirtual = null;

    /**
     * @var \DateTime $LastDateUpdate
     */
    protected $LastDateUpdate = null;

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
     * @return CustomerQueryData
     */
    public function setClosed(?bool $Closed): CustomerQueryData
    {
        $this->Closed = $Closed;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreationStoreId(): ?string
    {
        return $this->CreationStoreId;
    }

    /**
     * @param string $CreationStoreId
     *
     * @return CustomerQueryData
     */
    public function setCreationStoreId(?string $CreationStoreId): CustomerQueryData
    {
        $this->CreationStoreId = $CreationStoreId;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerId(): ?string
    {
        return $this->CustomerId;
    }

    /**
     * @param string $CustomerId
     *
     * @return CustomerQueryData
     */
    public function setCustomerId(?string $CustomerId): CustomerQueryData
    {
        $this->CustomerId = $CustomerId;
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
     * @return CustomerQueryData
     */
    public function setInvoiceCustomerId(?string $InvoiceCustomerId): CustomerQueryData
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
     * @return CustomerQueryData
     */
    public function setIsProspect(?bool $IsProspect): CustomerQueryData
    {
        $this->IsProspect = $IsProspect;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsVirtual(): ?bool
    {
        return $this->IsVirtual;
    }

    /**
     * @param boolean $IsVirtual
     *
     * @return CustomerQueryData
     */
    public function setIsVirtual(?bool $IsVirtual): CustomerQueryData
    {
        $this->IsVirtual = $IsVirtual;
        return $this;
    }

    /**
     * @return \DateTime|false|null
     */
    public function getLastDateUpdate()
    {
        if ($this->LastDateUpdate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->LastDateUpdate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime|null $LastDateUpdate
     * @param string $format
     * @return CustomerQueryData
     */
    public function setLastDateUpdate(\DateTime $LastDateUpdate = null, string $format=\DateTime::ATOM): CustomerQueryData
    {
        $this->LastDateUpdate = $LastDateUpdate?->format($format);
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
     * @return CustomerQueryData
     */
    public function setNotepad(?string $Notepad): CustomerQueryData
    {
        $this->Notepad = $Notepad;
        return $this;
    }

}
