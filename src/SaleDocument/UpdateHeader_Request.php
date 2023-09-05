<?php

namespace Y2\SaleDocument;

class UpdateHeader_Request
{

    /**
     * @var string $Comment
     */
    protected $Comment = null;

    /**
     * @var Address $DeliveryAddress
     */
    protected $DeliveryAddress = null;

    /**
     * @var string $ExternalReference
     */
    protected $ExternalReference = null;

    /**
     * @var \DateTime $ExternalReferenceDate
     */
    protected $ExternalReferenceDate = null;

    /**
     * @var string $FollowedReference
     */
    protected $FollowedReference = null;

    /**
     * @var SaleDocumentIdentifier $Identifier
     */
    protected $Identifier = null;

    /**
     * @var Address $InvoicingAddress
     */
    protected $InvoicingAddress = null;

    /**
     * @var boolean $LinesUnmodifiable
     */
    protected $LinesUnmodifiable = null;

    /**
     * @var OmniChannel $OmniChannel
     */
    protected $OmniChannel = null;

    /**
     * @var string $SalesPersonId
     */
    protected $SalesPersonId = null;

    /**
     * @var ArrayOfUserDefinedDate $UserDefinedDates
     */
    protected $UserDefinedDates = null;

    /**
     * @var ArrayOfUserDefinedTable $UserDefinedTables
     */
    protected $UserDefinedTables = null;

    /**
     * @var ArrayOfUserField $UserFields
     */
    protected $UserFields = null;


    public function __construct()
    {

    }

    /**
     * @return string
     */
    public function getComment(): string
    {
      return $this->Comment;
    }

    /**
     * @param string $Comment
     * @return UpdateHeader_Request
     */
    public function setComment(string $Comment): UpdateHeader_Request
    {
      $this->Comment = $Comment;
      return $this;
    }

    /**
     * @return Address
     */
    public function getDeliveryAddress(): Address
    {
      return $this->DeliveryAddress;
    }

    /**
     * @param Address $DeliveryAddress
     * @return UpdateHeader_Request
     */
    public function setDeliveryAddress(Address $DeliveryAddress): UpdateHeader_Request
    {
      $this->DeliveryAddress = $DeliveryAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalReference(): string
    {
      return $this->ExternalReference;
    }

    /**
     * @param string $ExternalReference
     * @return UpdateHeader_Request
     */
    public function setExternalReference(string $ExternalReference): UpdateHeader_Request
    {
      $this->ExternalReference = $ExternalReference;
      return $this;
    }

    /**
     * @return \DateTime|false|null
     */
    public function getExternalReferenceDate()
    {
      if ($this->ExternalReferenceDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ExternalReferenceDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime|null $ExternalReferenceDate
     * @param string $format
     * @return UpdateHeader_Request
     */
    public function setExternalReferenceDate(\DateTime $ExternalReferenceDate = null, string $format=\DateTime::ATOM): UpdateHeader_Request
    {
      if ($ExternalReferenceDate == null) {
       $this->ExternalReferenceDate = null;
      } else {
        $this->ExternalReferenceDate = $ExternalReferenceDate->format($format);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getFollowedReference(): string
    {
      return $this->FollowedReference;
    }

    /**
     * @param string $FollowedReference
     * @return UpdateHeader_Request
     */
    public function setFollowedReference(string $FollowedReference): UpdateHeader_Request
    {
      $this->FollowedReference = $FollowedReference;
      return $this;
    }

    /**
     * @return SaleDocumentIdentifier
     */
    public function getIdentifier(): SaleDocumentIdentifier
    {
      return $this->Identifier;
    }

    /**
     * @param SaleDocumentIdentifier $Identifier
     * @return UpdateHeader_Request
     */
    public function setIdentifier(SaleDocumentIdentifier $Identifier): UpdateHeader_Request
    {
      $this->Identifier = $Identifier;
      return $this;
    }

    /**
     * @return Address
     */
    public function getInvoicingAddress(): Address
    {
      return $this->InvoicingAddress;
    }

    /**
     * @param Address $InvoicingAddress
     * @return UpdateHeader_Request
     */
    public function setInvoicingAddress(Address $InvoicingAddress): UpdateHeader_Request
    {
      $this->InvoicingAddress = $InvoicingAddress;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLinesUnmodifiable(): bool
    {
      return $this->LinesUnmodifiable;
    }

    /**
     * @param boolean $LinesUnmodifiable
     * @return UpdateHeader_Request
     */
    public function setLinesUnmodifiable(bool $LinesUnmodifiable): UpdateHeader_Request
    {
      $this->LinesUnmodifiable = $LinesUnmodifiable;
      return $this;
    }

    /**
     * @return OmniChannel
     */
    public function getOmniChannel(): OmniChannel
    {
      return $this->OmniChannel;
    }

    /**
     * @param OmniChannel $OmniChannel
     * @return UpdateHeader_Request
     */
    public function setOmniChannel(OmniChannel $OmniChannel): UpdateHeader_Request
    {
      $this->OmniChannel = $OmniChannel;
      return $this;
    }

    /**
     * @return string
     */
    public function getSalesPersonId(): string
    {
      return $this->SalesPersonId;
    }

    /**
     * @param string $SalesPersonId
     * @return UpdateHeader_Request
     */
    public function setSalesPersonId(string $SalesPersonId): UpdateHeader_Request
    {
      $this->SalesPersonId = $SalesPersonId;
      return $this;
    }

    /**
     * @return ArrayOfUserDefinedDate
     */
    public function getUserDefinedDates(): ArrayOfUserDefinedDate
    {
      return $this->UserDefinedDates;
    }

    /**
     * @param ArrayOfUserDefinedDate $UserDefinedDates
     * @return UpdateHeader_Request
     */
    public function setUserDefinedDates(ArrayOfUserDefinedDate $UserDefinedDates): UpdateHeader_Request
    {
      $this->UserDefinedDates = $UserDefinedDates;
      return $this;
    }

    /**
     * @return ArrayOfUserDefinedTable
     */
    public function getUserDefinedTables(): ArrayOfUserDefinedTable
    {
      return $this->UserDefinedTables;
    }

    /**
     * @param ArrayOfUserDefinedTable $UserDefinedTables
     * @return UpdateHeader_Request
     */
    public function setUserDefinedTables(ArrayOfUserDefinedTable $UserDefinedTables): UpdateHeader_Request
    {
      $this->UserDefinedTables = $UserDefinedTables;
      return $this;
    }

    /**
     * @return ArrayOfUserField
     */
    public function getUserFields(): ArrayOfUserField
    {
      return $this->UserFields;
    }

    /**
     * @param ArrayOfUserField $UserFields
     * @return UpdateHeader_Request
     */
    public function setUserFields(ArrayOfUserField $UserFields): UpdateHeader_Request
    {
      $this->UserFields = $UserFields;
      return $this;
    }

}
