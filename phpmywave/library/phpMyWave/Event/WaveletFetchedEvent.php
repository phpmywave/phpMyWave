<?php
class phpMyWave_Event_WaveletFetchedEvent extends phpMyWave_Event_Abstract
{

    /**
     * @var string
     */
    private static $_eventType = phpMyWave_Enum_EventType::WAVELET_FETCHED;

    /**
     * @var string
     */
    private $_value;

    /**
     * @var phpMyWave_WaveletData
     */
    private $_waveletData;

    /**
     * @var array
     */
    private $_blips;

    /**
     * Returns the message that was passed into the wavelet fetch operation
     *
     * @return string the message that was passed into the wavelet fetch operation
     */
    public function getMessage()
    {
        return $this->_message;
    }

    /**
     * Returns the fetched wavelet
     *
     * @return phpMyWave_WaveletData an instance of WaveletData that represents the fetched wavelet
     */
    public function getWaveletData()
    {

    }

    /**
     * Returns the blips that are associated with the fetched wavelet
     *
     * @param array an associative array of BlipData that are associated with the fetched wavelet
     * TODO java.util.Map<java.lang.String,BlipData>
     */
    public function getBlips()
    {
        return $this->_blips;
    }

    /**
     * Helper method for type conversion
     *
     * @param phpMyWave_Event_Abstract $_event
     *
     * @return phpMyWave_Event_WaveletFetchedEvent the concrete type of this event, or null if it is of a different event type
     */
    public static function convert($_event)
    {

    }

}
