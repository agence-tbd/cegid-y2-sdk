<?php

namespace Y2\Customer;

class EmailDataType
{
    /**
     * @var string $AlternativeEmail
     */
    protected $AlternativeEmail = null;

    /**
     * @var string $Email
     */
    protected $Email = null;

    /**
     * @var boolean $EmailingAccepted
     */
    protected $EmailingAccepted = null;

    /**
     * @var boolean $SendReceiptByMail
     */
    protected $SendReceiptByMail = null;

    public function __construct()
    {

    }

    /**
     * @return string
     */
    public function getAlternativeEmail(): ?string
    {
        return $this->AlternativeEmail;
    }

    /**
     * @param string $AlternativeEmail
     *
     * @return EmailDataType
     */
    public function setAlternativeEmail(string $AlternativeEmail): EmailDataType
    {
        $this->AlternativeEmail = $AlternativeEmail;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): ?string
    {
        return $this->Email;
    }

    /**
     * @param string $Email
     *
     * @return EmailDataType
     */
    public function setEmail(string $Email): EmailDataType
    {
        $this->Email = $Email;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getEmailingAccepted(): ?bool
    {
        return $this->EmailingAccepted;
    }

    /**
     * @param boolean $EmailingAccepted
     *
     * @return EmailDataType
     */
    public function setEmailingAccepted(bool $EmailingAccepted): EmailDataType
    {
        $this->EmailingAccepted = $EmailingAccepted;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getSendReceiptByMail(): ?bool
    {
        return $this->SendReceiptByMail;
    }

    /**
     * @param boolean $SendReceiptByMail
     *
     * @return EmailDataType
     */
    public function setSendReceiptByMail(bool $SendReceiptByMail): EmailDataType
    {
        $this->SendReceiptByMail = $SendReceiptByMail;
        return $this;
    }

}
