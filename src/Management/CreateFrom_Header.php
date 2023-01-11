<?php

namespace Y2\Management;

class CreateFrom_Header
{
    /**
     * @var \DateTime $Date
     */
    protected $Date = null;

    /**
     * @var string $DeviceId
     */
    protected $DeviceId = null;

    /**
     * @var boolean $DisableMergeLines
     */
    protected $DisableMergeLines = null;

    /**
     * @var string $ExternalReference
     */
    protected $ExternalReference = null;

    /**
     * @var string $FollowUpReference
     */
    protected $FollowUpReference = null;

    /**
     * @var string $InternalReference
     */
    protected $InternalReference = null;

    /**
     * @var string $MovementReasonId
     */
    protected $MovementReasonId = null;

    /**
     * @var string $OperationUid
     */
    protected $OperationUid = null;

    /**
     * @var CreateFromDocumentIdentifier $OriginalDocumentIdentifier
     */
    protected $OriginalDocumentIdentifier = null;

    /**
     * @var CreateFromRemainderManagement $RemainderManagement
     */
    protected $RemainderManagement = null;

    /**
     * @var string $SalesPersonId
     */
    protected $SalesPersonId = null;

    /**
     * @var CreateFromCustomerOrderDocumentTypeCreat $Type
     */
    protected $Type = null;

    /**
     * @var ArrayOfUserDefinedDate $UserDefinedDates
     */
    protected $UserDefinedDates = null;

    /**
     * @var ArrayOfUserDefinedTableCustomer $UserDefinedTableCustomers
     */
    protected $UserDefinedTableCustomers = null;

    /**
     * @var ArrayOfUserDefinedTable $UserDefinedTables
     */
    protected $UserDefinedTables = null;

    /**
     * @var ArrayOfUserField $UserFields
     */
    protected $UserFields = null;

    /**
     * @var string $WarehouseId
     */
    protected $WarehouseId = null;

    public function __construct()
    {

    }

