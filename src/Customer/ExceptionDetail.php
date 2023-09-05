<?php

namespace Y2\Customer;

class ExceptionDetail
{
    /**
     * @var string $HelpLink
     */
    protected $HelpLink = null;

    /**
     * @var ExceptionDetail $InnerException
     */
    protected $InnerException = null;

    /**
     * @var string $Message
     */
    protected $Message = null;

    /**
     * @var string $StackTrace
     */
    protected $StackTrace = null;

    /**
     * @var string $TrackingId
     */
    protected $TrackingId = null;

    /**
     * @var string $Type
     */
    protected $Type = null;


    public function __construct()
    {

    }

    /**
     * @return string
     */
    public function getHelpLink(): string
    {
        return $this->HelpLink;
    }

    /**
     * @param string $HelpLink
     *
     * @return ExceptionDetail
     */
    public function setHelpLink(string $HelpLink): ExceptionDetail
    {
        $this->HelpLink = $HelpLink;
        return $this;
    }

    /**
     * @return ExceptionDetail
     */
    public function getInnerException(): ExceptionDetail
    {
        return $this->InnerException;
    }

    /**
     * @param ExceptionDetail $InnerException
     *
     * @return ExceptionDetail
     */
    public function setInnerException(ExceptionDetail $InnerException): ExceptionDetail
    {
        $this->InnerException = $InnerException;
        return $this;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->Message;
    }

    /**
     * @param string $Message
     *
     * @return ExceptionDetail
     */
    public function setMessage(string $Message): ExceptionDetail
    {
        $this->Message = $Message;
        return $this;
    }

    /**
     * @return string
     */
    public function getStackTrace(): string
    {
        return $this->StackTrace;
    }

    /**
     * @param string $StackTrace
     *
     * @return ExceptionDetail
     */
    public function setStackTrace(string $StackTrace): ExceptionDetail
    {
        $this->StackTrace = $StackTrace;
        return $this;
    }

    /**
     * @return string
     */
    public function getTrackingId(): string
    {
        return $this->TrackingId;
    }

    /**
     * @param string $TrackingId
     *
     * @return ExceptionDetail
     */
    public function setTrackingId(string $TrackingId): ExceptionDetail
    {
        $this->TrackingId = $TrackingId;
        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->Type;
    }

    /**
     * @param string $Type
     *
     * @return ExceptionDetail
     */
    public function setType(string $Type): ExceptionDetail
    {
        $this->Type = $Type;
        return $this;
    }

}
