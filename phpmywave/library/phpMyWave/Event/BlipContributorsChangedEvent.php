<?php
class phpMyWave_Event_BlipContributorsChangedEvent extends phpMyWave_Event_Abstract
{

    /**
     * @var string
     */
    private static $_eventType = phpMyWave_Enum_EventType::BLIP_CONTRIBUTORS_CHANGED;

    /**
     * @var array
     */
    private $_contributorsAdded;

    /**
     * @var array
     */
    private $_contributorsRemoved;

    /**
     * Constructor
     *
     * @param $_wavelet
     * @param $_bundle
     * @param $_modifiedBy
     * @param $_timestamp
     * @param $_blipId
     * @param $_contributorsAdded
     * @param $_contributorsRemoved
     */
    public function phpMyWave_Event_BlipContributorsChangedEvent(
        phpMyWave_Wavelet $_wavelet,
        phpMyWave_EventMessageBundle $_bundle,
        $_modifiedBy,
        $_timestamp,
        $_blipId,
        $_contributorsAdded,
        $_contributorsRemoved)
    {
        $this->_contributorsAdded = $_contributorsAdded;
        $this->_contributorsRemoved = $_contributorsRemoved;
        parent::__construct(self::$_eventType, $_bundle, $_modifiedBy, $_timestamp, $_blipId);
    }

    /**
     * Returns a list of the new contributors
     *
     * @return array the added contributors
     */
    public function getContributorsAdded()
    {
        return $this->_contributorsAdded;
    }

    /**
     * Returns a list of the removed contributors
     *
     * @return array the removed contributors
     */
    public function getContributorsRemoved()
    {
        return $this->_contributorsRemoved;
    }

    /**
     * Helper method for type conversion
     *
     * @param phpMyWave_Event_Abstract $_event
     *
     * @return phpMyWave_Event_BlipContributorsChangedEvent the concrete type of this event, or null if it is of a different event type
     */
    public static function convert($_event)
    {

    }

}
