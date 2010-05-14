<?php
class phpMyWave_Event_FormButtonClickedEvent extends phpMyWave_Event_Abstract
{

    /**
     * @var string
     */
    private static $_eventType = phpMyWave_Enum_EventType::FORM_BUTTON_CLICKED;

    /**
     * @var string
     */
    private $_buttonName;

    /**
     * Constructor
     *
     * @param $_wavelet
     * @param $_bundle
     * @param $_modifiedBy
     * @param $_timestamp
     * @param $_blipId
     * @param $_buttonName
     */
    public function phpMyWave_Event_FormButtonClickedEvent(
        phpMyWave_Wavelet $_wavelet,
        phpMyWave_EventMessageBundle $_bundle,
        $_modifiedBy,
        $_timestamp,
        $_blipId,
        $_buttonName)
    {
        $this->_buttonName = $_buttonName;
        parent::__construct(self::$_eventType, $_wavelet, $_bundle, $_modifiedBy, $_timestamp, $_blipId);
    }

    /**
     * Returns the name of the button that was clicked
     *
     * @return string the name of the button that was clicked
     */
    public function getButtonName()
    {
        return $this->_buttonName;
    }


    /**
     * Helper method for type conversion
     *
     * @param phpMyWave_Event_Abstract $_event
     *
     * @return phpMyWave_Event_FormButtonClickedEvent the concrete type of this event, or null if it is of a different event type
     */
    public static function convert($_event)
    {

    }

}
