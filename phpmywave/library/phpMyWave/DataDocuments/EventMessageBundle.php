<?php
/**
 * EventMessageBundle class
 */
class phpMyWave_DataDocuments_EventMessageBundle
{

    /**
     * @var phpMyWave_Wavelet
     */
    private $_wavelet;

    /**
     * @var array
     */
    private $_events;

    /**
     * @var array
     */
    private $_blips;

    /**
     * @var string
     */
    private $_robotAddress;

    /**
     * @var string
     */
    private $_rpcServerUrl;

    /**
     * @var unknown_type
     */
    private $_proxyingFor;

    /**
     * Create an EventMessageBundle from JSON data
     *
     * @param array $_jsonData
     *
     * @return EventMessageBundle
     */
    public static function fromJson($_jsonData)
    {
        $bundle = new phpMyWave_EventMessageBundle();
        //TODO Parse JSON data in new object
    }

    /**
     * Add a blip to the blipdata
     *
     * @param string $_id
     */
    public function addBlip($_id, $_blip)
    {
        $this->_blips[$_id] = blip; //TODO BlipData?
    }

    /**
     *
     */
    public function getBlipData()
    {
        return $this->_blips;
    }

    /**
     * Add an event to the events that are tracked
     *
     * @param phpMyWave_Event $_event
     */
    public function addEvent($_event)
    {
        $this->_events[] = $_event;
    }

    /**
     *
     */
    public function getEvents()
    {
        return $this->_events;
    }

    public function clear()
    {
        $this->_events = array();
        $this->_blips = array();
        $this->_wavelet = null;
    }

    /**
     *
     *
     * @return string
     */
    public function getProxyingFor()
    {
        return null; //TODO string
    }


    public function getRequiredBlips()
    {
        return null; //TODO java.util.Map<java.lang.String,java.util.Set<Context>>
    }

    public function getRobotAddress()
    {
        return $this->_robotAddress;
    }

    public function getRpcServerUrl()
    {
        return $this->_rpcServerUrl;
    }

    public function getWavelet()
    {
        return $this->_wavelet;
    }

    public function getWaveletData()
    {
        return null; //TODO WaveletData
    }

    /**
     * Return whether a blip is already in the blipdata
     */
    public function hasBlipId($_id)
    {
        return array_key_exists($_id, $this->_blips);
    }

    /**
     * Return whether the lookingFor event is contained in this bundle
     *
     * @param phpMyWave_EventType $_eventType
     *
     * @return bool
     */
    public function hasEvent($_eventType)
    {
        return null; //TODO
    }

    public function hasMessages()
    {
        return null; //TODO
    }

    /**
     * Require the availability of the specified blipId for this bundle
     */
    public function requireBlip($_blipId, $_contexts)
    {

    }

    public function setBlipData($_blipData)
    {
        $this->_blips = $_blipData;
    }

    public function setEvents($_events)
    {
        $this->_events = array_merge($this->_events, $_events);
    }

    public function setProxyingFor($_proxyingFor)
    {
        $this->_proxyingFor = $_proxyingFor;
    }

    public function setWavelet($_wavelet)
    {
        $this->_wavelet = $_wavelet;
    }

    public function setWaveletData($_waveletData)
    {

    }

}
