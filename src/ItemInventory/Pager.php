<?php

namespace Y2\ItemInventory;

class Pager
{
    /**
     * @var int $PageIndex
     */
    protected $PageIndex = null;

    /**
     * @var int $PageSize
     */
    protected $PageSize = null;

    public function __construct()
    {

    }

    /**
     * @return int
     */
    public function getPageIndex(): ?int
    {
        return $this->PageIndex;
    }

    /**
     * @param int $PageIndex
     * @return Pager
     */
    public function setPageIndex(?int $PageIndex): Pager
    {
        $this->PageIndex = $PageIndex;
        return $this;
    }

    /**
     * @return int
     */
    public function getPageSize(): ?int
    {
        return $this->PageSize;
    }

    /**
     * @param int $PageSize
     * @return Pager
     */
    public function setPageSize(?int $PageSize): Pager
    {
        $this->PageSize = $PageSize;
        return $this;
    }

}
