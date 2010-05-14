<?php
class phpMyWave_Event_WaveletTitleChangedEvent extends phpMyWave_Event_Abstract
{

    /**
     * @var string
     */
    private static $_eventType = phpMyWave_Enum_EventType::WAVELET_TITLE_CHANGED;

    /**
     * @var string
     */
    private $_title;

    /**
     * Constructor
     *
     * @param $_wavelet
     * @param $_bundle
     * @param $_modifiedBy
     * @param $_timestamp
     * @param $_blipId
     * @param $_title
     */
    public function phpMyWave_Event_WaveletSelfAddedEvent(
        phpMyWave_Wavelet $_wavelet,
        phpMyWave_EventMessageBundle $_bundle,
        $_modifiedBy,
        $_timestamp,
        $_blipId,
        $_title)
    {
        parent::__construct(self::$_eventType, $_wavelet, $_bundle, $_modifiedBy, $_timestamp, $_blipId);
    }

    /**
     * Helper method for type conversion
     *
     * @param phpMyWave_Event_Abstract $_event
     *
     * @return phpMyWave_Event_WaveletTitleChangedEvent the concrete type of this event, or null if it is of a different event type
     */
    public static function convert($_event)
    {

    }

    /**
     * Returns the new title
     *
     * @return string the new title
     */
    public function getTitle()
    {
        return $this->_title;
    }

}
