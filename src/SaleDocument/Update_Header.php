<?php

namespace Y2\SaleDocument;

class Update_Header
{

    /**
     * @var boolean $Active
     */
    protected $Active = null;

    /**
     * @var string $Comment
     */
    protected $Comment = null;

    /**
     * @var \DateTime $Date
     */
    protected $Date = null;

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
     * @var boolean $LinesUnmodifiable
     */
    protected $LinesUnmodifiable = null;

    /**
     * @var OmniChannel $OmniChannel
     */
    protected $OmniChannel = null;

    /**
     * @var DocumentOrigin $Origin
     */
    protected $Origin = null;

    /**
     * @var string $SalesPersonId
     */
    protected $SalesPersonId = null;

    /**
     * @var boolean $TaxExcluded
     */
    protected $TaxExcluded = null;

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
     * @return boolean
     */
    public function getActive(): bool
    {
      return $this->Active;
    }

    /**
     * @param boolean $Active
     * @return Update_Header
     */
    public function setActive(bool $Active): Update_Header
    {
      $this->Active = $Active;
      return $this;
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
     * @return Update_Header
     */
    public function setComment(string $Comment): Update_Header
    {
      $this->Comment = $Comment;
      return $this;
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
     * @param \DateTime|null $Date
     * @param string $format
     * @return Update_Header
     */
    public function setDate(\DateTime $Date = null, string $format=\DateTime::ATOM): Update_Header
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
    public function getExternalReference(): string
    {
      return $this->ExternalReference;
    }

    /**
     * @param string $ExternalReference
     * @return Update_Header
     */
    public function setExternalReference(string $ExternalReference): Update_Header
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
     * @return Update_Header
     */
    public function setExternalReferenceDate(\DateTime $ExternalReferenceDate = null, string $format=\DateTime::ATOM): Update_Header
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
     * @return Update_Header
     */
    public function setFollowedReference(string $FollowedReference): Update_Header
    {
      $this->FollowedReference = $FollowedReference;
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
     * @return Update_Header
     */
    public function setLinesUnmodifiable(bool $LinesUnmodifiable): Update_Header
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
     * @return Update_Header
     */
    public function setOmniChannel(OmniChannel $OmniChannel): Update_Header
    {
      $this->OmniChannel = $OmniChannel;
      return $this;
    }

    /**
     * @return DocumentOrigin
     */
    public function getOrigin(): DocumentOrigin
    {
      return $this->Origin;
    }

    /**
     * @param DocumentOrigin $Origin
     * @return Update_Header
     */
    public function setOrigin(DocumentOrigin $Origin): Update_Header
    {
      $this->Origin = $Origin;
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
     * @return Update_Header
     */
    public function setSalesPersonId(string $SalesPersonId): Update_Header
    {
      $this->SalesPersonId = $SalesPersonId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTaxExcluded(): bool
    {
      return $this->TaxExcluded;
    }

    /**
     * @param boolean $TaxExcluded
     * @return Update_Header
     */
    public function setTaxExcluded(bool $TaxExcluded): Update_Header
    {
      $this->TaxExcluded = $TaxExcluded;
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
     * @return Update_Header
     */
    public function setUserDefinedDates(ArrayOfUserDefinedDate $UserDefinedDates): Update_Header
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
     * @return Update_Header
     */
    public function setUserDefinedTables(ArrayOfUserDefinedTable $UserDefinedTables): Update_Header
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
     * @return Update_Header
     */
    public function setUserFields(ArrayOfUserField $UserFields): Update_Header
    {
      $this->UserFields = $UserFields;
      return $this;
    }

}
