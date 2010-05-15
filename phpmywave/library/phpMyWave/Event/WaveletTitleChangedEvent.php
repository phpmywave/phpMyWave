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
