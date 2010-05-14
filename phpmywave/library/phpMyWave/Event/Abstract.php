<?php
/**
 * Abstract Event class
 */
abstract class phpMyWave_Event_Abstract
{
    /**
     * The message bundle this event belongs to.
     * 
     * @var string
     */
    private $_blipId;

    /**
     * The message bundle this event belongs to.
     * 
     * @var phpMyWave_EventMessageBundle
     */
    private $_bundle;

    /**
     * The ID of the participant that triggered this event.
     * 
     * @var string
     */
    private $_modifiedBy;

    /**
     * The timestamp of this event.
     * 
     * @var int
     */
    private $_timestamp;

    /**
     * The type of the event.
     * 
     * @var string
     */
    private $_eventType;

    /**
     * The wavelet in which this event occurs.
     * 
     * @var phpMyWave_Wavelet
     */
    protected $_wavelet;

    /**
     * Constructor.
     *
     * @param  string                        $_eventType
     * @param  phpMyWave_Wavelet             $_wavelet
     * @param  phpMyWave_EventMessageBundle  $_bundle
     * @param  string                        $_modifiedBy
     * @param  int                           $_timestamp
     * @param  string                        $_blipId
     */
    public function __construct($_eventType, $_wavelet, $_bundle, $_modifiedBy, $_timestamp, $_blipId)
    {
        $this->_eventType  = $_eventType;
        $this->_wavelet    = $_wavelet;
        $this->_bundle     = $_bundle;
        $this->_modifiedBy = $_modifiedBy;
        $this->_timestamp  = $_timestamp;
        $this->_blipId     = $_blipId;
    }

    /**
     * Returns the blip in which this event occurs, or the root blip for a wavelet event.
     *
     * @return phpMyWave_Blip
     */
    public function getBlip()
    {
        return $this->_blipId;
    }

    /**
     * Returns the message bundle which this event belongs to.
     *
     * @return phpMyWave_EventMessageBundle
     */
    public function getBundle()
    {
        return $this->_bundle;
    }

    /**
     * Returns the id of the participant that triggered this event.
     *
     * @return string
     */
    public function getModifiedBy()
    {
        return $this->_modifiedBy;
    }

    /**
     * Returns the timestamp when this event occurred on the server.
     *
     * @return long
     */
    public function getTimestamp()
    {
        return $this->_timestamp;
    }

    /**
     * Returns the type of the event.
     *
     * @return phpMyWave_EventType
     */
    public function getType()
    {
        return $this->_eventType;
    }

    /**
     * Returns the wavelet in which this event occurs.
     *
     * @return phpMyWave_Wavelet
     */
    public function getWavelet()
    {
        return $this->_wavelet;
    }
}