    /**
     * @return \DateTime|false|null
     */
    public function getDate()
    {
        if ($this->Date == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->Date);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $Date
     * @return CreateFrom_Header
     */
    public function setDate(\DateTime $Date = null)
    {
        if ($Date == null) {
            $this->Date = null;
        } else {
            $this->Date = $Date->format(\DateTime::ATOM);
        }
        return $this;
    }

    /**
     * @return string
     */
    public function getDeviceId()
    {
        return $this->DeviceId;
    }

    /**
     * @param string $DeviceId
     * @return CreateFrom_Header
     */
    public function setDeviceId($DeviceId)
    {
        $this->DeviceId = $DeviceId;
        return $this;
    }

    /**
     * @return bool
     */
    public function isDisableMergeLines()
    {
        return $this->DisableMergeLines;
    }

    /**
     * @param bool $DisableMergeLines
     * @return CreateFrom_Header
     */
    public function setDisableMergeLines($DisableMergeLines)
    {
        $this->DisableMergeLines = $DisableMergeLines;
        return $this;
    }

    /**
     * @return string
     */
    public function getExternalReference()
    {
        return $this->ExternalReference;
    }

    /**
     * @param string $ExternalReference
     * @return CreateFrom_Header
     */
    public function setExternalReference($ExternalReference)
    {
        $this->ExternalReference = $ExternalReference;
        return $this;
    }

    /**
     * @return string
     */
    public function getFollowUpReference()
    {
        return $this->FollowUpReference;
    }

    /**
     * @param string $FollowUpReference
     * @return CreateFrom_Header
     */
    public function setFollowUpReference($FollowUpReference)
    {
        $this->FollowUpReference = $FollowUpReference;
        return $this;
    }

    /**
     * @return string
     */
    public function getInternalReference()
    {
        return $this->InternalReference;
    }

    /**
     * @param string $InternalReference
     * @return CreateFrom_Header
     */
    public function setInternalReference($InternalReference)
    {
        $this->InternalReference = $InternalReference;
        return $this;
    }

    /**
     * @return string
     */
    public function getMovementReasonId()
    {
        return $this->MovementReasonId;
    }

    /**
     * @param string $MovementReasonId
     * @return CreateFrom_Header
     */
    public function setMovementReasonId($MovementReasonId)
    {
        $this->MovementReasonId = $MovementReasonId;
        return $this;
    }

    /**
     * @return string
     */
    public function getOperationUid()
    {
        return $this->OperationUid;
    }

    /**
     * @param string $OperationUid
     * @return CreateFrom_Header
     */
    public function setOperationUid($OperationUid)
    {
        $this->OperationUid = $OperationUid;
        return $this;
    }

    /**
     * @return CreateFromDocumentIdentifier
     */
    public function getOriginalDocumentIdentifier()
    {
        return $this->OriginalDocumentIdentifier;
    }

    /**
     * @param CreateFromDocumentIdentifier $OriginalDocumentIdentifier
     * @return CreateFrom_Header
     */
    public function setOriginalDocumentIdentifier($OriginalDocumentIdentifier)
    {
        $this->OriginalDocumentIdentifier = $OriginalDocumentIdentifier;
        return $this;
    }

    /**
     * @return CreateFromRemainderManagement
     */
    public function getRemainderManagement()
    {
        return $this->RemainderManagement;
    }

    /**
     * @param CreateFromRemainderManagement $RemainderManagement
     * @return CreateFrom_Header
     */
    public function setRemainderManagement($RemainderManagement)
    {
        $this->RemainderManagement = $RemainderManagement;
        return $this;
    }

    /**
     * @return string
     */
    public function getSalesPersonId()
    {
        return $this->SalesPersonId;
    }

    /**
     * @param string $SalesPersonId
     * @return CreateFrom_Header
     */
    public function setSalesPersonId($SalesPersonId)
    {
        $this->SalesPersonId = $SalesPersonId;
        return $this;
    }

    /**
     * @return CreateFromCustomerOrderDocumentTypeCreat
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * @param CreateFromCustomerOrderDocumentTypeCreat $Type
     * @return CreateFrom_Header
     */
    public function setType($Type)
    {
        $this->Type = $Type;
        return $this;
    }

    /**
     * @return ArrayOfUserDefinedDate
     */
    public function getUserDefinedDates()
    {
        return $this->UserDefinedDates;
    }

    /**
     * @param ArrayOfUserDefinedDate $UserDefinedDates
     * @return CreateFrom_Header
     */
    public function setUserDefinedDates($UserDefinedDates)
    {
        $this->UserDefinedDates = $UserDefinedDates;
        return $this;
    }

    /**
     * @return ArrayOfUserDefinedTableCustomer
     */
    public function getUserDefinedTableCustomers()
    {
        return $this->UserDefinedTableCustomers;
    }

    /**
     * @param ArrayOfUserDefinedTableCustomer $UserDefinedTableCustomers
     * @return CreateFrom_Header
     */
    public function setUserDefinedTableCustomers($UserDefinedTableCustomers)
    {
        $this->UserDefinedTableCustomers = $UserDefinedTableCustomers;
        return $this;
    }

    /**
     * @return ArrayOfUserDefinedTable
     */
    public function getUserDefinedTables()
    {
        return $this->UserDefinedTables;
    }

    /**
     * @param ArrayOfUserDefinedTable $UserDefinedTables
     * @return CreateFrom_Header
     */
    public function setUserDefinedTables($UserDefinedTables)
    {
        $this->UserDefinedTables = $UserDefinedTables;
        return $this;
    }

    /**
     * @return ArrayOfUserField
     */
    public function getUserFields()
    {
        return $this->UserFields;
    }

    /**
     * @param ArrayOfUserField $UserFields
     * @return CreateFrom_Header
     */
    public function setUserFields($UserFields)
    {
        $this->UserFields = $UserFields;
        return $this;
    }

    /**
     * @return string
     */
    public function getWarehouseId()
    {
        return $this->WarehouseId;
    }

    /**
     * @param string $WarehouseId
     * @return CreateFrom_Header
     */
    public function setWarehouseId($WarehouseId)
    {
        $this->WarehouseId = $WarehouseId;
        return $this;
    }
}
