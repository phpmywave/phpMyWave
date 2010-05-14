<?php
/**
 * Abstract Event class
 */
abstract class phpMyWave_Event_Abstract
{

    /**
     * @var phpMyWave_Blip
     */
    private $_blip;

    /**
     * @var phpMyWave_EventMessageBundle
     */
    private $_bundle;

    /**
     * @var string
     */
    private $_modifierId;

    /**
     * @var long
     */
    private $_timestamp;

    /**
     * @var phpMyWave_EventType
     */
    private $_eventType;

    /**
     * @var phpMyWave_Wavelet
     */
    protected $_wavelet;

    /**
     *
     * @param phpMyWave_EventType $_eventType
     * @param phpMyWave_Wavelet $_wavelet
     * @param phpMyWave_EventMessageBundle $_bundle
     * @param string $_modifiedBy
     * @param long $_timestamp
     * @param string $_blipId
     */
    public function __construct($_eventType, $_wavelet, $_bundle, $_modifiedBy, $_timestamp, $_blipId)
    {
    }

    /**
     * Returns the blip in which this event occurs, or the root blip for a
     * wavelet event
     *
     * @return phpMyWave_Blip
     */
    public function getBlip()
    {
        return $this->_blip;
    }

    /**
     * Returns the message bundle which this event belongs to
     *
     * @return phpMyWave_EventMessageBundle
     */
    public function getBundle()
    {
        return $this->_bundle;
    }

    /**
     * Returns the id of the participant that triggered this event
     *
     * @return string
     */
    public function getModifiedBy()
    {
        return $this->_modifierId;
    }

    /**
     * Returns the timestamp when this event occurred on the server
     *
     * @return long
     */
    public function getTimestamp()
    {
        $this->_timestamp;
    }

    /**
     * Returns the type of the event
     *
     * @return phpMyWave_EventType
     */
    public function getType()
    {
        $this->_eventType;
    }

    /**
     * Returns the wavelet in which this event occurs
     *
     * @return phpMyWave_Wavelet
     */
    public function getWavelet()
    {
        return $this->_wavelet;
    }

}
