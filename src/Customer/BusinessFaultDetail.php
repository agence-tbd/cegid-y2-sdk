<?php

namespace Y2\Customer;

class BusinessFaultDetail extends CbpFaultDetail
{
    /**
     * @var ArrayOfstring $MemberNames
     */
    protected $MemberNames = null;

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return ArrayOfstring
     */
    public function getMemberNames(): ArrayOfstring
    {
        return $this->MemberNames;
    }

    /**
     * @param ArrayOfstring $MemberNames
     *
     * @return BusinessFaultDetail
     */
    public function setMemberNames(ArrayOfstring $MemberNames): BusinessFaultDetail
    {
        $this->MemberNames = $MemberNames;
        return $this;
    }

}
