<?php

namespace Y2\Customer;

class InternalGuid
{
    /**
     * @var boolean $CheckGuid
     */
    protected $CheckGuid = null;

    /**
     * @var string $Guid
     */
    protected $Guid = null;

    public function __construct()
    {

    }

    /**
     * @return boolean
     */
    public function getCheckGuid(): ?bool
    {
        return $this->CheckGuid;
    }

    /**
     * @param boolean $CheckGuid
     *
     * @return InternalGuid
     */
    public function setCheckGuid(?bool $CheckGuid): InternalGuid
    {
        $this->CheckGuid = $CheckGuid;
        return $this;
    }

    /**
     * @return string
     */
    public function getGuid(): ?string
    {
        return $this->Guid;
    }

    /**
     * @param string $Guid
     *
     * @return InternalGuid
     */
    public function setGuid(?string $Guid): InternalGuid
    {
        $this->Guid = $Guid;
        return $this;
    }

}
