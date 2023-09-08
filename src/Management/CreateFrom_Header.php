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
    public function setDate(\DateTime $Date = null, $format=\DateTime::ATOM): CreateFrom_Header
    {
        if ($Date == null) {
            $this->Date = null;
        } else {
            $this->Date = $Date->format($format);
        }
        return $this;
    }

    /**
     * @return string
     */
    public function getDeviceId(): ?string
    {
        return $this->DeviceId;
    }

    /**
     * @param string $DeviceId
     * @return CreateFrom_Header
     */
    public function setDeviceId(?string $DeviceId): CreateFrom_Header
    {
        $this->DeviceId = $DeviceId;
        return $this;
    }

    /**
     * @return bool
     */
    public function isDisableMergeLines(): bool
    {
        return $this->DisableMergeLines;
    }

    /**
     * @param bool $DisableMergeLines
     * @return CreateFrom_Header
     */
    public function setDisableMergeLines(?bool $DisableMergeLines): CreateFrom_Header
    {
        $this->DisableMergeLines = $DisableMergeLines;
        return $this;
    }

    /**
     * @return string
     */
    public function getExternalReference(): ?string
    {
        return $this->ExternalReference;
    }

    /**
     * @param string $ExternalReference
     * @return CreateFrom_Header
     */
    public function setExternalReference(?string $ExternalReference): CreateFrom_Header
    {
        $this->ExternalReference = $ExternalReference;
        return $this;
    }

    /**
     * @return string
     */
    public function getFollowUpReference(): ?string
    {
        return $this->FollowUpReference;
    }

    /**
     * @param string $FollowUpReference
     * @return CreateFrom_Header
     */
    public function setFollowUpReference(?string $FollowUpReference): CreateFrom_Header
    {
        $this->FollowUpReference = $FollowUpReference;
        return $this;
    }

    /**
     * @return string
     */
    public function getInternalReference(): ?string
    {
        return $this->InternalReference;
    }

    /**
     * @param string $InternalReference
     * @return CreateFrom_Header
     */
    public function setInternalReference(?string $InternalReference): CreateFrom_Header
    {
        $this->InternalReference = $InternalReference;
        return $this;
    }

    /**
     * @return string
     */
    public function getMovementReasonId(): ?string
    {
        return $this->MovementReasonId;
    }

    /**
     * @param string $MovementReasonId
     * @return CreateFrom_Header
     */
    public function setMovementReasonId(?string $MovementReasonId): CreateFrom_Header
    {
        $this->MovementReasonId = $MovementReasonId;
        return $this;
    }

    /**
     * @return string
     */
    public function getOperationUid(): ?string
    {
        return $this->OperationUid;
    }

    /**
     * @param string $OperationUid
     * @return CreateFrom_Header
     */
    public function setOperationUid(?string $OperationUid): CreateFrom_Header
    {
        $this->OperationUid = $OperationUid;
        return $this;
    }

    /**
     * @return CreateFromDocumentIdentifier
     */
    public function getOriginalDocumentIdentifier(): ?CreateFromDocumentIdentifier
    {
        return $this->OriginalDocumentIdentifier;
    }

    /**
     * @param CreateFromDocumentIdentifier $OriginalDocumentIdentifier
     * @return CreateFrom_Header
     */
    public function setOriginalDocumentIdentifier(?CreateFromDocumentIdentifier $OriginalDocumentIdentifier): CreateFrom_Header
    {
        $this->OriginalDocumentIdentifier = $OriginalDocumentIdentifier;
        return $this;
    }

    /**
     * @return CreateFromRemainderManagement
     */
    public function getRemainderManagement(): ?CreateFromRemainderManagement
    {
        return $this->RemainderManagement;
    }

    /**
     * @param CreateFromRemainderManagement $RemainderManagement
     * @return CreateFrom_Header
     */
    public function setRemainderManagement(?CreateFromRemainderManagement $RemainderManagement): CreateFrom_Header
    {
        $this->RemainderManagement = $RemainderManagement;
        return $this;
    }

    /**
     * @return string
     */
    public function getSalesPersonId(): ?string
    {
        return $this->SalesPersonId;
    }

    /**
     * @param string $SalesPersonId
     * @return CreateFrom_Header
     */
    public function setSalesPersonId(?string $SalesPersonId): CreateFrom_Header
    {
        $this->SalesPersonId = $SalesPersonId;
        return $this;
    }

    /**
     * @return CreateFromCustomerOrderDocumentTypeCreat
     */
    public function getType(): ?CreateFromCustomerOrderDocumentTypeCreat
    {
        return $this->Type;
    }

    /**
     * @param string $Type
     * @return CreateFrom_Header
     */
    public function setType(?string $Type): CreateFrom_Header
    {
        $this->Type = $Type;
        return $this;
    }

    /**
     * @return ArrayOfUserDefinedDate
     */
    public function getUserDefinedDates(): ?ArrayOfUserDefinedDate
    {
        return $this->UserDefinedDates;
    }

    /**
     * @param ArrayOfUserDefinedDate $UserDefinedDates
     * @return CreateFrom_Header
     */
    public function setUserDefinedDates(?ArrayOfUserDefinedDate $UserDefinedDates): CreateFrom_Header
    {
        $this->UserDefinedDates = $UserDefinedDates;
        return $this;
    }

    /**
     * @return ArrayOfUserDefinedTableCustomer
     */
    public function getUserDefinedTableCustomers(): ?ArrayOfUserDefinedTableCustomer
    {
        return $this->UserDefinedTableCustomers;
    }

    /**
     * @param ArrayOfUserDefinedTableCustomer $UserDefinedTableCustomers
     * @return CreateFrom_Header
     */
    public function setUserDefinedTableCustomers(?ArrayOfUserDefinedTableCustomer $UserDefinedTableCustomers): CreateFrom_Header
    {
        $this->UserDefinedTableCustomers = $UserDefinedTableCustomers;
        return $this;
    }

    /**
     * @return ArrayOfUserDefinedTable
     */
    public function getUserDefinedTables(): ?ArrayOfUserDefinedTable
    {
        return $this->UserDefinedTables;
    }

    /**
     * @param ArrayOfUserDefinedTable $UserDefinedTables
     * @return CreateFrom_Header
     */
    public function setUserDefinedTables(?ArrayOfUserDefinedTable $UserDefinedTables): CreateFrom_Header
    {
        $this->UserDefinedTables = $UserDefinedTables;
        return $this;
    }

    /**
     * @return ArrayOfUserField
     */
    public function getUserFields(): ?ArrayOfUserField
    {
        return $this->UserFields;
    }

    /**
     * @param ArrayOfUserField $UserFields
     * @return CreateFrom_Header
     */
    public function setUserFields(?ArrayOfUserField $UserFields): CreateFrom_Header
    {
        $this->UserFields = $UserFields;
        return $this;
    }

    /**
     * @return string
     */
    public function getWarehouseId(): ?string
    {
        return $this->WarehouseId;
    }

    /**
     * @param string $WarehouseId
     * @return CreateFrom_Header
     */
    public function setWarehouseId(?string $WarehouseId): CreateFrom_Header
    {
        $this->WarehouseId = $WarehouseId;
        return $this;
    }
}
