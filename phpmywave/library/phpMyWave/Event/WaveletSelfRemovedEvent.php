<?php
class phpMyWave_Event_WaveletSelfRemovedEvent extends phpMyWave_Event_Abstract
{

    /**
     * @var string
     */
    private static $_eventType = phpMyWave_Enum_EventType::WAVELET_SELF_REMOVED;

    /**
     * Helper method for type conversion
     *
     * @param phpMyWave_Event_Abstract $_event
     *
     * @return phpMyWave_Event_WaveletSelfRemovedEvent the concrete type of this event, or null if it is of a different event type
     */
    public static function convert($_event)
    {

    }

}
